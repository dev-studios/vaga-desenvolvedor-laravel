@extends('order.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mostrar Produto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id do Pedido:</strong>
                    {{ $order->id}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Id do Cliente:</strong>
                    {{ $order->customer_id}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Id do Produto:</strong>
                    {{ $order->product_id}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Data de Negociação:</strong>
                    {{ $order->negociation_date}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Preço Unitário:</strong>
                    {{ $order->unity_price}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Quantidade:</strong>
                    {{ $order->quantity}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Valor Total:</strong>
                    {{ $order->total_amount}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Status:</strong>
                    {{ $order->status}}
                </div>
            </div>

@endsection