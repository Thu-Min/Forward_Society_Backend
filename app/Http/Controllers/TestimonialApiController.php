<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Resources\TestimonialResource;

class TestimonialApiController extends Controller
{
     //Get Testimonials Data
  public function testimonials(){
    $testimonials=Testimonial::all();
    return TestimonialResource::collection($testimonials);
  }
   //Get Single Testimonial Data
  public function testimonial($id){
     return new TestimonialResource(Testimonial::findOrFail($id));

  }
}
