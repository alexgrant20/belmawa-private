<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluatorSpeciality extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function speciality()
  {
    return $this->belongsTo(Speciality::class);
  }
}