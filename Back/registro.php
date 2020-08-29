<html>
    <head>
        
        <meta charset="utf-8">
        <title>Administradores</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            function verificar(){
                var name = document.formulario.nombre.value;
                
                if (name == ""){
                    alert("campo incompleto")
                    return false;
                }
                else{
                return true;}
                
                
            } //Finaliza función de verificar
            
            $(document).ready(function() { /* Se abre funcion cuando no hay fallas en la pag*/
                $("#boton").on('click', function(){ /*Se abre una función cuando se da click en el boton*/
                if(verificar()){ /*Se abre un if para ver si se cumplio la función verificar*/
                    var form= $('#formulario')[0]; /*Se agrega todo lo que esta en el formulario en la variable form*/
                    var data = new FormData(form); /* Se crea un nuevo formulario de datos en dato y guarda todo lo que tenga en form*/
                    
                    $.ajax({ /*Se abre ajax para hacer intercambio de info*/
                        url:
                        'reg_administradores.php', /* En este url se manda la información*/
                        type: 'POST', /*POST es para enviar informacion y GET es para recibir información*/
                        dataType: 'text', /* tipo de dato*/
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                            contentType: false,
                            cache: false,
                            success: function(respuesta) { //Se completo nuestro registro
                                if (respuesta == 0) { 
                                    alert('Registro Incorrecto');
                                } else { /* sí es correcto*/
                                    alert('Registro completo')
                                }
                            } 
                    });//Termina ajax
                }//Terminar if
            });
                            
            });
            
        </script>
    </head>
    
    <center>
    <body>
        
        <h1>Registro</h1>
        <form id="formulario" name="formulario" action="reg_administradores.php" enctype="multipart/form-data">
            Nombre: <input type="text" id="nombre" name="nombre">
            <br><br>
            Correo electronico: <input type="text" id="email" name="email">
            <br><br>
            Contraseña: <input type="password" id="password" name="password">
            <br><br>
            Fecha de nacimento: <input type="date" id="nacimiento" name="nacimiento">
            <br><br>
            <input class="boton" type="button" onclick="verificar()" id="registrar" value="Registrar!">
        </form>
    </body>
    </center>
</html>
