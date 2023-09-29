@extends('master')

@section('content')
        
    <table>
        <tr>
            <td colspan="4"><h2>Vendas</h2></td>
            <td colspan="2"><div class="conteiner-botao-cadastro" ><a href="{{route('vendas.create')}}">Nova Venda</a></div></td>
        </tr>
        <tr>
            <td>ID</td>
            <td>Total</td>
            <td>Cliente</td>
            <td>Status</td>
            <td colspan="2"></td>
            
        </tr>
        
    @foreach($vendas as $venda)
        @if($venda->status == 0)
            @php
                $status = 'Cancelada';
            @endphp                
        @elseif($venda->status == 1)
            @php
                $status = 'Em Aberto';
            @endphp 
        @elseif($venda->status == 2)
            @php
                $status = 'Concluída';
            @endphp 
        @endif
        <tr>
            <td>{{$venda->id}}</td>
            <td>R$ {{$venda->total}}</td>
            <td>{{$clientes[$venda->cliente_id]->nome}}</td>
            <td>{{$status}}</td>
            <td><a href="{{route('vendas.edit',['venda' => $venda->id]) }}">Editar</a></td>
            <td><a href="">Deletar</a></td>
    @endforeach         
    </table>
 
@endsection