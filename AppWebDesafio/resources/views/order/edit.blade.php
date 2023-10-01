@extends('order.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Pedido</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
            <strong>Whoops!</strong> Houve um problema com o seu Pedido.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('orders.update',$order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id do Cliente:</strong>
                    <input type="bigint" name="customer_id" value="{{ $product->product_name }}" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id:</strong>
                    <input type="bidint" name="product_id" value="{{ $product->product_name }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de negociação:</strong>
                    <input type="date" name="negociation_date" value="{{ $product->product_name }}" class="form-control" placeholder="">
                </div>
            </div>             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço unitário:</strong>
                    <input type="decimal" name="unity_price" value="{{ $product->product_name }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="int" name="quantity" value="{{ $product->product_name }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Valor Total:</strong>
                    <input type="text" name="phone_number" value="{{ $product->product_name }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="char" name="status" value="{{ $product->product_name }}" class="form-control" placeholder="">
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Gravar</button>
            </div>
        </div>
    </form>
@endsection