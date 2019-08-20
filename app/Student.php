<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = 'students';
  protected $primaryKey = 'studentId';
  protected $keyType = 'string';
  public $timestamps = false;
}
