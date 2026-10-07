@extends('layout')
@section('content')
<h2 class="text-2xl font-bold mb-4">🧠 كراسة التحضير</h2>
<div class="bg-white p-4 rounded-xl shadow mb-6">
<h3 class="font-bold mb-2">✨ توليد تحضير بالذكاء الاصطناعي</h3>
<div class="flex gap-2">
<input id="aiTitle" placeholder="عنوان الدرس" class="border p-2 rounded flex-1">
<input id="aiSubject" placeholder="المادة" class="border p-2 rounded">
<button onclick="genAI()" class="bg-purple-700 text-white px-4 rounded">توليد</button>
</div>
<pre id="aiOut" class="bg-gray-50 p-3 rounded mt-3 whitespace-pre-wrap text-sm hidden"></pre>
</div>
<form method="POST" action="/lessons" class="bg-white p-4 rounded-xl shadow mb-6 grid grid-cols-1 md:grid-cols-3 gap-2">
@csrf
<input name="title" placeholder="عنوان الدرس" required class="border p-2 rounded">
<input name="date" type="date" class="border p-2 rounded">
<input name="objectives" placeholder="الأهداف" class="border p-2 rounded">
<textarea name="activities" placeholder="الأنشطة" class="border p-2 rounded"></textarea>
<textarea name="homework" placeholder="الواجب" class="border p-2 rounded"></textarea>
<textarea name="ai_notes" placeholder="ملاحظات AI" class="border p-2 rounded"></textarea>
<button class="bg-emerald-700 text-white rounded p-2 md:col-span-3">حفظ التحضير</button>
</form>
@foreach($lessons as $l)
<div class="bg-white p-4 rounded-xl shadow mb-3">
<b>{{ $l->title }}</b> — {{ $l->date }}
<p class="text-sm text-gray-600">{{ $l->objectives }}</p>
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
