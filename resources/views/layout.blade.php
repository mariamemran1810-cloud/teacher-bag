<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ط­ظ‚ظٹط¨ط© ط§ظ„ظ…ط¹ظ„ظ…ط© ط§ظ„ط±ظ‚ظ…ظٹط©</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>body { font-family: 'Tajawal', sans-serif; }</style>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
  <aside class="w-64 bg-emerald-800 text-white p-5">
    <h1 class="text-2xl font-bold mb-8">ًںژ’ ط­ظ‚ظٹط¨طھظٹ ط§ظ„ط±ظ‚ظ…ظٹط©</h1>
    <nav class="space-y-2">
      <a href="/" class="block p-2 rounded hover:bg-emerald-700">ًںڈ  ط§ظ„ط±ط¦ظٹط³ظٹط©</a>
      <a href="/students" class="block p-2 rounded hover:bg-emerald-700">ًں‘©â€چًںژ“ ط§ظ„ط·ط§ظ„ط¨ط§طھ</a>
      <a href="/lessons" class="block p-2 rounded hover:bg-emerald-700">ًں§  ظƒط±ط§ط³ط© ط§ظ„طھط­ط¶ظٹط±</a>
      <a href="/exams" class="block p-2 rounded hover:bg-emerald-700">ًں§ھ ط§ظ„ط§ط®طھط¨ط§ط±ط§طھ ظˆط§ظ„ط§ظ…طھط­ط§ظ†ط§طھ</a>
      <a href="/payments" class="block p-2 rounded hover:bg-emerald-700">ًں’° ط§ظ„ظ…ط­ط§ط³ط¨ط© ظˆط§ظ„ط±ط³ظˆظ…</a>
      <a href="/followups" class="block p-2 rounded hover:bg-emerald-700">ًں“… ط§ظ„ظ…طھط§ط¨ط¹ط© ط§ظ„ط£ط³ط¨ظˆط¹ظٹط© ظˆط§ظ„ط´ظ‡ط±ظٹط©</a>
      <a href="/messages" class="block p-2 rounded hover:bg-emerald-700">ًں“² ظ…طھط§ط¨ط¹ط© ط£ظˆظ„ظٹط§ط، ط§ظ„ط£ظ…ظˆط±</a>
      <a href="/teacher-cv" class="block p-2 rounded hover:bg-emerald-700">📄 السيرة الذاتية</a><a href="/chat" class="block p-2 rounded hover:bg-emerald-700">ًں”’ ط؛ط±ظپط© ط§ظ„ظ…ط¹ظ„ظ…ط© ظˆط§ظ„ط·ط§ظ„ط¨ط§طھ</a>
    </nav>
    <form method="POST" action="/logout" class="mt-6">@csrf<button class="bg-emerald-900 px-3 py-2 rounded w-full">ًںڑھ ط®ط±ظˆط¬</button></form>
  </aside>
  <main class="flex-1 p-8">
    @yield('content')
  </main>
</div>
</body>
</html>

