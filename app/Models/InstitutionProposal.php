<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionProposal extends Model
{
  use HasFactory;

  public $guarded = ['id'];

  public function country()
  {
    return $this->belongsTo(Country::class);
  }

  public function institutionType()
  {
    return $this->belongsTo(InstitutionType::class);
  }
}