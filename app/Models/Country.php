<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function institution()
  {
    return $this->hasMany(Institution::class);
  }

  public function evaluatorCountry()
  {
    return $this->hasMany(EvaluatorCountry::class);
  }

  public function institutionProposal()
  {
    return $this->hasMany(InstitutionProposal::class);
  }

  public function studyProgramProposal()
  {
    return $this->hasMany(StudyProgramProposal::class);
  }
}