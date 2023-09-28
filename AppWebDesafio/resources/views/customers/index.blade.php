@extends('customers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>AppWebDesafio</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-sucesso" href="{{ route('customers.create') }}"> Novo Cliente</a>
            </div>
        </div>
    </div>


@endsection