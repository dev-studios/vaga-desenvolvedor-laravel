@extends('order.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Novo Pedido</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
            <strong>Whoops!</strong> Houve um problema com a criação do Pedido.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Produto:</strong>
        <select name="product_id" class="form-control">
            <option value="" disabled selected>Selecione um produto</option>
            @foreach($product as $product)
                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Cliente:</strong>
        <select name="customer_id" class="form-control">
            <option value="" disabled selected>Selecione um Cliente</option>
            @foreach($customer as $customer)
                <option value="{{ $customer->id }}">{{ $customer->first_name }}</option>
            @endforeach
        </select>
    </div>
</div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de negociação:</strong>
                    <input type="date" name="negotiation_date" class="form-control" placeholder="">
                </div>
            </div>             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço unitário:</strong>
                    <input type="decimal" name="unity_price" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="int" name="quantity" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Valor Total:</strong>
                    <input type="text" name="total_amount" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="char" name="status" class="form-control" placeholder="">
                </div>
            </div>
                         
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Submit</button>
            </div>           
        </div>
    </form>   
@endsection