<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<form action="{{  url('actividad_paso_3_alt') }}" method="post">
    @csrf
    <h1>Nueva Evidencia</h1>
    @for($i = 0 ; $i < session("numevidencias") ; $i++)
        <hr>
        Nombre Evidencia:
        <input type="text" name="nombre_evidencia_{{ $i + 1 }}">
        <hr>
        Descripción Evidencia:
        <input type="text" name="descripcion_evidencia_{{ $i + 1 }}">
        <hr>
        Tipo Evidencia:
        <select name="tipo_evidencia_{{ $i + 1 }}" id="">
            @foreach($tipos_evidencia as $te)
                <option value="{{  $te->id  }}" >
                    {{ $te->nombre  }}
                </option>
            @endforeach
        </select>
        <br>
        Formato Evidencia:
        <select name="formato_evidencia_{{ $i + 1 }}" id="">
            @foreach($formatos_evidencia as $fe)
                <option value="{{  $fe->id  }}" >
                    {{ $fe->name  }}
                </option>
            @endforeach
        </select>
        <br>
        Tecnica de Evaluacion
        <select name="tecnica_evaluacion_{{ $i + 1 }}" id="">
            @foreach($tecnicas_evaluacion as $tev)
                <option value="{{  $tev->id  }}" >
                    {{ $tev->name  }}
                </option>
            @endforeach
        </select>
        <br>
        Instrumento de Evaluacion
        <select name="instrumento_evaluacion_{{ $i + 1 }}" id="">
            @foreach($instrumentos_evaluacion as $iev)
                <option value="{{  $iev->id  }}" >
                    {{ $iev->name  }}
                </option>
            @endforeach
        </select>
        <hr>
        <h3>Criterios de Evaluación:</h3>
        @foreach($criterios_evaluacion as $criev)
            <input type="checkbox"  name="criterio_evaluacion_{{ $i +1  }}_{{ $loop->iteration }}" value="{{  $criev->id  }}"> {{ $criev->nombre  }}
            <br>

        @endforeach
        <a href="{{  url("actividad_paso_3_alt/create?del=1")  }}">Borrar</a>
        <hr>
    @endfor




    <input type="submit" value="Siguiente paso">
</form>
<form action="{{  url('actividad_paso_3_alt/create') }}" method="get">
    @csrf
    <input type="submit" name="add" value="Añadir Evidencia" class="add" id="add" />
</form>


</body>
</html>
