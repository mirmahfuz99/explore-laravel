<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function index(){
        return view('chat/chat');
    }

    public function fetcchMessages(){
        
        return Message::with('user')->get(); 
    }


    public function sendMessage(Request $request){

        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);
    }
}
