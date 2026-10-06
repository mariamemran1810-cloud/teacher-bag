<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonPlanController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamResultController;
use App\Http\Controllers\WeeklyFollowupController;
use App\Http\Controllers\MonthlyReportController;
use App\Http\Controllers\ParentMessageController;
use App\Http\Controllers\ChatMessageController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\AIController;

Route::post('/ai/lesson-prep', [AIController::class, 'lessonPrep']);
Route::get('/report-card/{studentId}', [AIController::class, 'reportCard']);

Route::apiResource('lesson-plans', LessonPlanController::class);
Route::apiResource('exams', ExamController::class);
Route::apiResource('exam-results', ExamResultController::class);
Route::apiResource('weekly-followups', WeeklyFollowupController::class);
Route::apiResource('monthly-reports', MonthlyReportController::class);
Route::apiResource('parent-messages', ParentMessageController::class);
Route::apiResource('chat-messages', ChatMessageController::class);
Route::apiResource('schools', SchoolController::class);
Route::apiResource('classrooms', ClassroomController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('subjects', SubjectController::class);
Route::apiResource('grades', GradeController::class);
Route::apiResource('attendances', AttendanceController::class);
Route::apiResource('payments', PaymentController::class);
