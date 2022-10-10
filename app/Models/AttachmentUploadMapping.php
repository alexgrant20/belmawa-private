<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentUploadMapping extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function attachment()
  {
    return $this->belongsTo(Attachment::class);
  }

  public function attachmentUpload()
  {
    return $this->hasMany(AttachmentUpload::class);
  }
}