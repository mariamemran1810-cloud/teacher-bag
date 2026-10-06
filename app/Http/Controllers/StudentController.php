<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json(Student::with(['classroom','school'])->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate(['name' => 'required|string']);
        return response()->json(Student::create($request->all()), 201);
    }

    public function show(Student $student)
    {
        return response()->json($student->load(['classroom','grades','payments','attendances']));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return response()->json($student);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
