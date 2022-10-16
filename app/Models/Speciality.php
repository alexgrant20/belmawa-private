<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function evaluatorSpeciality()
  {
    return $this->hasMany(EvaluatorSpeciality::class);
  }

  public function diplomaEqualization()
  {
    return $this->hasMany(DiplomaEqualization::class);
  }

  public function result()
  {
    return $this->hasMany(Result::class);
  }

  public function evaluation()
  {
    return $this->hasMany(Evaluation::class);
  }
}