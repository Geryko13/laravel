@extends('admin.template')

@section('content')
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-shopping-cart"></i>
      LIBROS <small> [Agregar Libro]</small>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="page">
        @if (count($errors) > 0)
          @include('admin.partials.errors')
        @endif

          {!! Form::open(['route'=>'book-store']) !!}
            <div class="form-group">
              <label for="title">Titulo: </label>
              {!!
                Form::text(
                'title',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el Titulo...',
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
              <label for="extract">Extracto: </label>
              {!!
                Form::text(
                'extract',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el Extracto...',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="price">Precio:  </label>
              {!!
                Form::text(
                'price',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => 'Ingresa el Precio...',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="image">Imagen: </label>
              {!!
                Form::text(
                'image',
                null,
                array(
                  'class' => 'form-control',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label for="publicdate">Fecha Publicación: </label>
              {!!
                Form::text(
                'publicdate',
                null,
                array(
                  'class' => 'form-control',
                  'placeholder' => '2001-01-01',
                  )
                )
              !!}
            </div>
            <div class="form-group">
              <label class="control-label" for="author_id"> Autor </label>
              {!! Form::select('author_id', $authors, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              <label class="control-label" for="gender_id"> Genero </label>
              {!! Form::select('gender_id', $genders, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              <label class="control-label" for="editorial_id"> Editorial </label>
              {!! Form::select('editorial_id', $editorials, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::submit('Guardar', array('class' => 'btn btn-primary')) !!}
              <a href="{{ route('book') }}" class="btn btn-warning"> Cancelar</a>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@stop
