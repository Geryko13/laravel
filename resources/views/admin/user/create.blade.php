@extends('admin.template')

@section('content')
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-shopping-cart"></i>
      USUARIOS <small> [Agregar Usuario]</small>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="page">
        @if (count($errors) > 0)
          @include('admin.partials.errors')
        @endif

          {!! Form::open(['route'=>'user-store']) !!}
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
              <label for="last_name">Apellidos: </label>
              {!!
                Form::text(
                  'last_name',
                  null,
                  array(
                    'class' => 'form-control'
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="email">Email: </label>
              {!!
                Form::text(
                'email',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el Email...',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="username">Username: </label>
              {!!
                Form::text(
                'username',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el Username...',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="password">Password: </label>
              {!!
                Form::password(
                'password',
                array(
                  'class' => 'form-control',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirmar Contrasena: </label>
              {!!
                Form::password(
                'password_confirmation',
                array(
                  'class' => 'form-control',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="type">Tipo: </label>
              {!! Form::radio('type','user',true)!!} User
              {!! Form::radio('type','admin') !!} Admin
            </div>
            <div class="form-group">
              <label for="address">Address: </label>
              {!!
                Form::text(
                'address',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa la Dirección...',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="bank_account">Cuanta Bancaria: </label>
              {!!
                Form::text(
                'bank_account',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa la Cuenta Bancaria...',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Guardar', array('class' => 'btn btn-primary')) !!}
              <a href="{{ route('user') }}" class="btn btn-warning"> Cancelar</a>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@stop
