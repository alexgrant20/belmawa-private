<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasFactory;

  public $guarded = ['id'];

  protected $hidden = [
    'password',
  ];

  public function profile()
  {
    return $this->hasOne(Profile::class);
  }

  public function forgetPassword()
  {
    return $this->hasOne(ForgetPassword::class);
  }

  public function validation()
  {
    return $this->hasMany(Validation::class);
  }

  public function evaluatorOpinion()
  {
    return $this->hasMany(EvaluatorOpinion::class);
  }

  public function evaluation()
  {
    return $this->hasMany(Evaluation::class);
  }

  public function fieldComment()
  {
    return $this->hasMany(FieldComment::class);
  }

  public function verification()
  {
    return $this->hasMany(Verification::class);
  }

  public function userRole()
  {
    return $this->hasOne(UserRole::class);
  }

  public function evaluatorCountry()
  {
    return $this->hasMany(EvaluatorCountry::class);
  }

  public function evaluatorSpeciality()
  {
    return $this->hasMany(EvaluatorSpeciality::class);
  }

  public function diplomaEqualization()
  {
    return $this->hasMany(DiplomaEqualization::class);
  }

  public function userScoreConversion()
  {
    return $this->hasMany(UserScoreConversion::class);
  }

  public function userLogin()
  {
    return $this->hasMany(UserLogin::class);
  }

  // tidak jelas
  public function serviceLevelAgreements()
  {
    return $this->hasMany(ServiceLevelAgreement::class);
  }
}