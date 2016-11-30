<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\SaveUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::orderBy('name')->paginate(10);
      return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUserRequest $request)
    {
      $data = [
        'name' => $request->get('name'),
        'last_name' => $request->get('last_name'),
        'email' => $request->get('email'),
        'username' => $request->get('username'),
        'password' => $request->get('password'),
        'type' => $request->get('type'),
        'address' => $request->get('address'),
        'bank_account' => $request->get('bank_account'),
      ];

      $user = User::create($data);

      $message = $user ? 'Usuario agreagdo correctamente' : 'El Usuario no se pudo Agregar';

      return redirect()->route('user')->with('message',$message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $this->validate($request,[
        'name' => 'required|max:100',
        'last_name' => 'required|max:100',
        'email' => 'required',
        'username' => 'required',
        'password' => 'required|confirmed',
        'type' => 'required|in:user,admin',
        'bank_account' => 'required'
      ]);

      $user->name = $request->get('name');
      $user->last_name = $request->get('last_name');
      $user->email= $request->get('email');
      $user->username = $request->get('username');
      $user->password = $request->get('password');
      $user->type = $request->get('type');
      $user->address = $request->get('address');
      $user->bank_account = $request->get('bank_account');

      $updated = $user->save();

      $message = $updated ? 'Usuario actualizado correctamente' : 'El Usuario no se puedo actualizar';

      return redirect()->route('user')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $deleted = $user->delete();

      $message = $deleted ? 'Usuario eliminado correctamente' : 'El Usuario no pudo eliminarse';

      return redirect()->route('user')->with('message',$message);
    }
}
