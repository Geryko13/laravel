@extends('admin.template')

@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        GENEROS <a href="{{ route('gender-create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Genero</a>
      </h1>
    </div>
    <div class="table-cart">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Editar</th>
              <th>Eliminar</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Color</th>
            </tr>
          </thead>
          <tbody>
            @foreach($genders as $gender)
              <tr>
                <td>
                  <a href="{{ route('gender-edit', $gender) }}" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  {!! Form::open(['route' => ['gender-destroy',$gender]]) !!}
                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  {!! Form::close() !!}
                </td>
                <td>{{ $gender->name }}</td>
                <td>{{ $gender->description }}</td>
                <td>{{ $gender->color }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@stop
