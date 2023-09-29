<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;




class ClienteController extends Controller
{

    //Pra não utilizar em todas metodos que precisar utilizar $cliente = new Cliente;
    public readonly Cliente $cliente;
    public function __construct(){
        $this->cliente = new Cliente();
    }

    
    public function index()
    {
        $clientes = $this->cliente->all();

        return view('clientes',['clientes' => $clientes]);
        
    }

   

    public function create()
    {
        return view('cliente_create');
    }
    
    public function store(Request $request)
    {
        $created=$this->cliente->create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
        ]);
        
        if($created){
            return redirect()->back()->with('message','Cliente cadastrado com SUCESSO');
        }
        return redirect()->back()->with('message','ERRO');

    }

    public function show(cliente $cliente)
    {
        return view('cliente_delete',['cliente' => $cliente]);
    }

   
    public function edit(Cliente $cliente)
    {
        return view('cliente_edit',['cliente' => $cliente]);
        
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->cliente->where('id' , $id)->update($request->except(['_token' , '_method']));
        
        if($updated){
            return redirect()->back()->with('message','Cadastro atualizado com SUCESSO');
        }
        return redirect()->back()->with('message','ERRO');
        
        //var_dump($request->except(['_token' , '_method']));
    }

    public function destroy(string $id)
    {
        $this->cliente->where('id', $id)->delete();
        return redirect()->route('clientes.index');
    }
}
