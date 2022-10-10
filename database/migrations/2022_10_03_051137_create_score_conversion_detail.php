<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('score_conversion_detail', function (Blueprint $table) {
      $table->id();
      $table->foreignId('score_conversion_id')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->string('course_name');
      $table->integer('credit');
      $table->integer('score');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('score_conversion_detail');
  }
};