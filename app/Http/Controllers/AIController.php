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

        $prep = "الصف: $subject\nالموضوع: $title\n"
            . "الأهداف: يتعرف الطالب على مفاهيم $title ويطبقها\n"
            . "وسائل التعلم: السبورة، بطاقات تعليمية\n"
            . "المقدمة: سؤال تحفيزي حول $title\n"
            . "العرض: شرح الدرس بخطوات مع أمثلة\n"
            . "التطبيق: أنشطة صفية\n"
            . "التقويم: أسئلة شفهية\n"
            . "الواجب: حل واجب قصير\n";

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
