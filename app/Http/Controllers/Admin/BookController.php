<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Gender;
use App\Author;
use App\Editorial;
use App\Http\Requests\SaveBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('id','desc')->paginate(10);
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Gender::orderBy('id','desc')->pluck('name','id');
        $editorials = Editorial::orderBy('id','desc')->pluck('name','id');
        $authors = Author::orderBy('id','desc')->pluck('name','id');

        return view('admin.book.create',compact('genders', 'editorials', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveBookRequest $request)
    {
      $data = [
        'title'       => $request->get('title'),
        'slug'        => str_slug($request->get('title')),
        'description' => $request->get('description'),
        'extract'     => $request->get('extract'),
        'price'       => $request->get('price'),
        'image'       => $request->get('image'),
        'publicdate'  => $request->get('publicdate'),
        'author_id'   => $request->get('author_id'),
        'editorial_id'=> $request->get('editorial_id'),
        'gender_id'   => $request->get('gender_id')
      ];
      $book = Book::create($data);
      $message = $book ? 'Libro agreagdo correctamente' : 'El libro no se pudo Agregar';

      return redirect()->route('book')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
      $genders = Gender::orderBy('id','desc')->pluck('name','id');
      $editorials = Editorial::orderBy('id','desc')->pluck('name','id');
      $authors = Author::orderBy('id','desc')->pluck('name','id');

      return view('admin.book.edit',compact('genders', 'editorials', 'authors', 'book'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveBookRequest $request, Book $book)
    {
        $book->fill($request->all());
        $book->slug = str_slug($request->get('title'));

        $updated = $book->save();

        $message = $updated ? 'Libro actualizado correctamente' : 'El Libro no se puedo actualizar';

        return redirect()->route('book')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
      $deleted = $book->delete();

      $message = $deleted ? 'Libro eliminado correctamente' : 'El Libro no pudo eliminarse';

      return redirect()->route('book')->with('message',$message);
    }
}
