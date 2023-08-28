<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.6.1/jquery.min.js" integrity="sha512-3ewHEAUD/a1mVdTpCqrCRnGelmdhGzWxEuRpTiZxtD9MTvC4c3HTpuFz963p39IFjl4WWkHDolAAfUnsGPJBnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset("index.css")  }}">
    <title>Document</title>
    <script>
        $(document).ready(function() {
            let index = 0;
            $("#add").click(function() {
                var lastField = $("#buildyourform div:last");
                var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
                var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
                fieldWrapper.data("idx", intId);
                var fName = $("<input type=\"text\" class=\"fieldname\" placeholder=\"ingrese nombre\"  name=\"nombre"  + intId +  "\"  />");
                var fType = $("<select class=\"fieldtype\"  name=\"tipoevi"  + intId + "\" >"  +
                    "<option value=\"2\">Conocimiento</option>" +
                    "<option value=\"3\">Desempeño</option>" +
                    "<option value=\"1\">Producto</option>" +
                    "</select>");
                var fDesc = $("<input type=\"text\" class=\"fieldname\" placeholder=\"ingrese descripcion\" name=\"desc"  + intId  + "\" />");
                var fTech = $("<select class=\"fieldtype\"  name=\"tecnica" +  intId + "\" >"  +
                    "<option value=\"1\">Observación</option>" +
                    "<option value=\"2\">Simulación</option>" +
                    "<option value=\"3\">Valoración de Productos</option>" +
                    "</select>");
                var fInst = $("<select class=\"fieldtype\"  name=\"instrumento" +  intId + "\" >"   +
                    "<option value=\"1\">Lista de Chequeo</option>" +
                    "<option value=\"2\">Escala de Estimación</option>" +
                    "<option value=\"3\">Cuestionario</option>" +
                    "</select>");
                var fForm = $("<select class=\"fieldtype\"  name=\"formato" +  intId + "\" >"  +
                    "<option value=\"1\">PowerPoint</option>" +
                    "<option value=\"2\">Word</option>" +
                    "<option value=\"3\">Excel</option>" +
                    "<option value=\"4\">Mp4</option>" +
                    "</select>");
                var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
                removeButton.click(function() {
                    $(this).parent().remove();
                });
                fieldWrapper.append(fName);
                fieldWrapper.append(fDesc);
                fieldWrapper.append(fType);
                fieldWrapper.append(fTech);
                fieldWrapper.append(fInst);
                fieldWrapper.append(fForm);
                fieldWrapper.append(removeButton);
                $("#buildyourform").append(fieldWrapper);
                index = index + 1;
                $("#numevidencias").val(index);
            });

        });

    </script>
</head>
<body>
<form action="{{  url('actividad_paso_3') }}" method="post">
    @csrf
    <fieldset id="buildyourform">
        <legend>Paso 3: Evidencias a entregar</legend>
    </fieldset>
    <input type="button" value="Añadir Evidencia" class="add" id="add" />
    <input type="hidden" id="numevidencias"  name="numevidencias" />
    <input type="submit" value="Siguiente paso">
</form>
</body>
</html>
