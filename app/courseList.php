<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courseList extends Model
{
  protected $table = 'courseList';
  protected $primaryKey = 'sid';
  protected $keyType = 'string';
  public $timestamps = false;
}
