@extends('layouts.app')

@section('title' , 'Agregar')

@section('content')
    @section('titulo', 'Agregar')
        <div class="card mx-auto" style="width: 40rem;"  >
            <div class="card-body">
                <form action="" method="POST" class="row g-2">
                    <div class="col-md-4" >
                        <label for="codigo" class="form-label">Código unico</label>
                        <input type="codigo" class="form-control" id="codigo">
                    </div>
                    <div class="col-md-4">
                        <label for="nomProducto" class="form-label">Nombre Producto</label>
                        <input type="nomProducto" class="form-control" id="nomProducto">
                    </div>
                    <div class="col-md-4" >
                        <label for="precio" class="form-label">Precio venta</label>
                        <input type="precio" class="form-control" id="precio">
                    </div>
                    <div class="col-md-4">
                        <label for="nom" class="form-label">Categoria</label>
                        <select class="form-select">
                            <option selected>Categoria</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="nom" class="form-label">Sucursal</label>
                        <select class="form-select">
                            <option selected>Sucursal</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>   
                    <div class="col-md-4" >
                        <label for="precio" class="form-label">Cantidad</label>
                        <input type="precio" class="form-control" id="precio">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                    <button type="submit" class="btn btn-warning">Agregar</button>
                </form>
            </div>
        </div>
    

@endsection