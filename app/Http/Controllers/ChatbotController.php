<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ChatbotService;

class ChatbotController extends Controller
{
    protected $chatbotService;

    public function __construct(ChatbotService $chatbotService){
        $this->chatbotService = $chatbotService;
    }

    public function chat(Request $request)
    {
        $message = $request->input('message'); 
        $reply = $this->chatbotService->getResponse($message);
        return response()->json(['reply' => $reply]);
    }
}