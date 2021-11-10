@extends('layouts.app')

@section('title' , 'Productos')

@section('content')
    @section('titulo', 'Productos')
    <div class="card col-md-10 mx-auto">
        <div class="card-body">
                <form class="d-flex mb-4 mx-auto" >
                    <input class="form-control me-2" type="search" placeholder="Codigo" name="codigo" aria-label="Search">
                    <input class="form-control me-2" type="search" placeholder="Sucursal" name="sucursal" aria-label="Search">
                    <input class="form-control me-2" type="search" placeholder="Nombre" name="nombre" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
                <table class="table table-info table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio venta</th>
                            <th scope="col">Sucursal</th>
                            <th colspan="3">
                                <div class="float-end">
                                    <button class="btn btn-sm btn-info" type="submit">Agregar producto</button>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>    
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> 
                                <form action="EditProductos" method="POST">
                                    <input type="hidden" name="cod_producto">
                                    <input type="submit" value="Editar" class="btn btn-outline-warning btn-sm" > 
                                </form>
                            </td>
                            <td> 
                                <form action="DeleteProducto" method="POST">
                                    <input type="hidden" name="cod_producto">
                                    <input type="submit" value="Dar de baja" class="btn btn-outline-danger btn-sm" > 
                                </form>
                            </td>
                            <td>
                                <form action="DeleteProducto" method="POST">
                                    <input type="hidden" name="cod_producto">
                                    <input type="submit" value="Eliminar" class="btn btn-outline-danger btn-sm" > 
                                </form>
                            </td>                        
                        </tr>
                        
                    </tbody>
                </table>
            </center>
        </div>
    </div>
@endsection