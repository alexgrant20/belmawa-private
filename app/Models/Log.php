<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function registrationNumber()
  {
    return $this->belongsTo(RegistrationNumber::class);
  }
}