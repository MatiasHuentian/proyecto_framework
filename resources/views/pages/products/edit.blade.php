@extends('layouts.app')

@section('title' , 'Editar')

@section('content')
    @section('titulo', 'Editar')
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 40rem;" >
            <div class="card-body">
                <form action="{{ url('/productos/actualizar') }}" method="POST" class="row g-2">
                    @csrf
                    <input type="hidden" name="codigo" value="{{ $product->codigo }}">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nombre Producto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="col-md-6" >
                        <label for="precio_venta" class="form-label">precio venta</label>
                        <input type="text" class="form-control" id="precio_venta" name="precio_venta" value="{{ $product->precio_venta }}">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="descripcion" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $product->descripcion }}</textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
    

@endsection