<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'tb_usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'clave',
        'nombre',
        'app',
        'ap',
        'fn',
        'gen',
        'foto',
        'email',
        'pass',
        'nivel',
        'activo',

    ];
}
/*      <tr>
                        <td> Fecha de Nacimiento: </td>
                        <td>
                            <input type="date" name="fn" value="{{ old('fn') }}">
                            @if($errors->first('fn')) <i>{{ $errors->first('fn') }}</i> @endif
                        </td>
                    </tr>
                    <tr>
                        <td> Foto: </td>
                        <td>
                            <input type="text" name="foto" value="{{ old('foto') }}">
                        </td>
                    </tr>
                    <tr>
                        <td> Email: </td>
                        <td>
                            <input type="text" name="email" value="{{ old('email') }}">
                            @if($errors->first('email')) <i>{{ $errors->first('email) }}</i> @endif
                        </td>
                    </tr>
                    <tr>
                        <td> Contraseña: </td>
                        <td>
                            <input type="text" name="pass" value="{{ old('pass') }}">
                            @if($errors->first('pass')) <i>{{ $errors->first('pass') }}</i> @endif
                        </td>
                    </tr>*/