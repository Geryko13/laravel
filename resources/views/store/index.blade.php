@extends('store.template')

@section('content')

@include('store.partials.slider')

<div class='container text-center'>
  <div id='books'>
    @foreach($books as $book)
      <div class='book white-panel'>
        <h3>{{ $book->title }}</h3><hr>
        <img src="{{ $book->image }}" width="200">
        <div class='book-info panel'>
          <p>{{ $book->extract }}</p>
          <h3><span class="label label-success">Precio: ${{ number_format($book->price,2) }}</span></h3>
          <p>
            <a class="btn btn-warnign" href="{{ route('cart-add', $book->slug) }}">
              <i class="fa fa-cart-plus"></i> Lo quiero</a>
            <a class="btn btn-primary" href="{{ route('book-detail', $book->slug) }}">
              <i class="fa fa-chevron-circle-right"></i> Leer mas</a>
          </p>
        </div>
      </div>
    @endforeach
  </div>
</div>


@stop
