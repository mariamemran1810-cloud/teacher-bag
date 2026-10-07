<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lesson_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('subject_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('classroom_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->date('date')->nullable();
            $table->text('objectives')->nullable();
            $table->text('activities')->nullable();
            $table->text('homework')->nullable();
            $table->text('ai_notes')->nullable();
            $table->text('cognitive_goal')->nullable();
            $table->text('skill_goal')->nullable();
            $table->text('affective_goal')->nullable();
            $table->text('teaching_aids')->nullable();
            $table->text('introduction')->nullable();
            $table->text('lesson_steps')->nullable();
            $table->text('strategies')->nullable();
            $table->text('applications')->nullable();
            $table->text('assessment')->nullable();
            $table->text('students_needing_support')->nullable();
            $table->text('learning_difficulties')->nullable();
            $table->text('observed_problems')->nullable();
            $table->text('remedial_enrichment')->nullable();
            $table->text('student_progress')->nullable();
            $table->text('grades_record')->nullable();
            $table->text('notes_page')->nullable();
            $table->string('ai_source')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_plans');
    }
};
