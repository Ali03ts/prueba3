<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
class ProductosController extends Controller
{
    /*
    public function productos(){ 
        $productos_a = productos::all();
        $productos_b = \DB::select('SELECT productos.id_productos as id_productos, productos.clave as clave, productos.nombre as nombre,
        productos.cantidad as cantidad, productos.costo as costo, productos.id_tipo as id_tipo, productos.id_tienda as id_tienda
        productos.activo as activo, productos.foto as foto FROM tb_productos as productos');
        return view("lista_productos")
        ->with(['productos1' => $productos_a]) 
        ->with(['productos2' => $productos_b]);
        
    }

*/
}
