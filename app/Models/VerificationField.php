<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationField extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function verification()
  {
    return $this->belongsTo(Verification::class);
  }

  public function field()
  {
    return $this->belongsTo(Field::class);
  }
}