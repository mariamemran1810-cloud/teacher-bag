@extends('layout')
@section('content')
<h2 class="text-2xl font-bold mb-4">💰 المحاسبة والرسوم</h2>
<form method="POST" action="/payments" class="bg-white p-4 rounded-xl shadow mb-6 grid grid-cols-2 md:grid-cols-5 gap-2">
@csrf
<input name="student_id" type="number" placeholder="رقم الطالبة" required class="border p-2 rounded">
<input name="amount" type="number" step="0.01" placeholder="المبلغ" required class="border p-2 rounded">
<input name="type" placeholder="النوع" class="border p-2 rounded">
<input name="due_date" type="date" class="border p-2 rounded">
<button class="bg-emerald-700 text-white rounded p-2">إضافة</button>
</form>
<table class="w-full bg-white rounded-xl shadow">
<thead class="bg-emerald-50"><tr><th class="p-3">الطالبة</th><th>المبلغ</th><th>النوع</th><th>تاريخ الاستحقاق</th><th>الحالة</th></tr></thead>
<tbody>
@foreach($payments as $p)
<tr class="border-t"><td class="p-3">{{ optional($p->student)->name }}</td><td>{{ $p->amount }}</td><td>{{ $p->type }}</td><td>{{ $p->due_date }}</td><td>{{ $p->paid ? '✅ مدفوع' : '❌ غير مدفوع' }}</td></tr>
@endforeach
</tbody></table>
@endsection
