<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileLocation extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function attachmentUpload()
  {
    return $this->hasMany(AttachmentUpload::class);
  }
}