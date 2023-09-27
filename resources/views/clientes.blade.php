
@extends('master')

@section('content')
    
    
        
        <table>
            <tr>
                <td><h2>Clientes</h2></td>
                <td colspan="3"><div class="conteiner-botao-cadastro" ><a href="{{route('clientes.create')}}">Cadastrar novo Cliente</a></div></td>
            </tr>

        @foreach($clientes as $cliente)
            <tr>
            <td> {{ $cliente->nome }} </td>
            <td><a href="">Compras</a></td>
            <td><a href=" {{ route('clientes.edit',['cliente' => $cliente->id]) }} ">editar</a></td>
            <td><a href="">deletar</a></td>
        @endforeach         
        </table>
 
@endsection