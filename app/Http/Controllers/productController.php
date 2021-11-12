<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = DB::table('products')
            ->select()
            ->addSelect('offices.nom_sucursal' , 'categories.nom_categoria')
            ->join('categories', 'categories.id', '=', 'products.id_categories')
            ->join('offices' , 'offices.id' , 'products.id_offices');
        if( $request->codigo){
            $products->where('products.codigo' , 'LIKE' , "%$request->codigo%");
        }
        if( $request->sucursal){
            $products->where('offices.nom_sucursal' , 'LIKE' , "%$request->sucursal%");
        }
        if( $request->nombre){
            $products->where('name' , 'LIKE' , "%$request->nombre%");
        }
        $products = $products->get();
        return view('pages.products.index' , [ 'products' => $products , 'request' => $request ]);
    }

    public function create(){
        $categories = DB::table('categories')->get();
        $offices = DB::table('offices')->get();

        return view('pages.products.create' , [ 'categories' => $categories  , 'offices' => $offices ] );
    }

    public function store(Request $request){
        DB::table('products')->insert([
            'codigo' => $request->codigo,
            'name' => $request->name, 
            'precio_venta' =>$request->precio_venta,
            'id_categories' =>$request->nom_categoria,
            'id_offices' =>$request->nom_sucursal,
            'cantidad' =>$request->cantidad,
            'descripcion' =>$request->descripcion
        ]);
        return redirect('/productos');
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
        DB::table('products')
            ->Where( 'codigo' , '=' , $request->codigo)
        ->delete();

        return redirect('/productos');
    }

    public function subir_bajar(Request $request)
    {
        if($request->is_active == 1){
            $valor_active = 0;
        }else{
            $valor_active = 1;
        }

        DB::table('products')
            ->where('codigo' , '=' , $request->codigo)
        ->update([
                'is_active' => $valor_active //$request->is_active == 1 ? 0:1,
            ]);

        return redirect('/productos');
    }
}
