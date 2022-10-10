<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentUpload extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function attachmentUploadMapping()
  {
    return $this->belongsTo(AttachmentUploadMapping::class);
  }

  public function fileLocation()
  {
    return $this->belongsTo(FileLocation::class);
  }
}