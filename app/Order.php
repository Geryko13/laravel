<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['total', 'user_id'];

    public function user()
    {
      return $this->belongsTo('App\Order');
    }
    public function order_items()
    {
      return $this->hasmany('App\OrderItem');
    }

}
