<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>حقيبة المعلمة الرقمية</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>body { font-family: 'Tajawal', sans-serif; }</style>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
  <aside class="w-64 bg-emerald-800 text-white p-5">
    <h1 class="text-2xl font-bold mb-8">🎒 حقيبتي الرقمية</h1>
    <nav class="space-y-2">
      <a href="/" class="block p-2 rounded hover:bg-emerald-700">🏠 الرئيسية</a>
      <a href="/students" class="block p-2 rounded hover:bg-emerald-700">👩‍🎓 الطالبات</a>
      <a href="/lessons" class="block p-2 rounded hover:bg-emerald-700">🧠 كراسة التحضير</a>
      <a href="/exams" class="block p-2 rounded hover:bg-emerald-700">🧪 الاختبارات والامتحانات</a>
      <a href="/payments" class="block p-2 rounded hover:bg-emerald-700">💰 المحاسبة والرسوم</a>
      <a href="/followups" class="block p-2 rounded hover:bg-emerald-700">📅 المتابعة الأسبوعية والشهرية</a>
      <a href="/messages" class="block p-2 rounded hover:bg-emerald-700">📲 متابعة أولياء الأمور</a>
      <a href="/chat" class="block p-2 rounded hover:bg-emerald-700">🔒 غرفة المعلمة والطالبات</a>
    </nav>
    <form method="POST" action="/logout" class="mt-6">@csrf<button class="bg-emerald-900 px-3 py-2 rounded w-full">🚪 خروج</button></form>
  </aside>
  <main class="flex-1 p-8">
    @yield('content')
  </main>
</div>
</body>
</html>
