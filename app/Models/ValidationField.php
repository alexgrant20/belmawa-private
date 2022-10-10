<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidationField extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function validation()
  {
    return $this->belongsTo(Validation::class);
  }

  public function field()
  {
    return $this->belongsTo(Field::class);
  }
}