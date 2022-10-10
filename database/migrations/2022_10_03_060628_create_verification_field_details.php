<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('verification_field_details', function (Blueprint $table) {
      $table->id();
      $table->foreignId('verification_field_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->text('comment');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('verification_field_details');
  }
};