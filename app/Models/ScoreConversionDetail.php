<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreConversionDetail extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function scoreConversion()
  {
    return $this->belongsTo(ScoreConversion::class);
  }
}