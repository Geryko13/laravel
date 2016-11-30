@extends('admin.template')

@section('content')
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-shopping-cart"></i>
      GENEROS <small>Editar Genero</small>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="page">
        @if (count($errors) > 0)
          @include('admin.partials.errors')
        @endif
          {!! Form::model($gender, array('route'=> array('gender-update', $gender))) !!}
            <input type="hidden" name="method" value="PUT">
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
              <label for="description">Descripción: </label>
              {!!
                Form::textarea(
                  'description',
                  null,
                  array(
                    'class' => 'form-control'
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="color">Color: </label>
              <input type="color" name="color" class="form-control"
              value="{{ isset($gender->color) ? $gender->color : null }}">
            </div>
            <div class="form-group">
              {!! Form::submit('Actualizar', array('class' => 'btn btn-primary')) !!}
              <a href="{{ route('gender') }}" class="btn btn-warning"> Cancelar</a>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@stop
