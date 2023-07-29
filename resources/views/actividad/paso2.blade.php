<!DOCTYPE html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" integrity="sha512-pli9aKq758PMdsqjNA+Au4CJ7ZatLCCXinnlSfv023z4xmzl8s+Jbj2qNR7RI8DsxFp5e8OvbYGDACzKntZE9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <title></title>

</head>
<body>

<form action="{{ url('actividad_paso_2')  }}" method="post">
    @csrf
    <fieldset>

        <!-- Form Name -->
        <legend>Paso 2:Caracterizacion de la actividad de aprendizaje</legend>

        <!-- Select Tipologia -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tipologia">Dimensión de Aprendizaje:</label>
            <div class="col-md-4">
                <select name="tipologia" id="tipologia" class="form-control">
                    @foreach($tipologias as $tipologia)
                        <option value="{{ $tipologia->id  }}" > {{  $tipologia->nombre }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>

        <!--  verbo -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="verbo">Verbo</label>
            <div class="col-md-4">
                <input id="verbo" name="verbo" type="text"  class="form-control input-md">
            </div>
        </div>
        <br>

        <!--  objeto -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="objeto">Objeto</label>
            <div class="col-md-4">
                <input id="objeto" name="objeto" type="text"  class="form-control input-md">
            </div>
        </div>
        <br>

        <!--  condición -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="condicion">Condición</label>
            <div class="col-md-4">
                <input id="condicion" name="condicion" type="text"  class="form-control input-md">
            </div>
        </div>
        <br>

        <!--  descripcion -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="desc">Descripción</label>
            <div class="col-md-4">
                <textarea id="desc" name="desc" cols="30" rows="10" class="form-control">
                </textarea>
            </div>
        </div>
        <br>


        <!--  tiempo en horas -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tiempo">Tiempo(horas)</label>
            <div class="col-md-4">
                <input id="tiempo" name="tiempo" type="text"  class="form-control input-md">
            </div>
        </div>
        <br>


        <!--  genera evidencia -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Genera Evidencia</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="genera_evidencia" id="genera_evidencia" value="si" checked="checked">
                    si
                </label>
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="genera_evidencia" id="genera_evidencia" value="no" checked="checked">
                    no
                </label>
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
