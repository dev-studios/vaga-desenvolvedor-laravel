<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $product = Products::latest()->paginate(5);
        return View('product.index', compact('product'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
       return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'unity' => 'required|string|max:255',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'width' => 'required|numeric',
            'thickness' => 'required|numeric',
            'color' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
            'stock_quantity' => 'required|integer',
        ]);

        Products::create($request->all());

        return redirect()->route('products.index')
            ->with('success','O produto foi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product):View
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product): RedirectResponse
    {
        $request->validate([
          'product_name' => 'required|string|max:255',
          'description' => 'required|string|max:255',
          'category' => 'required|string|max:255',
          'unity' => 'required|string|max:255',
          'price' => 'required|numeric',
          'weight' => 'required|numeric',
          'height' => 'required|numeric',
          'width' => 'required|numeric',
          'thickness' => 'required|numeric',
          'color' => 'required|string|max:255',
          'brand' => 'required|string|max:255',
          'manufacturer' => 'required|string|max:255',
          'supplier' => 'required|string|max:255',
          'stock_quantity' => 'required|integer',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product):RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produto deletado com sucesso');
    }
}
