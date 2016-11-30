@extends('admin.template')

@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        LIBROS <a href="{{ route('book-create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Libro</a>
      </h1>
    </div>
    <div class="table-cart">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Editar</th>
              <th>Eliminar</th>
              <th>Titulo</th>
              <th>Extracto</th>
              <th>Genero</th>
              <th>Autor</th>
              <th>Editorial</th>
              <th>Precio</th>
              <th>Imagen</th>
            </tr>
          </thead>
          <tbody>
            @foreach($books as $book)
              <tr>
                <td>
                  <a href="{{ route('book-edit', $book->slug) }}" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                  </a>
                </td>
                <td>
                  {!! Form::open(['route' => ['book-destroy',$book->slug]]) !!}
                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  {!! Form::close() !!}
                </td>
                <td>{{ $book->title}}</td>
                <td>{{ $book->extract }}</td>
                <td>{{ $book->gender->name }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->editorial->name }}</td>
                <td>${{ number_format($book->price) }}</td>
                <td><img src="{{ $book->image }}" width="40"></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <hr>
      <?php echo $books->render(); ?>
    </div>
  </div>
@stop
