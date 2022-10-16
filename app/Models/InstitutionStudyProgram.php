<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionStudyProgram extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function institution()
  {
    return $this->belongsTo(Institution::class);
  }

  public function studyProgram()
  {
    return $this->belongsTo(StudyProgram::class);
  }

  public function degree()
  {
    return $this->belongsTo(Degree::class);
  }

  public function academicRecord()
  {
    return $this->hasMany(AcademicRecord::class);
  }

  public function diplomaEqualization()
  {
    return $this->hasMany(DiplomaEqualization::class);
  }

  public function userScoreConversion()
  {
    return $this->hasMany(UserScoreConversion::class);
  }

  public function predicate()
  {
    return $this->hasMany(Predicate::class);
  }
}