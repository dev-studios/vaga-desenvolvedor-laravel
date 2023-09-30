@extends('customer.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mostrar Cliente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {{ $customer->first_name}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Sobrenome:</strong>
                    {{ $customer->last_name}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Data de Nascimento:</strong>
                    {{ $customer->birthdate}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>CPF:</strong>
                    {{ $customer->cpf}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>RG:</strong>
                    {{ $customer->rg}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Telefone:</strong>
                    {{ $customer->phone_number}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>E-mail:</strong>
                    {{ $customer->email}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>CEP:</strong>
                    {{ $customer->postal_code}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Endereço:</strong>
                    {{ $customer->address}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Cidade:</strong>
                    {{ $customer->city}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Estado:</strong>
                    {{ $customer->state}}
                </div>
            </div>

@endsection