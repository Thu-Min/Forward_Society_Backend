<?php

namespace App\Http\Controllers\api;

use App\Models\Timeline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TimelineResource;

class TimelineApiController extends Controller
{
    //Get Timelines Data
  public function timelines(){
    $timelines=Timeline::all();
    return TimelineResource::collection($timelines);
  }
   //Get Single Timeline Data
  public function timeline($id){
     return new TimelineResource(Timeline::findOrFail($id));

  }
}
