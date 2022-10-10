<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function profiles()
  {
    return $this->hasMany(Profile::class);
  }
}