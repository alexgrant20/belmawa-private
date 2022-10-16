<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predicate extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function conversionResult()
  {
    return $this->hasMany(ConversionResult::class);
  }
}