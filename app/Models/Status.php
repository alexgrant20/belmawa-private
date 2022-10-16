<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function validation()
  {
    return $this->hasMany(Validation::class);
  }

  public function verification()
  {
    return $this->hasMany(Verification::class);
  }

  public function scoreConversion()
  {
    return $this->hasMany(ScoreConversion::class);
  }

  public function userScoreConversion()
  {
    return $this->hasMany(UserScoreConversion::class);
  }

  public function diplomaEqulization()
  {
    return $this->hasMany(DiplomaEqualization::class);
  }
}