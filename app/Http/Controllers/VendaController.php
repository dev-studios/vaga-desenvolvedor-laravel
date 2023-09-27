<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Cliente;

class VendaController extends Controller
{
    public readonly Venda $venda;
    public readonly Cliente $cliente;


    public function __construct(){
        $this->venda = new venda();
        $this->cliente = new cliente();
    }
    


    public function index()
    {
        $vendas = $this->venda->all();
        $clientes =$this->cliente->all();
        
        return view('vendas',['vendas' => $vendas,'clientes' => $clientes]);
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        //
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
