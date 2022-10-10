<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('institution_study_programs', function (Blueprint $table) {
      $table->id();
      $table->foreignId('institution_countries_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('study_program_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('speciality_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->integer('degree');
      $table->integer('status');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('institution_study_programs');
  }
};