<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReequalizationReason extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function diplomaReequalization()
  {
    return $this->hasMany(DiplomaReequalization::class);
  }
}