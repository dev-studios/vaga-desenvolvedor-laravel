@extends('master')

@section('content')

@if(session()->has('message'))
 {{ session()->get('message')}}
@endif

<h2>editar</h2>

<form action="{{ route('clientes.update',['cliente' => $cliente->id]) }}" method="post">
   @csrf
   <input type="hidden" name="_method" value="PUT">
    <input type="text" name='nome' value='{{ $cliente->nome }}'>
    <input type="text" name='email' value='{{ $cliente->email }}'>
    <button type="submit">Atualizar</button>

</form>

@endsection
