<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Message;
class MessagesController extends Controller
{

    public function submit(Request $request){
          //Validate

      $this->validate($request,[
          'name'=>'required',
          'email'=>'required',
          'content'=>'required']);

        //store Data

      /*  $message = new Message();

          $message->name   = $request->input('name');
          $message->email  = $request->input('email');
          $message->content= $request->input('content');
          $message->save();
      */
        Message::create($request->all());
        return redirect('/')->with('message','Message Sent !!');


    }
}
