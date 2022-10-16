<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function attachmentType()
  {
    return $this->belongsTo(AttachmentType::class);
  }

  public function attachmentPlacement()
  {
    return $this->hasMany(AttachmentPlacement::class);
  }

  public function attachmentUploadMapping()
  {
    return $this->hasMany(AttachmentUploadMapping::class);
  }

  public function specialRequirements()
  {
    return $this->hasMany(SpecialRequirements::class);
  }
}