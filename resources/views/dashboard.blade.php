@extends('layout')
@section('content')
<h2 class="text-3xl font-bold mb-6 text-emerald-800">مرحباً بك يا معلمتي 💚</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
  @foreach(['طالبات'=>$students,'مدرسات'=>$teachers,'مواد'=>$subjects,'اختبارات'=>$exams,'معاملات'=>$payments,'غير مدفوع'=>$unpaid,'رسائل غرفة'=>$chats] as $label=>$count)
  <div class="bg-white p-6 rounded-xl shadow text-center">
    <div class="text-4xl font-bold text-emerald-700">{{ $count }}</div>
    <div class="text-gray-600 mt-2">{{ $label }}</div>
  </div>
  @endforeach
</div>
@endsection
