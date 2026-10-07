<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AIService
{
    public function generateLessonPrep(string $title, string $subject = 'عام'): string
    {
        $key = env('OPENAI_API_KEY');

        if ($key) {
            $response = Http::withToken($key)->timeout(60)->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o-mini',
                'messages' => [
                    ['role' => 'system', 'content' => 'أنت معلم خبير، اكتب كراسة تحضير منسقة بالعربية.'],
                    ['role' => 'user', 'content' => "اكتب كراسة تحضير متكاملة للمادة: $subject، الموضوع: $title، تشمل: الأهداف، الوسائل، المقدمة، العرض، التطبيق، التقويم، الواجب."],
                ],
            ]);

            if ($response->successful()) {
                return $response->json('choices.0.message.content');
            }
        }

        // الرد الاحتياطي عند عدم توفر مفتاح OpenAI
        return "الصف: $subject\nالموضوع: $title\n"
            . "الأهداف: يتعرف الطالب على مفاهيم $title ويطبقها\n"
            . "وسائل التعلم: السبورة، بطاقات تعليمية\n"
            . "المقدمة: سؤال تحفيزي حول $title\n"
            . "العرض: شرح الدرس بخطوات مع أمثلة\n"
            . "التطبيق: أنشطة صفية\n"
            . "التقويم: أسئلة شفهية\n"
            . "الواجب: حل واجب قصير\n";
    }
}
