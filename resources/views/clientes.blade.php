
@extends('master')

@section('content')
    
    
        
        <table>
            <tr><td colspan=4><h2>Clientes</h2></td></tr>
        @foreach($clientes as $cliente)
            <tr>
            <td> {{ $cliente->nome }} </td>
            <td><a href="">Compras</a></td>
            <td><a href=" {{ route('clientes.edit',['cliente' => $cliente->id]) }} ">editar</a></td>
            <td><a href="">deletar</a></td>
        @endforeach         
        </table>
 
@endsection