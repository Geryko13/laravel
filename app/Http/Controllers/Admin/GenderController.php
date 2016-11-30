<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gender;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genders = Gender::all();
        return view('admin.gender.index', compact('genders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
          'name' => 'required|unique:genders|max:255',
          'color' => 'required',
        ]);

        $gender = Gender::create([
          'name' => $request->get('name'),
          'slug' => str_slug($request->get('name')),
          'description' => $request->get('description'),
          'color' => $request->get('color')
        ]);
        $message = $gender ? 'Genero agreagdo correctamente' : 'El Genero no se pudo Agregar';

        return redirect()->route('gender')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gender $gender)
    {
        return $gender;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gender $gender)
    {
        return view('admin.gender.edit', compact('gender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gender $gender)
    {
      $gender->fill($request->all());
      $gender->slug = str_slug($request->get('name'));

      $updated = $gender->save();

      $message = $updated ? 'Genero actulizado correctamente' : 'El Genero no se pudo actualizar';

      return redirect()->route('gender')->with('message', $message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gender $gender)
    {
        $deleted = $gender->delete();

        $message = $deleted ? 'Genero eliminado correctamente' : 'El Genero no pudo eliminarse';

        return redirect()->route('gender')->with('message',$message);
    }
}
