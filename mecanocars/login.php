
<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contra = '';
    $BD = 'mecanocars';

    $conexion = new mysqli($servidor, $usuario, $contra, $BD);

    $uss = $_GET['uss'];
    $pss = $_GET['pss'];

    if (!$conexion) 
    {
        echo "error";
    } else {
        $user=[];
        $sql = "SELECT * FROM logueo WHERE nombre_usuario LIKE '$uss' AND contraseña LIKE '$pss'";
        $resultado = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($resultado)>0) {
           while ($row=mysqli_fetch_assoc($resultado))
           {
                echo $row['nombre_usuario']."|".$row['contraseña']."|".$row['email'];
           }
        } else {
            echo "401";
        }
    }

?>