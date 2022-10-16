<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPermissions extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function menu()
  {
    return $this->belongsTo(Menu::class);
  }

  public function permission()
  {
    return $this->belongsTo(Permission::class);
  }
}