<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    public function index()
    {
        return response()->json(ChatMessage::all());
    }

    public function store(Request $request)
    {
        return response()->json(ChatMessage::create($request->all()), 201);
    }

    public function show(ChatMessage $chatmessage)
    {
        return response()->json($chatmessage);
    }

    public function update(Request $request, ChatMessage $chatmessage)
    {
        $chatmessage->update($request->all());
        return response()->json($chatmessage);
    }

    public function destroy(ChatMessage $chatmessage)
    {
        $chatmessage->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
