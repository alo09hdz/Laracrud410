<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallina = Product::get(); 
        return view('products_index', compact('gallina')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$brands = Brand::get(); //Obtener todos los datos
        $brands = Brand::pluck('id', 'brand'); //Obtener datos especificos
        //dd($brands); //Verificar que los datos se esten extrayendo
        return view('products_create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo "Registro Realizado";
        //dd($request);
        Product::create($request->all());
        return to_route('products.index')->with('status', 'Producto registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        echo "Show productos";
        return view('products_show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        echo "Edit productos";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        echo "Update productos";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        echo "destroy productos";
    }
}
