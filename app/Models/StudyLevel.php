<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyLevel extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function evaluation()
  {
    return $this->hasMany(Evaluation::class);
  }

  public function academicRecord()
  {
    return $this->hasMany(AcademicRecord::class);
  }

  public function userScoreConversion()
  {
    return $this->hasMany(UserScoreConversion::class);
  }

  public function diplomaEqualization()
  {
    return $this->hasMany(DiplomaEqualization::class);
  }

  public function result()
  {
    return $this->hasMany(Result::class);
  }

  public function diplomaReequalization()
  {
    return $this->hasMany(DiplomaReequalization::class);
  }
}