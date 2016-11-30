@extends('admin.template')

@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        Autores <a href="{{ route('author-create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Autor</a>
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
              <th>Nacionalidad</th>
              <th>Fecha Nacimiento</th>
            </tr>
          </thead>
          <tbody>
            @foreach($authors as $author)
              <tr>
                <td>
                  <a href="{{ route('author-edit', $author) }}" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  {!! Form::open(['route' => ['author-destroy', $author]]) !!}
                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  {!! Form::close() !!}
                </td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->nacionalidad }}</td>
                <td>{{ $author->birthdate}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <?php echo $authors->render(); ?>

    </div>
  </div>

@stop
