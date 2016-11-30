<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['title','slug','description','extract', 'price', 'image', 'publicdate', 'author_id', 'editorial_id', 'gender_id'];

    //Relation with Gender
    public function gender()
    {
      return $this->belongsTo('App\Gender');
    }

    //Relation with Editorial
    public function editorial()
    {
      return $this->belongsTo('App\Editorial');
    }

    //Relation with Author
    public function author()
    {
      return $this->belongsTo('App\Author');
    }

    public function order_item()
    {
      return $this->hasOne('App\OrderItem');
    }
}
