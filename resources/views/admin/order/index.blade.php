@extends('admin.template')

@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i> PEDIDOS
      </h1>
    </div>
    <div class="table-cart">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Eliminar</th>
              <th>Fecha</th>
              <th>Usuario</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
              <tr>
                <td>
                  {!! Form::open(['route' => ['order-destroy', $order]]) !!}
                    <input type="hidden" name="method" value="DELETE">
                    <button onClick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  {!! Form::close() !!}
                </td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->user_id }}</td>
                <td>${{ number_format($order->total,2) }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <?php echo $orders->render(); ?>

    </div>
  </div>

@stop
