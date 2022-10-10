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
    Schema::create('institution_countries', function (Blueprint $table) {
      $table->id();
      $table->foreignId('country_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('institution_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('address');
      $table->string('city');
      $table->string('postal_code');
      $table->string('email');
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
    Schema::dropIfExists('country_institutions');
  }
};