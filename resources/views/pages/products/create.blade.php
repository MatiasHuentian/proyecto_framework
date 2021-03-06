@extends('layouts.app')

@section('title' , 'Agregar')

@section('content')
    @section('titulo', 'Agregar')

    <h1 class="text-center">Agregar Producto</h1>
    <br>

        <div class="card mx-auto" style="width: 40rem;"  >
            <div class="card-body">
                <form action="{{url('/productos/store')}}" method="POST" class="row g-2">
                    @csrf 
                    <div class="form-group col-md-6" >
                        <label for="codigo" class="form-label">Código único</label>
                        <input type="codigo" class="form-control" id="codigo" name="codigo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nomProducto" class="form-label">Nombre Producto</label>
                        <input type="nomProducto" class="form-control" id="nomProducto" name="name">
                    </div>
                    <div class="form-group col-md-6" >
                        <label for="precio" class="form-label">Precio venta</label>
                        <input type="precio" class="form-control" id="precio" name="precio_venta">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nom" class="form-label">Categoria</label>
                        <select class="form-control " name="nom_categoria">
                            <option selected>Categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nom_categoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nom" class="form-label">Sucursal</label>
                        <select class="form-control" name="nom_sucursal">
                            <option selected>Sucursal</option>
                            @foreach ($offices as $office)
                                <option value="{{ $office->id }}">{{ $office->nom_sucursal }}</option>
                            @endforeach
                        </select>
                    </div>   
                    <div class="form-group col-md-6" >
                        <label for="precio" class="form-label">Cantidad</label>
                        <input type="precio" class="form-control" id="precio" name="cantidad">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="floatingTextarea2">Descripción</label>
                        <textarea class="form-control" placeholder="Agrega un comentario al producto" id="floatingTextarea2" name="descripcion" style="height: 100px"></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Agregar producto</button> 

                </form>
            </div>
        </div>
    

@endsection