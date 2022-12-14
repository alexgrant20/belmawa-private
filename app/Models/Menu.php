<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function menuPermission()
  {
    return $this->hasMany(MenuPermissions::class);
  }
}