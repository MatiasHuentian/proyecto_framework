@extends('layouts.app')

@section('title' , 'Registro')

@section('content')
    @section('titulo', 'Registro')
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 40rem;" >
            <div class="card-body">
                <form action="" method="POST" class="row g-2">
                    <div class="col-md-6 ">
                        <label for="nom" class="form-label">Nombre</label>
                        <input type="nom" class="form-control" id="nom">
                    </div>
                    <div class="col-md-6" >
                        <label for="ape" class="form-label">Apellido</label>
                        <input type="ape" class="form-control" id="ape">
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="col-md-4">
                        <label for="contra" class="form-label">Contraseña</label>
                        <input type="contra" class="form-control" id="contra">
                    </div>
                    <div class="col-md-4">
                        <label for="nom" class="form-label">Cargo</label>
                        <select class="form-select">
                            <option selected>Cargos</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>   
                    <button type="submit" class="btn btn-success">Registrar</button>
                </form>
            </div>
        </div>
    </div>
    

@endsection