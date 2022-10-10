<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function validationField()
  {
    return $this->hasMany(ValidationField::class);
  }

  public function fieldMapping()
  {
    return $this->hasMany(fieldMapping::class);
  }

  public function fieldComment()
  {
    return $this->hasMany(FieldComment::class);
  }

  public function verificationField()
  {
    return $this->hasMany(VerificationField::class);
  }
}