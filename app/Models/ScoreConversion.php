<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreConversion extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function userScoreConversion()
  {
    return $this->hasOne(UserScoreConversion::class);
  }

  public function scoreConversionDetail()
  {
    return $this->hasMany(ScoreConversionDetail::class);
  }

  public function diplomaEqualization()
  {
    return $this->hasOne(DiplomaEqualization::class);
  }
}