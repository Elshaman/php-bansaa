<!DOCTYPE html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title></title>
    <script>

       /* $(document).ready(function () {

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

*/
    </script>
</head>
<body>
<h1>Paso 2</h1>
<form action="{{ url('actividad_paso_2')  }}" method="post">
    @csrf
    Tipologia
    <select name="tipologia" id="tipologia">
        @foreach($tipologias as $tipologia)
            <option value="{{ $tipologia->id  }}" > {{  $tipologia->name }} </option>
        @endforeach
    </select>
    <br>
    <h2>Nombre de la actividad</h2>
    verbo: <input type="text" name="verbo" id="verbo">
    <br>
    objeto: <input type="text" name="objeto" id="objeto">
    <br>
    condición: <input type="text" name="condicion" id="condicion">
    <br>
    <h2>Descripción</h2>
    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>


    <p>Tiempo: <input type="text" name="tiempo" id="tiempo"></p>
    <p>Genera evidencia?
        <input type="radio" name="genera_evidencia" value="si">si
        <input type="radio" name="genera_evidencia" value="no">no
    </p>
    <button type="submit">
        Enviar
    </button>
</form>

</body>
</html>
