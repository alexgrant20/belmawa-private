<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('academic_records', function (Blueprint $table) {
      $table->id();
      $table->foreignId('study_level_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('education_location_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('institution_study_program_id')->nullable()->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('institution')->nullable();
      $table->string('study_program');
      $table->string('student_id');
      $table->year('graduate_year');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('academic_records');
  }
};