@extends('layouts.app_login')

@section('title' , 'Login')

@section('content')
    @section('titulo', 'Bienvenidos')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <form action="{{ url('/login_user') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary ">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
@endsection