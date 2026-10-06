<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        return response()->json(Classroom::all());
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'sometimes|string']);
        return response()->json(Classroom::create($request->all()), 201);
    }

    public function show(Classroom $classroom)
    {
        return response()->json($classroom);
    }

    public function update(Request $request, Classroom $classroom)
    {
        $classroom->update($request->all());
        return response()->json($classroom);
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
