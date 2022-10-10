<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgramProposal extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function country()
  {
    return $this->belongsTo(Country::class);
  }

  public function institution()
  {
    return $this->belongsTo(Institution::class);
  }

  public function degree()
  {
    return $this->belongsTo(Degree::class);
  }
}