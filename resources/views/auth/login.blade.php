@extends('layouts.app')

@section('title' , 'Login')

@section('content')
    @section('titulo', 'Bienvenidos')
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-4">
                        <label for="pasword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary ">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
@endsection