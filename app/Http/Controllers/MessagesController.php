<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        //return $request->input('name'); // this will return in contact/submit "page" the content of the name box

        //for validation: extend from the Controller.php
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);
        //return 'SUCCESS'; // so if name and email fields are not empty will have SUCCESS in the contact/submit page

        //create a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();
        return redirect('/');
    }



    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages',$messages);
    }



}
