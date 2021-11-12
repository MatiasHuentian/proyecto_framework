@extends('layouts.app')

@section('title' , 'Agregar')

@section('content')
    @section('titulo', 'Agregar')
        <div class="card mx-auto" style="width: 40rem;"  >
            <div class="card-body">
                <form action="{{url('/productos/store')}}" method="POST" class="row g-2">
                    @csrf 
                    <div class="col-md-4" >
                        <label for="codigo" class="form-label">Código unico</label>
                        <input type="codigo" class="form-control" id="codigo" name="codigo">
                    </div>
                    <div class="col-md-4">
                        <label for="nomProducto" class="form-label">Nombre Producto</label>
                        <input type="nomProducto" class="form-control" id="nomProducto" name="name">
                    </div>
                    <div class="col-md-4" >
                        <label for="precio" class="form-label">Precio venta</label>
                        <input type="precio" class="form-control" id="precio" name="precio_venta">
                    </div>
                    <div class="col-md-4">
                        <label for="nom" class="form-label">Categoria</label>
                        <select class="form-select" name="nom_categoria">
                            <option selected>Categoria</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="nom" class="form-label">Sucursal</label>
                        <select class="form-select" name="nom_sucursal">
                            <option selected>Sucursal</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>   
                    <div class="col-md-4" >
                        <label for="precio" class="form-label">Cantidad</label>
                        <input type="precio" class="form-control" id="precio" name="cantidad">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="descripcion" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                    <button type="submit" class="btn btn-warning">Agregar</button>
                </form>
            </div>
        </div>
    

@endsection