@extends('customer.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Cliente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
            <strong>Whoops!</strong> Houve um problema com o seu objeto.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('customers.update',$customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="first_name" value="{{ $customer->first_name }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sobrenome:</strong>
                    <input type="text" name="last_name" value="{{ $customer->last_name }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de nascimento:</strong>
                    <input type="date" name="birthdate" value="{{ $customer->birthdate }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CPF:</strong>
                    <input type="text" name="cpf" value="{{ $customer->cpf }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RG:</strong>
                    <input type="text" name="rg" value="{{ $customer->rg }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telefone:</strong>
                    <input type="text" name="phone_number" value="{{ $customer->phone_number }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>E-mail:</strong>
                    <input type="text" name="email" value="{{ $customer->email }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CEP:</strong>
                    <input type="text" name="postal_code" value="{{ $customer->postal_code }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Endereço:</strong>
                    <input type="text" name="address" value="{{ $customer->address }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cidade:</strong>
                    <input type="text" name="city" value="{{ $customer->city }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="text" name="state" value="{{ $customer->state }}" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Gravar</button>
            </div>
        </div>
    </form>
@endsection