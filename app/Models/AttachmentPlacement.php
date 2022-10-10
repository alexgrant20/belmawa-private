<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentPlacement extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function attachment()
  {
    return $this->belongsTo(Attachment::class);
  }
}