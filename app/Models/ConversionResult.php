<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConversionResult extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function registrationNumber()
  {
    return $this->belongsTo(RegistrationNumber::class);
  }

  public function result()
  {
    return $this->belongsTo(Result::class);
  }
}