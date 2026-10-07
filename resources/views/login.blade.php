<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>تسجيل الدخول</title>
<script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-emerald-50 flex items-center justify-center min-h-screen">
<form method="POST" action="/login" class="bg-white p-8 rounded-xl shadow w-full max-w-sm">
@csrf
<h1 class="text-2xl font-bold text-emerald-800 mb-6 text-center">🎒 حقيبة المعلمة الرقمية</h1>
<input name="email" type="email" placeholder="البريد الإلكتروني" required class="border p-3 rounded w-full mb-3">
<input name="password" type="password" placeholder="كلمة المرور" required class="border p-3 rounded w-full mb-4">
@if($errors->any())<p class="text-red-500 text-sm mb-3">{{ $errors->first() }}</p>@endif
<button class="bg-emerald-700 text-white rounded p-3 w-full">دخول</button>
</form>
</body></html>
