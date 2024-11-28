<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
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
        //$gallina = Product::get(); 
        $gallina = Product::paginate (4);
        return view('admin/products/index', compact('gallina')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$brands = Brand::get(); //Obtener todos los datos
        $brands = Brand::pluck('id', 'brand'); //Obtener datos especificos
        //dd($brands); //Verificar que los datos se esten extrayendo
        return view('admin/products/create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all(); //Obtener los datos del formulario
        if (isset($data["imagen"])) {
            $data["imagen"] = $filename = time(). "." .$data["imagen"]->extension(); //cambiar el nombre del archivo a guardar 
            $request->imagen->move(public_path("imagen/products"),$filename);//guardar imagen en la carpeta publica 
        }
               
        Product::create($data);
        return to_route('products.index')->with('status', 'Producto registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin/products/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::pluck('id', 'brand'); //Obtener datos especificos
        return view('admin/products/edit', compact('product','brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all(); //Obtener los datos del formulario
        if (isset($data["imagen"])) {
            $data["imagen"] = $filename = time(). "." .$data["imagen"]->extension(); //cambiar el nombre del archivo a guardar 
            $request->imagen->move(public_path("imagen/products"),$filename);//guardar imagen en la carpeta publica 
        }
        
        $product->update($data);//Actualizamos los datos en la base de datos
        return to_route(route: 'products.index')->with('status', 'Producto actualizado.');
    }
    public function delete(Product $product)    
    {
        echo view('admin/products/delete', compact('product'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product ->delete();
        return to_route('products.index')->with('status','Producto eliminado');
    }

    
}
