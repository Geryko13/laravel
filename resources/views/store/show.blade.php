@extends('store.template')

@section('content')
<div class='container text-center'>

  <div class="page-header">
    <h1><i class="fa fa-shopping-cart"></i> Detalle del Producto</h1>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class='book-block'>
          <img src="{{ $book->image }}">
      </div>
    </div>

    <div class="col-md-6">
      <div class='book-block'>
        <h3>{{ $book->title }}</h3><hr>
        <div class='book-info panel'>
          <p>{{ $book->description }}</p>
          <h3><span class="label label-success">Precio: ${{ number_format($book->price,2) }}</span></h3>
          <p>
            <a class="btn btn-warning btn-block" href="{{ route('cart-add', $book->slug) }}">
              <i class="fa fa-cart-plus fa-2x"></i> Lo quiero</a>
          </p>
        </div>
      </div>
    </div>
  </div><hr>

  <p><a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-chevron-circle-left"></i> Regresar</a></p>

</div>



@stop
