<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" integrity="sha512-pli9aKq758PMdsqjNA+Au4CJ7ZatLCCXinnlSfv023z4xmzl8s+Jbj2qNR7RI8DsxFp5e8OvbYGDACzKntZE9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        $("#competencia").append('<option value="' + objeto.id + '" > ' + objeto.nombre + ' </option>');
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
                        $("#raps").append('<option value="' + objeto.id + '" > ' + objeto.nombre + ' </option>');
                    });
                });
            });


        });


    </script>
</head>
<body>
<form action="{{ url('actividad_paso_1')  }}" method="post">
    @csrf
    <fieldset>

        <!-- Form Name -->
        <legend>Paso 1: Delimitación de la actividad de aprendizaje</legend>

        <!-- Select programa -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="programa">Programa de Formación:</label>
            <div class="col-md-4">
                <select name="programa" id="programa" class="form-control">
                    @foreach($programas as $programa)
                        <option value="{{ $programa->id  }}" > {{  $programa->nombre }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>


        <!-- Select competencia -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="competencia">Competencia:</label>
            <div class="col-md-4">
                <select name="competencia" id="competencia" class="form-control">
                </select>
            </div>
        </div>
        <br>

        <!-- Select resultado -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="raps">Resultado de Aprendizaje:</label>
            <div class="col-md-4">
                <select name="raps" id="raps" class="form-control" >
                </select>
            </div>
        </div>
        <br>

        <!-- Select tipos actividad -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tipos_actividad">Tipo de Actividad:</label>
            <div class="col-md-4">
                <select name="tipos_actividad" id="tipos_actividad" class="form-control">
                    @foreach($tipos_actividad as $tipo)
                        <option value="{{ $tipo->id  }}" > {{ $tipo->nombre }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
                <button type="submit" id="" name="" class="btn btn-primary">Siguiente</button>
            </div>
        </div>

    </fieldset>
</form>
</body>
</html>
