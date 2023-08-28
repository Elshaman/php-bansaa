<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paso 5 : registre los elementos que require para su actividad </h1>
    <form action="{{  url("actividad_paso_5") }}" method="post" >
        @csrf
        @for($i = 0 ; $i < session("num_elementos") ; $i++)
            <h2>Elemento {{ $i + 1   }}</h2>
            Nombre del elemento: <input type="text" name="nombre_elemento_{{ $i + 1 }}">
            <a href="{{  url("actividad_paso_5/create?del=1")  }}">Borrar elemento</a>
            <hr>
        @endfor
        <button type="submit">
            Guardar elementos y siguiente paso
        </button>
    </form>

    <form action="{{  url('actividad_paso_5/create') }}" method="get">
        @csrf
        <input type="submit" name="add" value="Añadir elemento" class="add" id="add" />
    </form>
</body>
