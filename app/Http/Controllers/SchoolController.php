<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        return response()->json(School::all());
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'sometimes|string']);
        return response()->json(School::create($request->all()), 201);
    }

    public function show(School $school)
    {
        return response()->json($school);
    }

    public function update(Request $request, School $school)
    {
        $school->update($request->all());
        return response()->json($school);
    }

    public function destroy(School $school)
    {
        $school->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
