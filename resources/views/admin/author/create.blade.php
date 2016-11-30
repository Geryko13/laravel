@extends('admin.template')

@section('content')
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-shopping-cart"></i>
      Autores <small> [Agregar Autor]</small>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="page">
        @if (count($errors) > 0)
          @include('admin.partials.errors')
        @endif

          {!! Form::open(['route'=>'author-store']) !!}
            <div class="form-group">
              <label for="name">Nombre: </label>
              {!!
                Form::text(
                'name',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el nombre...',
                  'autofocus' => 'autofocus'
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="nacionalidad">Nacionalidad: </label>
              {!!
                Form::text(
                  'nacionalidad',
                  null,
                  array(
                    'class' => 'form-control',
                    'placeholder' => 'Ingresa la Nacionalidad...'
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="birthdate">Fecha Nacimiento: </label>
              {!!
                Form::text(
                  'birthdate',
                  null,
                  array(
                    'class' => 'form-control',
                    'placeholder' => '2000-01-01...'
                  )
                )
              !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Guardar', array('class' => 'btn btn-primary')) !!}
              <a href="{{ route('author') }}" class="btn btn-warning"> Cancelar</a>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@stop
