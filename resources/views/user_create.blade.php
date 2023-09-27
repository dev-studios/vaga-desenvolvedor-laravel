@extends('master')

@section('content')

@if(session()->has('message'))
 {{ session()->get('message')}}
@endif

<h2>Novo Cliente</h2>

<form action="{{ route('clientes.store') }}" method="post">
   @csrf
    <input type="text" name='nome' placeholder='Nome e sobrenome'>
    <input type="text" name='email' placeholder='Email@email.com'>
    <button type="submit">Cadastrar</button>

</form>

@endsection
