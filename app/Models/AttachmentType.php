<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentType extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function attachment()
  {
    return $this->hasMany(Attachment::class);
  }
}