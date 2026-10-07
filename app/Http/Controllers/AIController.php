<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Grade;
use App\Models\ExamResult;
use Illuminate\Http\Request;

class AIController extends Controller
{
    public function lessonPrep(Request $request)
    {
        $request->validate(['title' => 'required|string']);
        $title = $request->title;
        $subject = $request->subject ?? 'عام';
        $prep = (new \App\Services\AIService)->generateLessonPrep($title, $subject);

        return response()->json(['title' => $title, 'subject' => $subject, 'preparation' => $prep]);
    }

    public function reportCard($studentId)
    {
        $student = Student::findOrFail($studentId);
        $grades = Grade::where('student_id', $studentId)->get();
        $exams = ExamResult::where('student_id', $studentId)->get();
        return response()->json([
            'student' => $student->name,
            'grades' => $grades,
            'exam_results' => $exams,
            'average_grade' => $grades->avg('score'),
            'average_exams' => $exams->avg('score'),
        ]);
    }
}
