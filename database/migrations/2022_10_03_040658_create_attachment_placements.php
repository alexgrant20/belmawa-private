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
    Schema::create('attachment_placements', function (Blueprint $table) {
      $table->id();
      $table->foreignId('attachment_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('slug');
      $table->tinyInteger('is_required')->default(0)->nullable();
      $table->tinyInteger('is_active');
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
    Schema::dropIfExists('attachment_placements');
  }
};