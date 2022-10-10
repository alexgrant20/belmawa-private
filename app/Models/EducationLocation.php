<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLocation extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function academicRecord()
  {
    return $this->hasMany(AcademicRecord::class);
  }
}