@extends('customer.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customers.create') }}"> Novo Cliente</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th width="300px">Ação</th>
        </tr>
        @foreach ($customer as $customer)

        <tr>
            <td>{{ $customer->id}}</td>
            <td>{{ $customer->first_name}} {{ $customer->last_name}}
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">Mostrar</a>

                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Editar</a>

                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach       
    </table>         
  @endsection