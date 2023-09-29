<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\orcamento;

class VendaController extends Controller
{
    public readonly Venda $venda;
    public readonly Cliente $cliente;
    public readonly Produto $produto;
    public readonly Orcamento $orcamento;


    public function __construct(){
        $this->venda = new venda();
        $this->cliente = new cliente();
        $this->produto = new produto();
        $this->orcamento = new orcamento();
    }
    


    public function index()
    {
        $vendas = $this->venda->all();
        $clientes =$this->cliente->all();
        
        return view('vendas',['vendas' => $vendas,'clientes' => $clientes]);
        
    }

    public function create()
    {
        $vendas = $this->venda->all();
        $clientes =$this->cliente->all();

        return view('venda_create',['vendas' => $vendas,'clientes' => $clientes]);
    }

    public function store(Request $request)
    {
        $cliente = $this->cliente->where('id' , $request->input('cliente_id'))->first();
        
        $created=$this->venda->create([
            'cliente_id' => $request->input('cliente_id'),
            'orcamento_id' => '999999999',
            'total' => '0',
            'status' => '1',
        ]);
        if($created){
            return redirect()->back()->with('message','Venda Cadastrada com SUCESSO');
        }
        return redirect()->back()->with('message','ERRO');
    }

    public function show()
    {
        

        //$vendas = Venda::where('id' , $id)->get();
        
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venda = $this->venda->where('id', $id)->first();
        $cliente = $this->cliente->where('id' , $venda->cliente_id)->first();
        $produtos = $this->produto->all();
        $orcamentos = $this->orcamento->where('venda_id', $id)->get();


        return view('venda_edit',[
            'venda' => $venda ,
            'cliente' => $cliente ,
            'produtos' => $produtos,
            'orcamentos' => $orcamentos,
        ]);
        
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
