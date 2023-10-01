@extends('order.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pedidos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Novo Pedido</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id do Pedido</th>
            <th>Id do Cliente</th>
            <th width="300px">Ação</th>
        </tr>
        @foreach ($order as $order)

        <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->customer_id}}
            <td>
                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Mostrar</a>

                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Editar</a>

                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach       
    </table>         
  @endsection