<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>paso 4 CArgue los materiales o recursos para su actividad</h1>
    <form action="{{  url("actividad_paso_4") }}" method="post" enctype="multipart/form-data">
        @csrf

        @for($i = 0 ; $i < session("num_materiales") ; $i++)

            <h2>Material {{ $i + 1   }}</h2>

            Nombre del material: <input type="text" name="nombre_material_{{ $i + 1 }}">
            Ingrese su archivo {{ $i + 1 }}:<input type="file" name="archivo_material_{{ $i + 1 }}">
            <a href="{{  url("actividad_paso_4/create?del=1")  }}">Borrar material</a>
            <hr>

        @endfor




        <!-- boton de avanzar -->
        <hr />
        <button>
            subir materiales y siguiente paso
        </button>
    </form>

    <form action="{{  url('actividad_paso_4/create') }}" method="get">
        @csrf
        <input type="submit" name="add" value="Añadir material" class="add" id="add" />
    </form>

</body>
