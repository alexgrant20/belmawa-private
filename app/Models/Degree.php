<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function diplomaEqualization()
  {
    return $this->hasMany(DiplomaEqualization::class);
  }

  public function institutionStudyProgram()
  {
    return $this->hasMany(InstitutionStudyProgram::class);
  }

  public function studyProgramProposal()
  {
    return $this->hasMany(StudyProgramProposal::class);
  }

  public function userScoreConversion()
  {
    return $this->hasMany(UserScoreConversion::class);
  }
}