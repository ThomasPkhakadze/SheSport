<?php

namespace App\Http\Controllers;


use App\Events\MessageSent;
use App\Author;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // select all users except logged one
      $users = Author::where('id', '!=', Auth::id())->get();
        return view('home', ['users' => $users]);
    }

    public function getMessage($user_id) 
    {
      $my_id = Auth::id();
      
      $messages = Message::where(function($query) use ($user_id, $my_id) {
        $query->where('from', $my_id)->where('to', $user_id);
      })->orWhere(function ($query) use ($user_id, $my_id){
        $query->where('from', $user_id)->where('to', $my_id);
      })->get();

      return view('messages.index', ['messages' => $messages]);
    }
    public function sendMessage(Request $request) 
    {
      $from = Auth::id();
      $to = $request->reciever_id;
      $text = $request->message;

      $message = new Message;
      $message->from = $from;
      $message->to = $to;
      $message->message = $text;
      $message->is_read = 0;
      $message->save();
       


     event(new MessageSent('123'));

     return redirect()->route('get-message');
     
    }

}