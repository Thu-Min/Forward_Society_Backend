<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Resources\MessageResource;

class MessageApiController extends Controller
{
    /* The expected data
    [
  "name" => "maythinkyi"
  "email" => "mathinkyi@gmail.com"
  "phone" => "091234567"
  "title" => "Message title"
  "description" => "lorem textfocfkkidkf"
]
 */
    //Message send from user
    public function messageSend(Request $request){
       $messageData=[
         "name" => $request->name,
  "email" => $request->email,
  "phone" => $request->phone,
  "title" => $request->title,
  "description" => $request->description
       ];
       Message::create($messageData);
    }
    //Get Messages Data
  public function messages(){
    $testimonials=Message::all();
    return MessageResource::collection($testimonials);
  }
   //Get Single Message Data
  public function message($id){
     return new MessageResource(Message::findOrFail($id));

  }
}
