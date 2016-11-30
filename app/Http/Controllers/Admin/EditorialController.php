<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Editorial;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editorials = Editorial::orderBy('id','desc')->paginate(10);
        return view('admin.editorial.index', compact('editorials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editorial.create');
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
        'address' => 'required|max:255',
        'telephone' => 'required|max:255',
      ]);

      $editorial = Editorial::create([
        'name' => $request->get('name'),
        'slug' => str_slug($request->get('name')),
        'address' => $request->get('address'),
        'telephone' => $request->get('telephone')
      ]);
      $message = $editorial ? 'Editorial agreagda correctamente' : 'La Editorial no se pudo Agregar';

      return redirect()->route('editorial')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Editorial $editorial)
    {
      return $editorial;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Editorial $editorial)
    {
        return view('admin.editorial.edit', compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editorial $editorial)
    {
      $editorial->fill($request->all());
      $editorial->slug = str_slug($request->get('name'));

      $updated = $editorial->save();

      $message = $updated ? 'Editorial actulizada correctamente' : 'La Editorial no se pudo actualizar';

      return redirect()->route('editorial')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editorial $editorial)
    {
      $deleted = $editorial->delete();

      $message = $deleted ? 'Editorial eliminada correctamente' : 'La Editorial no pudo eliminarse';

      return redirect()->route('editorial')->with('message',$message);
    }
}
