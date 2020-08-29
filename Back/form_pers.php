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
                var name = document.forma1.nombre.value;
                var lugarNac = document.forma1.lugarNac.value;
                
                if (name == "" || lugarNac =="") {
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
                            url: 'reg_personajes.php',
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
                                    location.href="../Front/personajes.php";
                                }
                            }
                        });
                    } ///Termina if confirm ()

                });
            });

        </script>
    </head>

    <body>
        <form id="forma1" name="forma1" action="reg_personajes.php" enctype="multipart/form-data">
            <label>
                <hr>
                Nombre : <input id="campo1" type="text" name="nombre">
                <br><br>
                Lugar nacimiento: <input id="campo2" type="text" name="lugarNac">
                <br><br>
                Nacimiento : <input id="campo3" type="Date" name="Nacimiento">
                <br><br>
                Fallecimiento : <input id="campo4" type="date" name="Fallecimiento">
                <br><br>
                Lugar Fallecieminto : <input id="campo5" type="text" name="LugarFac">
                <br><br>
                Descripción : <input id="campo6" type="text" name="descripcion">
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
