<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('attachment_upload_mappings', function (Blueprint $table) {
      $table->id();
      $table->foreignId('attachment_upload_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('attachment_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('ref_table');
      $table->integer('ref_id');
      $table->text('notes');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('attachment_upload_mappings');
  }
};