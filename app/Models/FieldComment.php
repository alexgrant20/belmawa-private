<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldComment extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function field()
  {
    return $this->belongsTo(Field::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}