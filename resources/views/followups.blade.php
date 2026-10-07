@extends('layout')
@section('content')
<h2 class="text-2xl font-bold mb-4">📅 المتابعة الأسبوعية والشهرية</h2>
<div class="grid md:grid-cols-2 gap-4 mb-6">
<form method="POST" action="/followups/weekly" class="bg-white p-4 rounded-xl shadow">
@csrf
<h3 class="font-bold mb-2">أسبوعية</h3>
<input name="week" placeholder="الأسبوع مثلاً الأسبوع الأول" class="border p-2 rounded w-full mb-2">
<textarea name="summary" placeholder="الملخص" class="border p-2 rounded w-full mb-2"></textarea>
<textarea name="issues" placeholder="الملاحظات" class="border p-2 rounded w-full mb-2"></textarea>
<textarea name="plan_next" placeholder="خطة الأسبوع القادم" class="border p-2 rounded w-full mb-2"></textarea>
<button class="bg-emerald-700 text-white rounded p-2 w-full">حفظ</button>
</form>
<form method="POST" action="/followups/monthly" class="bg-white p-4 rounded-xl shadow">
@csrf
<h3 class="font-bold mb-2">شهرية</h3>
<input name="month" placeholder="الشهر" class="border p-2 rounded w-full mb-2">
<textarea name="summary" placeholder="الملخص" class="border p-2 rounded w-full mb-2"></textarea>
<input name="attendance_rate" type="number" step="0.01" placeholder="نسبة الحضور %" class="border p-2 rounded w-full mb-2">
<input name="average_score" type="number" step="0.01" placeholder="متوسط الدرجات" class="border p-2 rounded w-full mb-2">
<button class="bg-emerald-700 text-white rounded p-2 w-full">حفظ</button>
</form>
</div>
<h3 class="font-bold">آخر المتابعات الأسبوعية</h3>
@foreach($weekly as $w)<div class="bg-white p-3 rounded mb-2">{{ $w->week }}: {{ $w->summary }}</div>@endforeach
<h3 class="font-bold mt-4">آخر التقارير الشهرية</h3>
@foreach($monthly as $m)<div class="bg-white p-3 rounded mb-2">{{ $m->month }}: {{ $m->summary }} (حضور {{ $m->attendance_rate }}%)</div>@endforeach
@endsection
