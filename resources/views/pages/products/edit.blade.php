@extends('layouts.app')

@section('title' , 'Editar')

@section('content')
    @section('titulo', 'Editar')
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 40rem;" >
            <div class="card-body">
                <form action="" method="POST" class="row g-2">
                    <div class="col-md-6">
                        <label for="nomProducto" class="form-label">Nombre Producto</label>
                        <input type="nomProducto" class="form-control" id="nomProducto">
                    </div>
                    <div class="col-md-6" >
                        <label for="precio" class="form-label">Precio venta</label>
                        <input type="precio" class="form-control" id="precio">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
    

@endsection