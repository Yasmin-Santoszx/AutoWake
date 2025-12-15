<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function exibe_chatbot()
    {
        return view('chatbot');
    }
}
