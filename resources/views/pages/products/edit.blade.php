@extends('layouts.app')

@section('title' , 'Editar')

@section('content')
    @section('titulo', 'Editar')


    <h1 class="text-center">Editar Producto</h1>
    <br>

    <div class="row justify-content-center">

        <div class="card" style="width: 40rem;" >

            <div class="card-body">
                <form action="{{ url('/productos/actualizar') }}" method="POST" class="row g-2">
                    @csrf
                    <input type="hidden" name="codigo" value="{{ $product->codigo }}">

                    <div class="form-group col-md-6">
                        <label for="name" class="form-label">Nombre Producto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                    </div>

                    <div class="form-group col-md-6" >
                        <label for="precio_venta" class="form-label">Precio venta</label>
                        <input type="text" class="form-control" id="precio_venta" name="precio_venta" value="{{ $product->precio_venta }}">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="floatingTextarea2">Descripción</label>
                        <textarea class="form-control" name="descripcion" placeholder="Agrega un comentario al producto" id="floatingTextarea2" style="height: 100px">{{ $product->descripcion }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-warning ">Actualizar</button>
                    
                </form>
            </div>
        </div>
    </div> 
     

@endsection