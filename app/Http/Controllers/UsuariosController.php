<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuarios;
use App\Models\Tipos;

use \App\Http\Requests\validar;

class UsuariosController extends Controller
{

 /*
    public function base(){
        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select('SELECT usuario.id_usuario as id_usuario, usuario.nombre as nombre, usuario.app as app,
        usuario.apm as apm, usuario.fn as fn, usuario.gen as gen, usuario.foto as foto, usuario.email as email,
        usuario.pass as pass, usuario.activo as activo, tipo.nombre as tipo
        FROM tb_usuarios as usuario, tb_tipos as tipo
        WHERE usuario.tipo=tipo.id_tipos');
        return view("base")
        ->with(['usuarios1' => $usuarios_a]) 
        ->with(['usuarios2' => $usuarios_b]);
    }
    */
    //
    public function usuarios(){ 
        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select('SELECT usuario.id_usuario as id_usuario, usuario.nombre as nombre, usuario.app as app,
        usuario.ap as ap, usuario.fn as fn, usuario.gen as gen, usuario.foto as foto, usuario.email as email,
        usuario.pass as pass, usuario.activo as activo FROM tb_usuarios as usuario');
        return view("lista_usuarios")
        ->with(['usuarios1' => $usuarios_a]) 
        ->with(['usuarios2' => $usuarios_b]);
        
    }

    public function detalle($id){
        $usuario = Usuarios::find($id);
        return view("detalle")
            ->with(['detalle' => $usuario]);
    }


    /************************************************* Alta *****************************************************/
    public function alta(){
        $tipos = Tipos::all();
        return view ("alta")
        ->with(['tipos' => $tipos]);
    }

    public function registrar(validar $request){
        //$valido = $request->validated();
        /********************************************** Valida campos *******************************************/
        /*
        $this-> $validate($request,[
            'clave' => 'required',
            'nombre' => 'required',
            'app' => 'required',
            'apm' => 'required',
            'fn' => 'required',
            'email' => 'required',
            'pass' => 'required',
        ]);
        */


        //Usuarios::create($request->only('clave', 'nombre', 'app', 'fn', 'gen', 'foto', 'email', 'pass', 'nivel', 'activo'));
        Usuarios::create(array(
        'clave' => $request->input('clave'),
        'nombre' =>$request->input('nombre'),
        'app' =>$request->input('app'),
        'ap' =>$request->input('ap'),
        'fn' =>$request->input('fn'),
        'gen' =>$request->input('gen'),
        'foto' =>$request->input('foto'),
        'email' =>$request->input('email'),
        'pass' =>$request->input('pass'),
        'tipo' =>$request->input('tipo'),
        'activo' =>'1'
    ));
        return redirect()->route('lista_usuarios');
    }


    /*********************************************** Editar **********************************************/
    public function editar(Usuarios $id){
        $niveles = Tipos::all();
        return view("editar")
        ->with(['usuario' => $id])
        ->with(['niveles' => $niveles]);
    }

    public function salvar(Usuarios $id,Request $request){
        //$id->update($request->only('create', 'nombre', 'app', 'fn', 'gen', 'foto', 'email', 'pass', 'nivel', 'activo'));
        //dd($request->all());
        $query = Usuarios::find($id->id_usuario);
        $query->clave = $request->clave;
        $query->nombre = trim($request->nombre);
        $query->app = trim($request->app);
        $query->ap = trim($request->ap);
        $query->fn = $request->fn;
        $query->gen = $request->gen;
        $query->foto = trim($request->foto);
        $query->email = trim($request->email);
        $query->pass = trim($request->pass);
        $query->nivel = $request->nivel;
        $query->activo = $request->activo;
        $query->save();
        return redirect()->route("editar",['id'=>$id->id_usuario]);
    }

    /*********************************************** Borrar ****************************************/
   //public function borrar($id){
    public function borrar(Usuarios $id){
        \Storage::disk('local')->delete($id->foto);   //destruye la foto del usuario
        $id->delete();
        return redirect()->route("lista_usuarios");
    }

}
/*
    <td><a href="{{ route('alta_usuarios') }}"><button type="button" class="btn btn-success">Alta</button></a></td>

    <td>
        <a href="{{ route('detalle_usuarios',['id' => $usuario->id_usuario]) }}"><button>Detalle</button></a>&nbsp;
    </td>
    <td>
        <a href="{{ route('editar_usuarios',[id => $usuario->id_usuario]) }}"><button type="button" class="btn btn-warning">Modificar</button></a>&nbsp;
    </td>
    <td>
        <a href="{{ route('borrar_usuarios',['id' => $usuario->id_usuario]) }}" onclick="return confirm('Confirme la accion')"><button type="button" class="btn btn-danger">Eliminar</button></a>
    </td>

*/