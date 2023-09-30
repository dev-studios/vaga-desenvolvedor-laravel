@extends('master')

@section('content')

<h2> {{$cliente->nome}} </h2>

<form action="{{ route('clientes.destroy',['cliente' => $cliente->id]) }}" method="post">
   @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar Cliente</button>

</form>

@endsection