<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Customer;
use App\Models\Orders;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $order = Orders::latest()->paginate(5);
        return view('order.index', compact('order'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $product = Products::all(); // Recupere todos os produtos da tabela products
        $customer = Customer::all(); // Recupere todos os Clientes da tabela products
        return view('order.create', compact('product', 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|exists:products,id',
            'negotiation_date' => 'required|date',
            'unity_price' => 'required|numeric',
            'quantity' => 'required|integer',
            'total_amount' => 'required|numeric',
            'status' => 'required|string|in:A,P,C',
        ]);

        Orders::create($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'O pedido foi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $order)
    {
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $order):View
    {
        $product = Products::all(); 
        $customer = Customer::all(); 
        $order = Orders::all(); 
        return view('order.edit', compact('order', 'product', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $order):RedirectResponse
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|exists:products,id',
            'negotiation_date' => 'required|date',
            'unity_price' => 'required|numeric',
            'quantity' => 'required|integer',
            'total_amount' => 'required|numeric',
            'status' => 'required|string|in:A,P,C',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Pedido atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $order):RedirectResponse
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Pedido deletado com sucesso');
    }
}