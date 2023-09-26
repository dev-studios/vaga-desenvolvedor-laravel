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

    public function detalheCliente($id)
    {
        $cliente = Cliente::where('id' , $id)->first();
 
        if($cliente){
            $vendas = $cliente->vendas()->get();
            
            if($vendas){
                return view('clientedetalhe',[
                        'cliente' => $cliente,
                        'vendas'  => $vendas
                ]);
            }else{

                return view('clientedetalhe',[
                    'cliente' => $cliente

                    ]);
                }
        }      
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
        //
    }
}
