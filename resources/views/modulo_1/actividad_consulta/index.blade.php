<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Listado de Actividades</h1>
    <h2> Instructor: {{ Auth::user()->name  }}</h2>
    <table>
        <thead>
            <tr>
                <th>Actividad</th>
                <th>Descripción</th>
                <th>Tiempo(horas)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actividades as $actividad)
                <tr>
                    <td> {{$actividad->verbo }} {{ $actividad->objeto }} {{$actividad->condicion}} </td>
                    <td> {{$actividad->descripcion}}</td>
                    <td> {{$actividad->tiempo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
