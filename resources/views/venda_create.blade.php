@extends('master')

@section('content')

@if(session()->has('message'))
 {{ session()->get('message')}}
@endif

<h2>Nova Venda</h2>

<form action="{{ route('vendas.store') }}" method="post">
   @csrf
    <select name="cliente_id">
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nome}}</option>
        @endforeach   
    </select>
    <button type="submit">Cadastrar</button>

</form>

@endsection
