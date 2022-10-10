<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationNumber extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function logs()
  {
    return $this->hasMany(Log::class);
  }

  public function result()
  {
    return $this->hasOne(Result::class);
  }

  // SK sudah beres tapi bisa saja konversi keluar nantinya
  public function conversionResult()
  {
    return $this->hasOne(ConversionResult::class);
  }
}