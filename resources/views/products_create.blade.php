@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1>Create de Productos</h1>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label for="">Nombre del Producto</label>
        <input type="text" name="nameProduct" id="">
        
        <label for="">Marca</label>
        <input type="text" name="brand" id="">

        <label for="">Cantidad</label>
        <input type="number" name="stock" id="">

        <label for="">Precio unitario</label>
        <input type="text" name="unit_price" id="">
        
        <label for="">Imagen del Producto</label>
        <input type="text" name="imagen" id="">


        <button type="submit">Registrar</button>
    </form>

@endsection