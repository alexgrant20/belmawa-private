<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function registrationNumber()
  {
    return $this->belongsTo(RegistrationNumber::class);
  }

  public function speciality()
  {
    return $this->belongsTo(Speciality::class);
  }

  public function studyLevel()
  {
    return $this->belongsTo(StudyLevel::class);
  }

  public function diplomaReequalization()
  {
    return $this->hasMany(DiplomaReequalization::class);
  }

  public function conversionResult()
  {
    return $this->hasOne(ConversionResult::class);
  }
}