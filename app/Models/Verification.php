<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function verificationField()
  {
    return $this->hasMany(verificationField::class);
  }

  public function status()
  {
    return $this->belongsTo(Status::class);
  }
}