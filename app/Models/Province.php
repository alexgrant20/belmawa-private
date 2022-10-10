<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function city()
  {
    return $this->hasMany(City::class);
  }
}