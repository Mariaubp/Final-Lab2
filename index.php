<?php
    //abro el codigo php
    //nos conectamos al servidor
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="prueba4";

    //enlace para poder conectranos al sevidor y nos pide los parametros
    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }
    echo "Ingrese los datos del Nuevo Contacto...";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FloBiCo - UBP - Ing Informatica - Lab II</title>
    <link rel="stylesheet" href="main.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="contact-form">

        <h1 class="logo">Agregar <span>contacto</span></h1>
        <div class="contact-form">
                <form action="">
                    <p class="block">
                         <button>
                        <a href="Menu.html" class="button">Menu</a>
                        </button>
                    </p>
                   </form>
            </div>

        <div class="contact-wrapper animated bounceInUp">
        
                <form action="#" class="formulario" id="formulario" name="formulario" method="POST">
                        <p>                
                        <input type="text" name="nombre" placeholder="Nombre"></p>
                        <p> 
                        <input type="text" name="apellido" placeholder="Apellido"></p>
                        <p> 
                        <input type="text" name="email" placeholder="Email"></p>
                        <p> 
                        <input type="text" name="telefono" placeholder="Telefono"></p>
                        <p> 
                        <input type="text" name="barrio" placeholder="Barrio"></p>
                        <p> 
                        <input type="text" name="motivo" placeholder="Motivo"></p>

                    <?php
                    echo "Escoja una opcion";
                    ?>
                    </p> 
                    <input type="radio" name="sexo" id="hombre" value="hombre">                    <label class="label-radio hombre" for="hombre">Hombre</label>
                    
                    <input type="radio" name="sexo" id="mujer" value="mujer">                    <label class="label-radio mujer" for="mujer">Mujer</label>
                    <p>
                    <input type="submit" class="btn" name="registrarse" value="Guardar">
                </form>
        </div>

            <script src="formulario.js"></script>
    </body>
</html>

<?php
    if(isset($_POST['registrarse'])){
        //esto quiere decir q se presiono el boton de guardar por lo tanto debo guardar los datos, mediante el metodo POST
        //se guardan los datos
        $id= rand(1,99);
        $nombre =$_POST["nombre"];
        $apellido =$_POST["apellido"];
        $email=$_POST["email"];
        $telefono=$_POST["telefono"];
        $barrio=$_POST["barrio"];
        $motivo=$_POST["motivo"];
        $sexo=$_POST["sexo"];

        $insertarDatos = "INSERT INTO datos VALUES('$id',
                                                    '$nombre',
                                                    '$apellido',                                                   
                                                    '$email',
                                                    '$telefono',
                                                    '$barrio',
                                                    '$motivo',                                                          
                                                    '$sexo')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);  // que se guarde en la tabla datos de la base de dato
        //se guardan los datos cargados en la tabla
        //le paso el enlace que era la conexion con el servidor

        if(!$ejecutarInsertar){
            echo"Error En la linea de sql";
        }
    }
?>