<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Order;
use App\OrderItem;

class CartController extends Controller
{
  public function _construct()
  {
    if(!\Session::has('cart')) \Session::put('cart',array());
  }
    //show
    public function show()
    {
      $cart = \Session::get('cart');
      $total = $this->total();
      return view('store.cart', compact('cart','total'));
    }

    //add
    public function add(Book $book)
    {
      $cart = \Session::get('cart');
      $book->quantify = 1;
      $cart[$book->slug] = $book;
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }

    //delete
    public function delete(Book $book)
    {
      $cart = \Session::get('cart');
      unset($cart[$book->slug]);
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');

    }

    //update
    public function update(Book $book, $quantify)
    {
      $cart = \Session::get('cart');
      $cart[$book->slug]->quantify = $quantify;
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }

    //trash
    public function trash()
    {
      \Session::forget('cart');

      return redirect()->route('cart-show');
    }

    //total
    private function total()
    {
      $cart = \Session::get('cart');
      $total = 0;
      if(empty($cart))
      {
        $total = 0;
      }
      else
      {
        foreach($cart as $item)
        {
          $total += $item->price * $item->quantify;
        }
      }
      return $total;
    }

    //detalle de la orden
    public function orderDetail()
    {
      if(count(\Session::get('cart')) <= 0) return redirect()->route('home');
      $cart = \Session::get('cart');
      $total = $this->total();

      return view('store.order-detail', compact('cart', 'total'));
    }

    public function payment()
    {
      $this->saveOrder(\Session::get('cart'));

      \Session::forget('cart');

      return \Redirect::route('home');
    }

    public function saveOrder($cart)
    {
      $total = 0;
      foreach($cart as $item)
      {
        $total += $item->price * $item->quantify;
      }

      $order = Order::create([
        'total' => $total,
        'user_id' => \Auth::user()->id
      ]);

      foreach($cart as $item)
      {
        $this->saveOrderItem($item, $order->id);
      }

    }

    public function saveOrderItem($item, $order_id)
    {
      OrderItem::create([
        'quantify' => $item->quantify,
        'price' => $item->price,
        'book_id' => $item->id,
        'order_id' => $order_id
      ]);
    }
}
