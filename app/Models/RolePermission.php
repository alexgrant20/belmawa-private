<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function permission()
  {
    return $this->belongsTo(Permissions::class);
  }

  public function role()
  {
    return $this->belongsTo(Role::class);
  }
}