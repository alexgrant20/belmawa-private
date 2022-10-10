<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('diploma_equalizations', function (Blueprint $table) {
      $table->id();
      $table->foreignId('equlization_purpose_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('institution_study_program_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('study_level_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('degree_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('speciality_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('study_mode_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('tuitution_payment_type_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('learning_program_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->date('academic_certificate_date');
      $table->string('academic_certificate_number');
      $table->date('start_college');
      $table->date('end_college');
      $table->integer('length_of_stay');
      $table->text('thesis_title');
      $table->foreignId('academic_record_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('job_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('score_conversion_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->date('submission_date');
      $table->integer('revision_count');
      $table->integer('parent_proposal_id');
      $table->integer('prev_proposal_id');
      $table->integer('status');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('diploma_equalizations');
  }
};