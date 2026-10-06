<?php

namespace App\Http\Controllers;

use App\Models\ExamResult;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    public function index()
    {
        return response()->json(ExamResult::all());
    }

    public function store(Request $request)
    {
        return response()->json(ExamResult::create($request->all()), 201);
    }

    public function show(ExamResult $examresult)
    {
        return response()->json($examresult);
    }

    public function update(Request $request, ExamResult $examresult)
    {
        $examresult->update($request->all());
        return response()->json($examresult);
    }

    public function destroy(ExamResult $examresult)
    {
        $examresult->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
