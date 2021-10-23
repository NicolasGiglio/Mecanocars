<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        
        ?>
        <form action="cargaPalabras.php" method="POST">
        Carga una palabra: <input type="text" name="palabra" size="20">
        <br>
        <br>
        cantidad de silabas <input type="number" value="5" name="silaba" size="2">
        <br>
        <input type="submit" value="Enviar"> 
        </form>
        <?php
        if(!$_POST){

        }else{
        $servidor = 'localhost';
        $usuario = 'root';
        $contra = '';
        $BD = 'mecanoletras';
    
        $conexion = new mysqli($servidor, $usuario, $contra, $BD);
        $pal=$_POST["palabra"];
        $sil=$_POST["silaba"];
        $sql = "INSERT INTO `palabras` (`id_palabra`, `palabra`, `cant_silabas`) VALUES (NULL, '$pal', '$sil');";
        $resultado = mysqli_query($conexion, $sql);
        }
        /*}else{
   	        echo "<br>la palabra es: " . $_POST["palabra"]; 
   	        echo "<br>cantidad de silavas: " . $_POST["silaba"]; 
        } */
        ?>
    </body>
</html>