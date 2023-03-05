<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //messagesList
    public function messagesList(){
        $messages=Message::orderBy('id','DESC')->get();
        return view("messages.messagesList",compact("messages"));
    }
    //message Delete
     public function messagesDelete($id){
        Message::where('id',$id)->delete();
        return redirect()->route('messages.list');
     }
     //messages Detail
      public function messagesDetail($id){
         $message= Message::where('id',$id)->first();


          return view('messages.messageDetail',compact('message'));
      }
}
