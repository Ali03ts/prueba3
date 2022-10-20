<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table class="table table-striped table-hover">
<tr>
<td><b>ID</b></td>
<td><b>Foto(nombre)</b></td>
<td><b>Foto</b></td>
<td><b>Nombre</b></td>
<td><b>Apellido Paterno</b></td>
<td><b>Apellido Materno</b></td>
<td><b>Fecha de Nacimiento</b></td>
<td><b>Email</b></td>
<td><b>Contraseña</b></td>
<td><b>Estatus</b></td><td></td>
<td><a href="{{ route ('alta')}}"><button type="button" class="btn btn-success">Alta</button></a></td>


</td>
<td></td>
</tr>


<tr>
@foreach($usuarios2 as $usuario)
    <td>{{ $usuario -> id_usuario }}</td>
    <td>{{ $usuario -> foto }}</td>
    <td><img src="{{ asset ('archivos/'.$usuario->foto) }}" style="width:50px"></td>
    <td>{{ $usuario -> nombre }}</td>
    <td>{{ $usuario -> app }}</td>
    <td>{{ $usuario -> ap }}</td>
    <td>{{ $usuario -> fn }}</td>
    <td>{{ $usuario -> email }}</td>
    <td>{{ $usuario -> pass }}</td>
    
    <td>
        @if($usuario->activo == 1)
        Activo
        @else
        Inactivo
        @endif
    </td>

<td>
    <a href="{{ route('detalle',['id' => $usuario->id_usuario]) }}">
        <button type="button" class="btn btn-info">Detalle</button></a>&nbsp;
</td>
<td>
    <a href="{{ route('editar',['id' => $usuario->id_usuario]) }}">
        <button type="button" class="btn btn-warning">Editar</button></a>&nbsp;
</td>
<td>
    <a href="{{ route('borrar',['id' => $usuario->id_usuario]) }}" onclick="return confirm('¿Enserio quieres eliminar el usuario?')">
    <button type="button" class="btn btn-danger">Eliminar</button></a>
</td>


</tr>
@endforeach

    </table>
    
</body>
</html>