<?php
    $direciones = "../../img/";
    session_start();
    $nameimg = basename($_FILES["img"]["name"]);
    $id =$_SESSION['id'];
    $archivo = $direciones . $_SESSION["usuario"] . "/" . $nameimg;
    include("../db.php");
     
    $consult = "INSERT INTO imagenes(idUsuario,nombreImagen) VALUES ('$id','$nameimg')";
    $error = mysqli_query($conexion,$consult);
    move_uploaded_file($_FILES["img"]["tmp_name"], $archivo);
    
    header("Location: ../../views/upimg.php");
?>