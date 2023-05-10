<!DOCTYPE html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title></title>
    <script>

        $(document).ready(function () {

            $('#programa').change(function () {
                //limpiar el select de competencia
                $("#competencia").html("");
                let idprograma = $("#programa").val();

                $.getJSON('http://127.0.0.1:8000/competencias/' + idprograma, function (resultcomp) {
                    console.log(resultcomp);
                    $.each(resultcomp, function (i, objeto) {
                        $("#competencia").append('<option value="' + objeto.id + '" > ' + objeto.name_pf + ' </option>');
                    });
                });
            });

          //carga de resultados  cuando se da click en alguna competencia
            $('#competencia').change(function () {
                //limpiar el select de competencia
                $("#raps").html("");
                let idcompetencia = $("#competencia").val();

                $.getJSON('http://127.0.0.1:8000/raps/' + idcompetencia, function (resultraps) {
                    console.log(resultraps);
                    $.each(resultraps, function (i, objeto) {
                        $("#raps").append('<option value="' + objeto.id + '" > ' + objeto.nameRAP + ' </option>');
                    });
                });
            });


        });


    </script>
</head>
<body>
<h1>Paso 1</h1>
<form action="{{ url('actividad_paso_1')  }}" method="post">
    @csrf
    Programa de formacion
    <select name="programa" id="programa">
        @foreach($programas as $programa)
            <option value="{{ $programa->id  }}" > {{  $programa->name_pf }} </option>
        @endforeach
    </select>
    <br>
    Competencias del programa:
    <select name="competencia" id="competencia">

    </select>
    <br>
    Resultados de la competencia:
    <select name="raps" id="raps">

    </select>
    <br>
    Tipo de actividad:
    <select name="tipos_actividad" id="tipos_actividad">
        @foreach($tipos_actividad as $tipo)
            <option value="{{ $tipo->id  }}" > {{ $tipo->name }} </option>
        @endforeach
    </select>
    <br>
    <button type="submit">
            Enviar
    </button>


</form>

</body>
</html>
