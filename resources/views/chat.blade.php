@extends('layout')
@section('content')
<h2 class="text-2xl font-bold mb-4">🔒 غرفة خاصة — المعلمة والطالبات</h2>
<div class="bg-white p-4 rounded-xl shadow mb-4 max-h-96 overflow-y-auto">
@foreach($messages as $m)
<div class="mb-2 {{ $m->sender_role=='معلمة' ? 'text-right' : '' }}">
<span class="inline-block px-3 py-2 rounded-2xl {{ $m->sender_role=='معلمة' ? 'bg-emerald-100' : 'bg-gray-100' }}">
<b>{{ $m->sender_name }}</b> <span class="text-xs text-gray-500">({{ $m->sender_role }})</span><br>{{ $m->message }}
</span></div>
@endforeach
</div>
<form method="POST" action="/chat" class="bg-white p-4 rounded-xl shadow flex gap-2">
@csrf
<input name="sender_name" placeholder="اسمك" required class="border p-2 rounded">
<select name="sender_role" class="border p-2 rounded"><option>معلمة</option><option>طالبة</option><option>ولي أمر</option></select>
<input name="message" placeholder="رسالتك..." required class="border p-2 rounded flex-1">
<button class="bg-emerald-700 text-white rounded px-4">إرسال</button>
</form>
@endsection
