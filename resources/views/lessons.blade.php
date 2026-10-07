@extends('layout')
@section('content')
<h2 class="text-2xl font-bold mb-4">🧠 كراسة التحضير المتكاملة</h2>
<div class="bg-white p-4 rounded-xl shadow mb-6">
<h3 class="font-bold mb-2">✨ توليد تحضير بالذكاء الاصطناعي</h3>
<div class="flex gap-2">
<input id="aiTitle" placeholder="عنوان الدرس" class="border p-2 rounded flex-1">
<input id="aiSubject" placeholder="المادة" class="border p-2 rounded">
<button onclick="genAI()" class="bg-purple-700 text-white px-4 rounded">توليد</button>
</div>
<pre id="aiOut" class="bg-gray-50 p-3 rounded mt-3 whitespace-pre-wrap text-sm hidden"></pre>
</div>

<form method="POST" action="/lessons" class="bg-white p-4 rounded-xl shadow mb-6 grid grid-cols-1 md:grid-cols-2 gap-2">
@csrf
<input name="title" placeholder="عنوان الدرس" required class="border p-2 rounded">
<input name="date" type="date" class="border p-2 rounded">
<input name="cognitive_goal" placeholder="الهدف المعرفي" class="border p-2 rounded">
<input name="skill_goal" placeholder="الهدف المهاري" class="border p-2 rounded">
<input name="affective_goal" placeholder="الهدف الوجداني" class="border p-2 rounded">
<textarea name="teaching_aids" placeholder="الوسائل التعليمية" class="border p-2 rounded"></textarea>
<textarea name="introduction" placeholder="التمهيد" class="border p-2 rounded"></textarea>
<textarea name="lesson_steps" placeholder="خطوات سير الدرس" class="border p-2 rounded"></textarea>
<textarea name="strategies" placeholder="استراتيجيات التدريس" class="border p-2 rounded"></textarea>
<textarea name="activities" placeholder="الأنشطة والتطبيقات" class="border p-2 rounded"></textarea>
<textarea name="assessment" placeholder="التقويم" class="border p-2 rounded"></textarea>
<textarea name="students_needing_support" placeholder="التلاميذ الذين يحتاجون الدعم" class="border p-2 rounded"></textarea>
<textarea name="learning_difficulties" placeholder="صعوبات التعلم والمشكلات الملحوظة" class="border p-2 rounded"></textarea>
<textarea name="remedial_enrichment" placeholder="الإجراءات العلاجية والاثرائية" class="border p-2 rounded"></textarea>
<textarea name="student_progress" placeholder="متابعة تطور كل تلميذ" class="border p-2 rounded"></textarea>
<textarea name="grades_record" placeholder="سجل الدرجات والتقويم" class="border p-2 rounded"></textarea>
<textarea name="notes_page" placeholder="صفحة الملاحظات" class="border p-2 rounded"></textarea>
<input name="ai_source" placeholder="مصدر الذكاء الاصطناعي" class="border p-2 rounded">
<textarea name="homework" placeholder="الواجب" class="border p-2 rounded"></textarea>
<button class="bg-emerald-700 text-white rounded p-2 md:col-span-2">حفظ التحضير</button>
</form>

@foreach($lessons as $l)
<div class="bg-white p-4 rounded-xl shadow mb-3">
<b>{{ $l->title }}</b> — {{ $l->date }}
<p class="text-sm">🎯 معرفي: {{ $l->cognitive_goal }} | مهاري: {{ $l->skill_goal }} | وجداني: {{ $l->affective_goal }}</p>
<p class="text-sm text-gray-600">{{ $l->ai_notes }}</p>
</div>
@endforeach

<script>
async function genAI(){
  const r = await fetch('/api/ai/lesson-prep',{method:'POST',headers:{'Content-Type':'application/json','Accept':'application/json'},body:JSON.stringify({title:document.getElementById('aiTitle').value,subject:document.getElementById('aiSubject').value})});
  const d = await r.json();
  const o = document.getElementById('aiOut'); o.textContent = d.preparation; o.classList.remove('hidden');
}
</script>
@endsection
