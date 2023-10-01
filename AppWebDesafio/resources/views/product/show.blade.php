@extends('product.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mostrar Produto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome do Produto:</strong>
                    {{ $product->product_name}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Descrição:</strong>
                    {{ $product->description}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Categoria:</strong>
                    {{ $product->category}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Unidade de Medida:</strong>
                    {{ $product->unity}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Preço:</strong>
                    {{ $product->price}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Peso:</strong>
                    {{ $product->weight}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Altura:</strong>
                    {{ $product->height}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Largura:</strong>
                    {{ $product->width}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Espessura:</strong>
                    {{ $product->thickness}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Cor:</strong>
                    {{ $product->color}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Marca:</strong>
                    {{ $product->brand}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Fabricante:</strong>
                    {{ $product->manufacturer}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Fornecedor:</strong>
                    {{ $product->supplier}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Quantidade em Estoque:</strong>
                    {{ $product->stock_quantity}}
                </div>
            </div>

@endsection