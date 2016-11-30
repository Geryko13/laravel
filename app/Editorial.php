<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
  protected $table = 'editorials';

  protected $fillable = ['name', 'slug', 'address', 'telephone'];

  public $timestamps = false;

  public function books()
  {
    return $this->hasMany('App\Book');
  }
}
