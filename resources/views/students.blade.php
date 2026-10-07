@extends('layout')
@section('content')
<h2 class="text-2xl font-bold mb-4">👩‍🎓 الطالبات</h2>
<form method="POST" action="/students" class="bg-white p-4 rounded-xl shadow mb-6 grid grid-cols-2 md:grid-cols-4 gap-2">
@csrf
<input name="name" placeholder="الاسم" required class="border p-2 rounded">
<input name="national_id" placeholder="رقم وطني" class="border p-2 rounded">
<input name="guardian_name" placeholder="اسم ولي الأمر" class="border p-2 rounded">
<button class="bg-emerald-700 text-white rounded p-2">إضافة</button>
</form>
<table class="w-full bg-white rounded-xl shadow">
<thead class="bg-emerald-50"><tr><th class="p-3">الاسم</th><th>الفصل</th><th>ولي الأمر</th><th>الحالة</th></tr></thead>
<tbody>
@foreach($students as $s)
<tr class="border-t"><td class="p-3">{{ $s->name }}</td><td>{{ optional($s->classroom)->name }}</td><td>{{ $s->guardian_name }}</td><td>{{ $s->status }}</td></tr>
@endforeach
</tbody></table>
@endsection
