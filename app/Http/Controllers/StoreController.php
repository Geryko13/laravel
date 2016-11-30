<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;

class StoreController extends Controller
{
    public function index()
    {
      $books = Book::all();
      //dd($books);
      return view('store.index', compact('books'));
    }

    public function show($slug)
    {
      $book = Book::where('slug', $slug)->first();
      return view('store.show', compact('book'));
      //return "it works";
    }

    public function adminindex()
    {
      return view('admin.home');
    }
}
