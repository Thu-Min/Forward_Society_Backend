<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    //Testimonial List Page
    public function testimonialList(){
        $testimonialData=Testimonial::orderBy('id','DESC')->paginate(8);

        return view('testimonial.testimonialList',compact('testimonialData'));
    }
    //Testimonial Create Page
    public function createTestimonialPage(){

        return view('testimonial.createTestimonial');
    }
    //create Testimonial
     public function createTestimonial(Request $request){

        $this->checkTestimonialData($request,'create');
       $testimonialData=[
        'name'=>$request->name,
        'position'=>$request->position,
        'description'=>$request->description,
       ];
        if($request->hasFile('image')){

        //image filename
        $filename=uniqid().$request->file('image')->getClientOriginalName();
        //store image to storage
       $request->file('image')->storeAs('public',$filename);
        //save image filename to db
       $testimonialData['photo']=$filename;

     }
       Testimonial::create($testimonialData);
       return redirect()->route('testimonial.list');
    }
    // Testimonial Edit Page
    public function testimonialEdit($id){
       $testimonialDBData=Testimonial::where('id',$id)->first();

   return view('testimonial.editTestmonial',compact('testimonialDBData'));
    }
     // Testimonial Update
      public function testimonialUpdate($id,Request $request){
        $this->checkTestimonialData($request,'edit');
        $testimonialUpdatedData=[
         'name'=>$request->name,
        'position'=>$request->position,
        'description'=>$request->description

        ];
        if($request->hasFile('image')){

            //old image filename
            $oldFileName=Testimonial::where('id',$id)->first()->toArray()['photo'];

            //new image filename
            $newFilename=uniqid().$request->file('image')->getClientOriginalName();
            //store image to storage
        $request->file('image')->storeAs('public',$newFilename);
            //save image filename to db
        $testimonialUpdatedData['photo']=$newFilename;
        //delete old image from storage
        Storage::delete('public/'.$oldFileName);

        }
            Testimonial::where('id',$id)->update($testimonialUpdatedData);
            return redirect()->route('testimonial.list');
      }
      // Testimonial Delete
       public function testimonialDelete($id){

   Testimonial::where('id',$id)->delete();
    return redirect()->route('testimonial.list');

   }
    //Validate Testimonial Data
   private function checkTestimonialData(Request $request,$status){
    Validator::make($request->all(),[
         'name'=>'required',
        'position'=>'required',
        'description'=>'required',
        'image'=>$status=='create'? 'required|mimes:png,jpg,jpeg,webp':'mimes:png,jpg,jpeg,webp'
    ])->validate();
   }
}
