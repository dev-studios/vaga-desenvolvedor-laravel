<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $order = Order::latest()->paginate(5);
        return view('order.index', compact('order'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('order.create');
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

        Order::create($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'O pedido foi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order):View
    {
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order):RedirectResponse
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
    public function destroy(Order $order):RedirectResponse
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Pedido deletado com sucesso');
    }
}