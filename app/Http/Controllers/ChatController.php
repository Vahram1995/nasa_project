<?php

namespace App\Http\Controllers;
use App\Events\ChatEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class ChatController extends Controller
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

    public function chat(){
        return view('chat');
    }

//    public function send(Request $request){
//        return $request->all();
//        $message = $request->data->message;
//        $user = User::find(Auth::id());
//       event(new ChatEvent($message,$user));
//    }
    public function send(Request $request){

        $message=$request->message;
      //  $file= $request->file;
        $details= [
            'title'=>'Mail from Chat Room',
            'body'=> 'hello from Vahram'
        ];

        $user = User::find(Auth::id());
       $mail= $user->email;
       event(new ChatEvent($message,$user));
       Mail::to($mail)->send(new TestMail($details));
       return 'Mail has been sent!';
    }
}
