
@extends('master')

@section('content')

<h2>Clientes</h2>

<table>

@foreach($clientes as $cliente)
    <tr>
    <td> {{ $cliente->nome }} </td>
    <td><a href="">Compras</a> | </td>
    <td><a href=" {{ route('clientes.edit',['cliente' => $cliente->id]) }} ">editar</a> | <a href="">deletar</a></td>




@endforeach

</table>
@endsection