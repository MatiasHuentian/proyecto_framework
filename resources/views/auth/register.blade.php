@extends('layouts.app_login')

@section('title' , 'Registro')

@section('content')
    @section('titulo', 'Registro')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <form action="{{ url('/register_user') }}" method="POST" class="row g-2">
                    @csrf
                    <div class="col-md-6 ">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="col-md-6" >
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-md-4">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena">
                    </div>
                    <div class="col-md-4">
                        <label for="id_positions" class="form-label">Cargo</label>
                        <select class="form-select" name="id_positions">
                            @foreach ( $positions as $position )
                                <option value="{{ $position->id }}"> {{ $position->nom_cargos }} </option>
                            @endforeach
                        </select>
                    </div>   
                    <button type="submit" class="btn btn-success">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection