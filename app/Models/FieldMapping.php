<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldMapping extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function field()
  {
    return $this->belongsTo(Field::class);
  }
}