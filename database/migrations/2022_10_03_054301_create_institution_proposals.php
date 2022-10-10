<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('institution_proposals', function (Blueprint $table) {
      $table->id();
      $table->foreignId('country_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('education_type_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('speciality_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('name');
      $table->string('address');
      $table->string('city');
      $table->string('postal_code');
      $table->string('website');
      $table->string('email');
      $table->string('program_study_name');
      $table->integer('status');
      $table->integer('revision_count');
      $table->integer('parent_proposal_id');
      $table->integer('prev_proposal_id');
      $table->integer('is_accepted');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('institution_proposals');
  }
};