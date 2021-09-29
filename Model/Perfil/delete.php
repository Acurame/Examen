<?php
    include("../db.php");
    $id = $_GET['id'];
    $consult = "SELECT * FROM usuario WHERE idUsuario = $id";
    $result = mysqli_query($conexion,$consult);
    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_array($result);
        $state = $row['estado'];

        if($state == 1){
            if(isset($_GET['id'])){
                $consulta = "UPDATE usuario set estado = '3' WHERE idUsuario = $id";
                $error = mysqli_query($conexion,$consulta);
                
                header('Location: ../../views/Perfil.php');
            }
        }else if($state == 2 || $state == 3){
                $consulta = "UPDATE usuario set estado = '1' WHERE idUsuario = $id";
                $error = mysqli_query($conexion,$consulta);
                
                header('Location: ../../views/Perfil.php');
        }

    }
    
?>