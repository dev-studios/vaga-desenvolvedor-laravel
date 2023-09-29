@extends('master')

@section('content')

@if(session()->has('message'))
 {{ session()->get('message')}}
@endif

<table>
    <tr>
        <td colspan="3"><h2>Venda</h2></td>
        <td><h2>Nº {{$venda->id}}</h2></td>
    </tr>
    <tr>
        <td colspan="3"><h3>{{$cliente->nome}}</h3></td>
        <td>
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
        <h3>{{$status}}</h3>
        </td>
    </tr>
    
    <tr><td colspan='4'>|</td></tr>
    <tr>
        <td>
            <div class="conteiner-produto">
                <div class="conteiner-produto-conteudo"><h6>Produto</h6></div>
                <div class="conteiner-produto-link"><a href="">+</a></div>
            </div>
        </td>
        <td><h6>Quantidade</h6></td>
        <td><h6>ValorUn</h6></td>
        <td><h6>Total</h6></td>
    </tr>
    @php
        $total = 0;
    @endphp
    @foreach ($orcamentos as $orcamento)
    
    <tr>
        <td>{{$produtos[$orcamento->produto_id]->nome}}</td>        
        <td>{{$orcamento->quantidade}}</td>        
        <td>R$ {{$produtos[$orcamento->produto_id]->valor}}</td>        
        <td>
            @php
                $total_produto = $orcamento->quantidade * $produtos[$orcamento->produto_id]->valor;
                echo 'R$ '.$total_produto;
                $total= $total+$total_produto;
            @endphp
        </td>   
    </tr>     
    @endforeach
    <tr>
        <td colspan="4">|</td>
    </tr>
    <tr>
        <td colspan="2">|</td>
        <td>TOTAL</td>
        <td>R$ {{$total}}</td>
    </tr>
    
</table>
<div class="conteiner-header"><div class="conteiner-header-link">
    <a href="">Descartar Alterações</a>
    <a href="">Salvar Alterações</a>
</div></div>


@endsection
