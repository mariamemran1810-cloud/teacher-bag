<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Grade;
use App\Models\Exam;
use App\Models\ExamResult;
use App\Models\LessonPlan;
use App\Models\WeeklyFollowup;
use App\Models\MonthlyReport;
use App\Models\ParentMessage;
use App\Models\ChatMessage;
use App\Models\Payment;
use App\Models\Classroom;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'students' => Student::count(),
            'teachers' => Teacher::count(),
            'subjects' => Subject::count(),
            'exams' => Exam::count(),
            'payments' => Payment::count(),
            'unpaid' => Payment::where('paid', false)->count(),
            'chats' => ChatMessage::count(),
        ]);
    }

    public function students() { return view('students', ['students' => Student::with('classroom')->get()]); }
    public function storeStudent(Request $r) { Student::create($r->all()); return back(); }

    public function lessons() { return view('lessons', ['lessons' => LessonPlan::latest()->get()]); }
    public function storeLesson(Request $r) { LessonPlan::create($r->all()); return back(); }

    public function exams() { return view('exams', ['exams' => Exam::latest()->get()]); }
    public function storeExam(Request $r) { Exam::create($r->all()); return back(); }

    public function payments() { return view('payments', ['payments' => Payment::with('student')->latest()->get()]); }
    public function storePayment(Request $r) { Payment::create($r->all()); return back(); }

    public function followups() { return view('followups', ['weekly' => WeeklyFollowup::latest()->get(), 'monthly' => MonthlyReport::latest()->get()]); }
    public function storeWeekly(Request $r) { WeeklyFollowup::create($r->all()); return back(); }
    public function storeMonthly(Request $r) { MonthlyReport::create($r->all()); return back(); }

    public function messages() { return view('messages', ['messages' => ParentMessage::with('student')->latest()->get()]); }
    public function storeMessage(Request $r) { ParentMessage::create($r->all()); return back(); }

    public function chat() { return view('chat', ['messages' => ChatMessage::latest()->get()->reverse()]); }
    public function postChat(Request $r) { ChatMessage::create($r->all()); return back(); }
}
