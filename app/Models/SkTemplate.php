<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkTemplate extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function directorate()
  {
    return $this->belongsTo(DirectorateType::class);
  }
}