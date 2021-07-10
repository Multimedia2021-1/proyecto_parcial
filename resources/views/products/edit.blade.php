@extends('main')
    @section('titulo')
        Edit
    @endsection
    @section('contenido')
        <form action="{{route('products.update', $products->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label  class="form-label">nombre</label>
                <input type="text" class="form-control" value="{{$products->nombre}}" name="nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">peso</label>
                <input type="text" class="form-control" value="{{$products->peso}}" name="peso">
            </div>
            <div class="mb-3">
                <label  class="form-label">precio</label>
                <input type="text" class="form-control" value="{{$products->precio}}" name="precio">
            </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    @endsection