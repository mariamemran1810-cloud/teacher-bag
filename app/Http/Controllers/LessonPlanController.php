<?php

namespace App\Http\Controllers;

use App\Models\LessonPlan;
use Illuminate\Http\Request;

class LessonPlanController extends Controller
{
    public function index()
    {
        return response()->json(LessonPlan::all());
    }

    public function store(Request $request)
    {
        return response()->json(LessonPlan::create($request->all()), 201);
    }

    public function show(LessonPlan $lessonplan)
    {
        return response()->json($lessonplan);
    }

    public function update(Request $request, LessonPlan $lessonplan)
    {
        $lessonplan->update($request->all());
        return response()->json($lessonplan);
    }

    public function destroy(LessonPlan $lessonplan)
    {
        $lessonplan->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
