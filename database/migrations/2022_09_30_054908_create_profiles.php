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
    Schema::create('profiles', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->unique()->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('name');
      $table->char('gender', 1);
      $table->string('place_of_birth');
      $table->date('date_of_birth');
      $table->string('address');
      $table->foreignId('city_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('phone_number')->unique();
      $table->foreignId('nationality_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('identity_number')->unique();
      $table->string('nidn')->nullable()->unique();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('profiles');
  }
};