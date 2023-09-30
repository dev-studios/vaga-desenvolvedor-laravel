@extends('product.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Produto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
            <strong>Whoops!</strong> Houve um problema com o seu objeto.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <input type="text" name="description" value="{{ $product->description }}" class="form-control" placeholder="">
                </div>
            </div>                    
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categoria:</strong>
                    <input type="text" name="category" value="{{ $product->category }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Unidade de Medida:</strong>
                    <input type="text" name="unity" value="{{ $product->unity }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="decimal" name="price" value="{{ $product->price }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Peso:</strong>
                    <input type="decimal" name="weight" value="{{ $product->weight }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Altura:</strong>
                    <input type="decimal" name="height" value="{{ $product->height }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Largura:</strong>
                    <input type="decimal" name="width" value="{{ $product->width }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Espessura:</strong>
                    <input type="decimal" name="thickness" value="{{ $product->thickness }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cor:</strong>
                    <input type="text" name="color" value="{{ $product->color }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input type="text" name="brand" value="{{ $product->brand }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fabricante:</strong>
                    <input type="text" name="manufacturer" value="{{ $product->manufacturer }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fornecedor:</strong>
                    <input type="text" name="supplier" value="{{ $product->supplier }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade em Estoque:</strong>
                    <input type="int" name="stock_quantity" value="{{ $product->stock_quantity }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Gravar</button>
            </div>
        </div>
    </form>
@endsection