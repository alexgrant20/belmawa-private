<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomaEqualization extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function equlizationPurpose()
  {
    return $this->belongsTo(EqualizationPurpose::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function institutionStudyProgram()
  {
    return $this->belongsTo(InstitutionStudyProgram::class);
  }

  public function studyLevel()
  {
    return $this->belongsTo(StudyLevel::class);
  }

  public function degree()
  {
    return $this->belongsTo(Degree::class);
  }

  public function speciality()
  {
    return $this->belongsTo(Speciality::class);
  }

  public function studyMode()
  {
    return $this->belongsTo(StudyMode::class);
  }

  public function tuitionType()
  {
    return $this->belongsTo(TuitionType::class);
  }

  public function learningProgram()
  {
    return $this->belongsTo(LearningProgram::class);
  }

  public function academicRecord()
  {
    return $this->belongsTo(AcademicRecord::class);
  }

  public function job()
  {
    return $this->belongsTo(Job::class);
  }

  public function scoreConversion()
  {
    return $this->belongsTo(scoreConversion::class);
  }

  public function evaluatorOpinion()
  {
    return $this->hasMany(EvaluatorOpinion::class);
  }

  public function evaluation()
  {
    return $this->hasMany(Evaluation::class);
  }
}