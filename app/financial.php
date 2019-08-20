<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class financial extends Model
{
  protected $table = 'financials';
  protected $primaryKey = 'id';
  public $timestamps = false;
}
