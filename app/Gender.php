<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'genders';

    protected $fillable = ['name', 'slug', 'description', 'color'];

    public $timestamps = false;

    public function books()
    {
      return $this->hasMany('App\Book');
    }
}
