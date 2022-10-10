<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomaReequalization extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function result()
  {
    return $this->belongsTo(Result::class);
  }

  public function reequalizationReason()
  {
    return $this->belongsTo(ReequalizationReason::class);
  }

  public function studyLevel()
  {
    return $this->belongsTo(StudyLevel::class);
  }
}