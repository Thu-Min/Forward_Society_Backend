<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TimelineController extends Controller
{
    //Timeline List Page
   public function timelineList(){
    $timelineData=Timeline::orderBy('id', 'DESC')->get();

    return view("timeline.timelineList",compact('timelineData'));
   }
    //go to create timeline page
   public function createTimelinePage(){
    return view("timeline.createTimeline");
   }
   //go to edit timeline page
   public function timelineEdit($id){



    $timelineDBData=Timeline::where('id',$id)->first();

   return view('timeline.editTimeline',compact('timelineDBData'));

   }
   //delete timeline
   public function timelineDelete($id){

   Timeline::where('id',$id)->delete();
    return redirect()->route('timeline.list');

   }
    //Update timeline
   public function timelineUpdate($id,Request $request){
    $this->checkTimelineData($request,'edit');
    $timelineUpdatedData=[
        'title'=>$request->title,
        'description'=>$request->description,

    ];
      if($request->hasFile('image')){

        //old image filename
        $oldFileName=Timeline::where('id',$id)->first()->toArray()['photo'];

        //new image filename
        $newFilename=uniqid().$request->file('image')->getClientOriginalName();
        //store image to storage
       $request->file('image')->storeAs('public',$newFilename);
        //save image filename to db
       $timelineUpdatedData['photo']=$newFilename;
       //delete old image from storage
       Storage::delete('public/'.$oldFileName);

     }
     Timeline::where('id',$id)->update($timelineUpdatedData);

    return redirect()->route('timeline.list');

   }

     //create timeline
   public function createTimeline(Request $request){
    $this->checkTimelineData($request,'create');
    $timelineData=[
        'title'=>$request->title,
        'description'=>$request->description,

    ];
     if($request->hasFile('image')){

        //image filename
        $filename=uniqid().$request->file('image')->getClientOriginalName();
        //store image to storage
       $request->file('image')->storeAs('public',$filename);
        //save image filename to db
       $timelineData['photo']=$filename;

     }
     Timeline::create($timelineData);
    return redirect()->route('timeline.list')->with(['createSuccess'=>"Timeline created successfully!"]);
   }
   //Validate Timeline Data
   private function checkTimelineData(Request $request,$status){
    Validator::make($request->all(),[
        'title'=>'required',
        'description'=>'required',
        'image'=>$status=='create'? 'required|mimes:png,jpg,jpeg,webp':'mimes:png,jpg,jpeg,webp'
    ])->validate();
   }

}
