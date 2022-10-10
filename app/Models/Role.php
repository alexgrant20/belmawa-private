<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function rolePermission()
  {
    return $this->hasMany(RolePermissions::class);
  }

  public function userRole()
  {
    return $this->hasMany(UserRole::class);
  }
}