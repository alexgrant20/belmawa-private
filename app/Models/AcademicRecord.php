<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicRecord extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function educationLocation()
  {
    return $this->belongsTo(EducationLocation::class);
  }

  public function diplomaEqualization()
  {
    return $this->hasMany(DiplomaEqualization::class);
  }

  public function studyLevel()
  {
    return $this->belongsTo(StudyLevel::class);
  }

  public function institutionStudyProgram()
  {
    return $this->belongsTo(InstitutionStudyProgram::class);
  }
}