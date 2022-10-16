<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScoreConversion extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function scoreConversion()
  {
    return $this->belongsTo(ScoreConversion::class);
  }

  public function studylevel()
  {
    return $this->belongsTo(StudyLevel::class);
  }

  public function institutionStudyProgram()
  {
    return $this->belongsTo(InstitutionStudyProgram::class);
  }

  public function degree()
  {
    return $this->belongsTo(Degree::class);
  }

  public function directorateType()
  {
    return $this->belongsTo(DirectorateType::class);
  }

  public function status()
  {
    return $this->belongsTo(Status::class);
  }
}