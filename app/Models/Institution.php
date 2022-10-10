<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function country()
  {
    return $this->belongsTo(Country::class);
  }

  public function institutionType()
  {
    return $this->belongsTo(InstitutionType::class);
  }

  public function studyProgramProposal()
  {
    return $this->hasMany(StudyProgramProposal::class);
  }

  public function institutionStudyProgram()
  {
    return $this->hasMany(InstitutionStudyProgram::class);
  }
}