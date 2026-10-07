@extends('layout')
@section('content')
<h2 class="text-2xl font-bold mb-4">📲 متابعة أولياء الأمور</h2>
<form method="POST" action="/messages" class="bg-white p-4 rounded-xl shadow mb-6">
@csrf
<div class="grid grid-cols-3 gap-2">
<input name="student_id" type="number" placeholder="رقم الطالبة" required class="border p-2 rounded">
<input name="sender" placeholder="المرسل (مثال: الإدارة)" class="border p-2 rounded">
<input name="message" placeholder="نص الرسالة" required class="border p-2 rounded">
</div>
<button class="bg-emerald-700 text-white rounded p-2 mt-2 w-full">إرسال</button>
</form>
@foreach($messages as $m)
<div class="bg-white p-3 rounded mb-2"><b>{{ optional($m->student)->name }}</b> ← {{ $m->sender }}: {{ $m->message }}</div>
@endforeach
@endsection
