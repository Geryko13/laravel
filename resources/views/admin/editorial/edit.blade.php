@extends('admin.template')

@section('content')
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-shopping-cart"></i>
      EDITORIALES <small> [Editar Editorial]</small>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="page">
        @if (count($errors) > 0)
          @include('admin.partials.errors')
        @endif
          {!! Form::model($editorial, array('route'=> array('editorial-update', $editorial))) !!}
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
              <label for="address">Dirección: </label>
              {!!
                Form::text(
                  'address',
                  null,
                  array(
                    'class' => 'form-control',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="telephone">Telefono: </label>
              {!!
                Form::text(
                  'telephone',
                  null,
                  array(
                    'class' => 'form-control',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Actualizar', array('class' => 'btn btn-primary')) !!}
              <a href="{{ route('editorial') }}" class="btn btn-warning"> Cancelar</a>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@stop
