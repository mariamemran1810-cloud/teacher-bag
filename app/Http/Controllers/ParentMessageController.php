<?php

namespace App\Http\Controllers;

use App\Models\ParentMessage;
use Illuminate\Http\Request;

class ParentMessageController extends Controller
{
    public function index()
    {
        return response()->json(ParentMessage::all());
    }

    public function store(Request $request)
    {
        return response()->json(ParentMessage::create($request->all()), 201);
    }

    public function show(ParentMessage $parentmessage)
    {
        return response()->json($parentmessage);
    }

    public function update(Request $request, ParentMessage $parentmessage)
    {
        $parentmessage->update($request->all());
        return response()->json($parentmessage);
    }

    public function destroy(ParentMessage $parentmessage)
    {
        $parentmessage->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
