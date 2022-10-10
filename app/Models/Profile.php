<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function city()
  {
    return $this->belongsTo(City::class);
  }

  public function nationality()
  {
    return $this->belongsTo(Nationality::class);
  }
}