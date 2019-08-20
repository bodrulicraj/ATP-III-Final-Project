<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherProfile extends Model
{
  protected $table = 'profile';
  protected $primaryKey = 'id';
  public $timestamps = false;
}
