@extends('layout')
@section('content')
<h2 class="text-2xl font-bold mb-4">🧪 الاختبارات والامتحانات</h2>
<form method="POST" action="/exams" class="bg-white p-4 rounded-xl shadow mb-6 grid grid-cols-2 md:grid-cols-5 gap-2">
@csrf
<input name="title" placeholder="العنوان" required class="border p-2 rounded">
<input name="type" placeholder="النوع (اختبار/امتحان)" class="border p-2 rounded">
<input name="date" type="date" class="border p-2 rounded">
<input name="total_marks" type="number" placeholder="الدرجة" class="border p-2 rounded">
<button class="bg-emerald-700 text-white rounded p-2">إضافة</button>
</form>
@foreach($exams as $e)
<div class="bg-white p-4 rounded-xl shadow mb-3"><b>{{ $e->title }}</b> — {{ $e->type }} — {{ $e->date }} — من {{ $e->total_marks }}</div>
@endforeach
@endsection
