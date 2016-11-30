<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = ['price', 'quantify', 'book_id', 'order_id'];

    public $timestamps = false;

    public function order()
    {
      return $this->belongsTo('App\Order');
    }

    public function book()
    {
      return $this->belongsTo('App\Book');
    }

}
