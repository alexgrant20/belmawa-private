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
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('email')->unique();
      $table->string('password');
      $table->integer('attempt_login')->nullable();
      $table->dateTime('attempt_login_active');
      $table->dateTime('last_login')->nullable();
      $table->timestamp('email_confirm_at')->nullable();
      $table->integer('is_active');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
      $table->foreignId('updated_by')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
};