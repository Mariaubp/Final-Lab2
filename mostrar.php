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

        <h1 class="logo">Mostrar <span>contactos</span></h1>
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
     
              
            <div class="tabla">
            <?php
            echo '<h2>Contactos Guardados</h2>';
            echo "<br>";
            ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Barrio</th>
                    <th>Motivo</th>
                    <th>Sexo</th>
                </tr>
                    <?php
                        $consulta = "SELECT * FROM datos";  //selecciona todos los datos de la tabla datos, esto lo podemos ver desde phpMyAdmin 
                        $ejecutarConsulta = mysqli_query($enlace, $consulta);  //ejecuta eso
                        //vemos la cant de filas y columnas para ver q no esten vacias y cuantos datos hay
                        $verFilas = mysqli_num_rows($ejecutarConsulta);
                        $fila = mysqli_fetch_array($ejecutarConsulta);  //guarda en un arreglo todos esos datos

                        if(!$ejecutarConsulta){
                            echo"Error en la consulta";
                        }else{
                            //si no hay errores
                            if($verFilas<1){   // si no hay datos, si la cant de filas es menor a 1, es porq  no hay
                                echo"<tr><td>Sin registros</td></tr>";
                            }else{ //impreme todos los valores q tenga el arreglo
                                for($i=0; $i<=$fila; $i++){
                                    echo'
                                        <tr>
                                            <td>'.$fila[0].'</td>
                                            <td>'.$fila[1].'</td>
                                            <td>'.$fila[2].'</td>
                                            <td>'.$fila[3].'</td>
                                            <td>'.$fila[4].'</td>
                                            <td>'.$fila[5].'</td>
                                            <td>'.$fila[6].'</td>
                                            <td>'.$fila[7].'</td>                                           
                                        </tr>
                                    ';
                                    $fila = mysqli_fetch_array($ejecutarConsulta);  // con esto cortamos el bucle

                                }

                            }
                        }


                    ?>
                        
                        
                
                
            </table>
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