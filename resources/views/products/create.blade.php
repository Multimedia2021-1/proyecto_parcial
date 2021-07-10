@extends('main')
    @section('titulo')
        new product
    @endsection
    @section('contenido')
    <form action="{{route('products.store')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label  class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label  class="form-label">peso</label>
                <input type="text" class="form-control" name="peso">
            </div>
            <div class="mb-3">
                <label  class="form-label">precio</label>
                <input type="text" class="form-control" name="precio">
            </div>
        <button type="submit" class="btn btn-primary">Insertar</button>
    </form>
    @endsection
