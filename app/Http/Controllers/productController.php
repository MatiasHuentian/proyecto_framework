<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')
            ->select()
            ->addSelect('offices.nom_sucursal' , 'categories.nom_categoria')
            ->join('categories', 'categories.id', '=', 'products.id_categories')
            ->join('offices' , 'offices.id' , 'products.id_offices')
        ->get();

        return view('pages.products.index' , [ 'products' => $products ]);
    }

    public function create(){
        return view('pages.products.create');
    }

    public function store(){
        return view('pages.products.create');
    }
    
    public function edit(Request $request){
        $product = DB::table('products')
            ->select()
            ->where('codigo' , '=' , $request->codigo)
        ->first();

        return view('pages.products.edit' , ['product' => $product ]);
    }

    public function update(Request $request){
        DB::table('products')
            ->where('codigo' , '=' , $request->codigo)
            ->update(
                [
                    'name' => $request->name,
                    'precio_venta' => $request->precio_venta,
                    'descripcion' => $request->descripcion
                ]
        );

        return redirect('/productos');
    }

    public function delete(Request $request)
    {
        // return $request;
        DB::table('products')
            ->Where( 'id' , '=' , $request->id)
        ->delete();

        return redirect('/productos');
    }
}
