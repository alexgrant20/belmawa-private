<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('user_score_conversions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('score_conversion_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('study_level_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('sk_number');
      $table->foreignId('institution_study_program_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('degree_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('user_score_conversions');
  }
};