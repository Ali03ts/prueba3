<html>
    <head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
        color: ;
        background-image: url("https://i.pinimg.com/originals/fb/e3/ce/fbe3ce04d459168c0bf93f30a93b25c9.jpg");
        background-repeat: no-repeat;
        background-size: 10000px;              
    }
  </style>
</head>
    <body>
        <center>
            <h2>Usuario: Detalle</h2>
            <hr class="text-info border-2 opacity-50">
            <img src="{{ asset ('archivos/'.$detalle->foto) }}" style="width:150px"><br>
            <h3>Nombre: {{ $detalle->app . ' ' . $detalle->ap . ', ' . $detalle->nombre }}</h3>
            <b>Clave | Matricula: </b>{{ $detalle->clave }}<br>
            <b>Fecha Nacimiento: </b>{{ $detalle->fn }}<br>
            <b>Genero: </b>{{ $detalle->gen }}<br>
            <b>Email: </b>{{ $detalle->email }}<br>
            <b>Contraseña: </b>{{ $detalle->pass }}<br>
            <b>Resultado: </b>{{ $detalle->id_usuario  }}<br>
            <hr class="text-info border-2 opacity-50"><br>
            <a href="{{ route('lista_usuarios') }}"><button type="button" class="btn btn-success">Regresar</button></a></td>

        </center>
    </body>
</html>