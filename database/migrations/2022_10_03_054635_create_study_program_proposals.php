<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('study_program_proposals', function (Blueprint $table) {
      $table->id();
      $table->foreignId('country_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('institution_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('speciality_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('degree');
      $table->string('name');
      $table->integer('status');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('study_program_proposals');
  }
};