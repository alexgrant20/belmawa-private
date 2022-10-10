<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('results', function (Blueprint $table) {
      $table->id();
      $table->foreignId('registration_number_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('speciality_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('study_level_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('sk_number');
      $table->date('sk_date');
      $table->double('conversion_result')->nullable();
      $table->tinyInteger('status')->default(1)->nullable();
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('results');
  }
};