<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EqualizationPurpose extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function diplomaEqualization()
  {
    return $this->hasMany(DiplomaEqualization::class);
  }
}