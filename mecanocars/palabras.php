<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contra = '';
    $BD = 'mecanoletras';

    $conexion = new mysqli($servidor, $usuario, $contra, $BD);

    $dificultad=$_GET['difi'];

    if (!$conexion) 
    {
        echo "error";
    } else {
        $user=[];
        if($dificultad == "facil"){
            $sql = "SELECT palabra FROM `palabras` WHERE `cant_silabas` = 1";
        } elseif ($dificultad== "medio") { 
            $sql = "SELECT palabra FROM `palabras` WHERE `cant_silabas` = 2";
        }elseif ($dificultad== "dificil") { 
            $sql = "SELECT palabra FROM `palabras` WHERE `cant_silabas` = 3";
        }elseif ($dificultad== "experto") { 
            $sql = "SELECT palabra FROM `palabras` WHERE `cant_silabas` = 4";
        }elseif ($dificultad== "mecano") { 
            $sql = "SELECT palabra FROM `palabras` WHERE `cant_silabas` < 4";
        }

        $resultado = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($resultado)>0) {
           while ($row=mysqli_fetch_assoc($resultado))
           {
                echo $row['palabra']."|";
           }
        } else {
            echo "401";
        }
    }

?>