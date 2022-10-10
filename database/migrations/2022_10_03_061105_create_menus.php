<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('menus', function (Blueprint $table) {
      $table->id();
      $table->foreignId('menu_group_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
      $table->string('name');
      $table->string('link');
      $table->integer('order');
      $table->integer('status');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
      $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
    });
  }

  public function down()
  {
    Schema::dropIfExists('menus');
  }
};