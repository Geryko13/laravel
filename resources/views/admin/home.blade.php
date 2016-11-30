@extends('admin.template')

@section('content')

  <div class="container text-center">
    <div class="page-header">
      <h1><i class="fa fa-rocket"></i> MARIMO BOOKS STORE - DASHBOARD</h1>
    </div>

    <h2>Bienvenido(a) {{ Auth::user()->username }} al Panel de Administración de tu tienda en línea.</h2><hr>

    <div class="row">
      <div class="col-md-6">
        <div class="panel">
          <i class="fa fa-list-alt icon-home"></i>
          <a href="{{ route('gender') }}" class="btn btn-warning btn-block btn-home-admin">GENEROS</a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel">
          <i class="fa fa-list-alt icon-home"></i>
          <a href="{{ route('book') }}" class="btn btn-warning btn-block btn-home-admin">LIBROS</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="panel">
          <i class="fa fa-list-alt icon-home"></i>
          <a href="{{ route('author') }}" class="btn btn-warning btn-block btn-home-admin">AUTORES</a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel">
          <i class="fa fa-list-alt icon-home"></i>
          <a href="{{ route('editorial') }}" class="btn btn-warning btn-block btn-home-admin">EDITORIALES</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="panel">
          <i class="fa fa-list-alt icon-home"></i>
          <a href="{{ route('order') }}" class="btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel">
          <i class="fa fa-list-alt icon-home"></i>
          <a href="{{ route('user') }}" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
        </div>
      </div>
    </div>
  </div>


@stop
