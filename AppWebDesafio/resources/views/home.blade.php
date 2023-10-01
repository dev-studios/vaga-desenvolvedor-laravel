@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Opções') }}</div>
                    <a class="navbar-brand" href="{{ route('customer.create') }}"> 
                        {{ config('customer.create', '- Clientes') }}
                        </a>
                        <a class="navbar-brand" href="{{ route('product.create') }}">
                        {{ config('product.create', '- Produtos') }}
                        </a>
                        <a class="navbar-brand" href="{{ route('order.create') }}">
                        {{ config('order.create', '- Pedidos') }}
                        </a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
