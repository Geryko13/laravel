@extends('admin.template')

@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        USUARIOS <a href="{{ route('user-create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Usuario</a>
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
              <th>Apellidos</th>
              <th>Email</th>
              <th>Username</th>
              <th>Tipo</th>
              <th>Dirección</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td>
                  <a href="{{ route('user-edit', $user) }}" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  {!! Form::open(['route' => ['user-destroy', $user]]) !!}
                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  {!! Form::close() !!}
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->type }}</td>
                <td>{{ $user->address }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <?php echo $users->render(); ?>

    </div>
  </div>

@stop
