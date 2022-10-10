<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  // Kurang proposal_objective
  public function up()
  {
    Schema::create('seen_by', function (Blueprint $table) {
      $table->id();
      $table->foreignId('country_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('institution_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('study_program_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('seen_by');
  }
};