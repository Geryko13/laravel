<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $authors = Author::orderBy('id','desc')->paginate(10);
      return view('admin.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|unique:genders|max:255',
        'nacionalidad' => 'required|max:255',
        'birthdate' => 'required',
      ]);

      $author = Author::create([
        'name' => $request->get('name'),
        'slug' => str_slug($request->get('name')),
        'nacionalidad' => $request->get('nacionalidad'),
        'birthdate' => $request->get('birthdate')
      ]);
      $message = $author ? 'Autor agreagdo correctamente' : 'El Autor no se pudo Agregar';

      return redirect()->route('author')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return $author;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('admin.author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
      $author->fill($request->all());
      $author->slug = str_slug($request->get('name'));

      $updated = $author->save();

      $message = $updated ? 'Autor actulizado correctamente' : 'El Autor no se pudo actualizar';

      return redirect()->route('author')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
      $deleted = $author->delete();

      $message = $deleted ? 'Autor eliminado correctamente' : 'El Autor no pudo eliminarse';

      return redirect()->route('author')->with('message',$message);
    }
}
