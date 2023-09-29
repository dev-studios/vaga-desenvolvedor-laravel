@extends('customer.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Novo Cliente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
            <strong>Whoops!</strong> Houve um problema com a criação do objeto.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="first_name" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="last_name" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="date" name="birthdate" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="cpf" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="rg" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="phone_number" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="postal_code" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="address" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="city" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Primeiro nome:</strong>
                    <input type="text" name="state" class="form-control" placeholder="Exemplo: Maria">
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Submit</button>
            </div>
        </div>
    </form>

@endsection