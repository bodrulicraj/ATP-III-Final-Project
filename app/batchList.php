<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batchList extends Model
{
  protected $table = 'batchlist';
  protected $primaryKey = 'id';
  public $timestamps = false;
}
