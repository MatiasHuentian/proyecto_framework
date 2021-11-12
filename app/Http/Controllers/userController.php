<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function user_login( Request $request )
    {
        $user = DB::table('tblusers')
            ->select('id')
            ->where('email' , 'LIKE' , $request->email)
            ->where('contrasena' , '=' , $request->password)
        ->first();

        if( $user->id != null){
            return redirect('/productos');
        }else{
            return view('auth.login' , [ 'message' => 'Las credenciales no coinciden, asegurese de escribir bien el correo y la contraseña' ] );
        }
    }

    public function register(){
        $positions = DB::table('positions')
            ->select('id' , 'nom_cargos' )
            ->orderBy('nom_cargos')->get();

        return view('auth.register' , [
            'positions' => $positions
        ] );
    }

    public function user_register(Request $request){
        DB::table('tblusers')->insert(
            [
                'email' => $request->email, 
                'nombre' => $request->nombre ,
                'apellido' => $request->apellido,
                'contrasena' => $request->contrasena,
                'id_positions' => $request->id_positions
            ]
        );
        return view('pages.products.index');
    }
}
