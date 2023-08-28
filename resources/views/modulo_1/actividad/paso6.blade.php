<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ultimo paso : registre las herramientas necesarias para su actividad </h1>
<form action="{{  url("actividad_paso_6") }}" method="post" >
    @csrf
    @for($i = 0 ; $i < session("num_herramientas") ; $i++)
        <h2>Herramienta {{ $i + 1   }}</h2>
        Nombre del elemento: <input type="text" name="nombre_herramienta_{{ $i + 1 }}">
        <a href="{{  url("actividad_paso_6/create?del=1")  }}">Borrar herramienta</a>
        <hr>
    @endfor
    <button type="submit">
        Guardar herramientas siguiente paso
    </button>
</form>

<form action="{{  url('actividad_paso_6/create') }}" method="get">
    @csrf
    <input type="submit" name="add" value="Añadir herramienta" class="add" id="add" />
</form>
</body>
