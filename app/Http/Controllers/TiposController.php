<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos;

class TiposController extends Controller
{
    //
    public function tipos(){ 
        $tipos_a = Tipos::all();
        $tipos_b = \DB::select('SELECT * FROM tb_tipos');
        return view("lista_tipos")
        ->with(['tipos1' => $tipos_a]) 
        ->with(['tipos2' => $tipos_b]);
        
    }
}
