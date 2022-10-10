<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('logs', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->text('description');
      $table->text('note');
      $table->string('ref_table');
      $table->integer('ref_id');
      $table->text('template');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('logs');
  }
};