<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Message;

class MessagesController extends Controller
{
    public function index() {
      return view('messages')->with('messages', Message::all());
    }

    public function submit(Request $request) {
      $validator = Validator::make($request->all(), [
        'name'    => 'required',
        'email'   => 'required',
        'message' => 'required'
      ]);

      if ($validator->fails()) {
        $keys = array_keys($validator->messages()->getMessages());
        return redirect('/contact')->with('firstError', $keys[0])->withErrors($validator)->withInput();
      }      

      $message = new Message;
      $message->name    = $request->input('name');
      $message->email   = $request->input('email');
      $message->message = $request->input('message');
      $message->save();

      return redirect('/')->with('success', 'Message sent.');
    }
}
