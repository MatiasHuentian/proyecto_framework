@extends('layouts.app')

@section('title' , 'Productos')

@section('content')
    @section('titulo', 'Productos')
    <div class="card col-md-10 mx-auto">
        <div class="card-body">
                <form class="d-flex mb-4 mx-auto">
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
                            <form action="{{url('/productos/create')}}" method="GET">
                                <div class="float-end">
                                    <button class="btn btn-sm btn-info" type="submit">Agregar producto</button>
                                </div>
                            </form>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- [{"id":1,"codigo":"A01","descripcion":"descripcion","cantidad":10,"precio_venta":20,"is_active":1,"id_categories":3,"id_offices":3}] --}}
                        @foreach ($products as $prod )
                            <tr>    
                                <td>{{ $prod->codigo }}</td>
                                <td>{{ $prod->name }}</td>
                                <td>{{ $prod->descripcion }}</td>
                                <td>{{ $prod->nom_categoria }}</td>
                                <td>{{ $prod->cantidad }}</td>
                                <td>{{ $prod->precio_venta }}</td>
                                <td>{{ $prod->nom_sucursal }}</td>
                                <td> 
                                    <form action="{{ url('/productos/editar') }}" method="GET">
                                        <input type="hidden" name="codigo" value="{{ $prod->codigo }}">
                                        <input type="submit" value="Editar" class="btn btn-outline-warning btn-sm" > 
                                    </form>
                                </td>
                                <td> 
                                    <form action="DeleteProducto" method="POST">
                                        @csrf
                                        <input type="hidden" name="codigo" value="{{ $prod->codigo }}">
                                        <input type="submit" value="Dar de baja" class="btn btn-outline-danger btn-sm" > 
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('/productos/delete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $prod->id }}">
                                        <input type="submit" value="Eliminar" class="btn btn-outline-danger btn-sm" > 
                                    </form>
                                </td>                        
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </center>
        </div>
    </div>
@endsection