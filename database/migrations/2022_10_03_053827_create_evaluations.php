<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('evaluations', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('diploma_equalization_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('specialities_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('study_level_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->integer('parent_evaluation_id');
      $table->integer('prev_evaluation_id');
      $table->date('evaluation_date');
      $table->integer('status');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('evaluations');
  }
};