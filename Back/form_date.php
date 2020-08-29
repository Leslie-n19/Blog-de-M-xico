<!DOCTYPE html>
<center>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="css/CSS.css">
        <style type="text/css"> </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <script>
            function recibe() {
                var name = document.forma1.titulo.value;
                var fecha = document.forma1.fecha.value;
                
                if (name == "" || fecha =="") {
                    alert("Datos Incompletos")
                    return false;
                } else
                    return true;

            }
            
            
            $(document).ready(function() {
                $("#boton").on('click', function() {
                    if (recibe()) { //Verdadero ->
                        var form = $('#forma1')[0];
                        var data = new FormData(form);

                        $.ajax({
                            url: 'reg_fecha.php',
                            type: 'POST',
                            dataType: 'text',
                            data: data,
                            enctype: 'multipart/form-data',
                            processData: false,
                            contentType: false,
                            cache: false,
                            success: function(res) { //Se completo nuestro registro
                                if (res == 0) {
                                    alert('Registro Incorrecto');
                                } else {
                                    location.href="../Front/fechas.php";
                                }
                            }
                        });
                    } ///Termina if confirm ()

                });
            });

        </script>
    </head>

    <body>
        <form id="forma1" name="forma1" action="reg_fecha.php" enctype="multipart/form-data">
            <label>
                <hr>
                Título : <input id="campo1" type="text" name="titulo">
                <br><br>
                Fecha: <input id="campo2" type="date" name="fecha">
                <br><br>
                Lugar : <input id="campo3" type="text" name="lugar">
                <br><br>
                Descripción : <input id="campo4" type="text" name="descripcion">
                <br><br>
               
                <input type="file" id="archivo" name="archivo" required>
                <br><br>
            </label>
            <br>
            <hr> <input id="boton" class="boton" type="button" value="Registrar">
        </form>
    </body>

    </html>
</center>