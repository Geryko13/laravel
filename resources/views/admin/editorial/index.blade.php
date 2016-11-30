@extends('admin.template')

@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        Editoriales <a href="{{ route('editorial-create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> editorial</a>
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
              <th>Dirección</th>
              <th>Telefono</th>
            </tr>
          </thead>
          <tbody>
            @foreach($editorials as $editorial)
              <tr>
                <td>
                  <a href="{{ route('editorial-edit', $editorial) }}" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  {!! Form::open(['route' => ['editorial-destroy', $editorial]]) !!}
                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  {!! Form::close() !!}
                </td>
                <td>{{ $editorial->name }}</td>
                <td>{{ $editorial->address }}</td>
                <td>{{ $editorial->telephone }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <?php echo $editorials->render(); ?>

    </div>
  </div>

@stop
