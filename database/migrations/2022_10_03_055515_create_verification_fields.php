<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('verification_fields', function (Blueprint $table) {
      $table->id();
      $table->foreignId('verification_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('field_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->integer('is_verified');
      $table->integer('status_verified');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('verification_fields');
  }
};