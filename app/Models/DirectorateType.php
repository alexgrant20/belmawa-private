<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectorateType extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function skTemplate()
  {
    return $this->hasMany(SkTemplate::class);
  }

  public function userScoreConversion()
  {
    return $this->hasMany(UserScoreConversion::class);
  }
}