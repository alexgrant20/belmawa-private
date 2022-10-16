<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function validations()
  {
    return $this->belongsTo(User::class);
  }

  public function validationField()
  {
    return $this->hasMany(ValidationField::class);
  }

  public function status()
  {
    return $this->belongsTo(Status::class);
  }
}