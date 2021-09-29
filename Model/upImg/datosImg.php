<?php
    $direciones = "../../img/";
    session_start();
    $nameimg = basename($_FILES["img"]["name"]);
    $id =$_SESSION['id'];
    $archivo = $direciones . $_SESSION["usuario"] . "/" . $nameimg;
    include("../db.php");
     
    if($_POST['name'] == null){
        $consult = "INSERT INTO imagenes(idUsuario,nombreImagen) VALUES ('$id','$nameimg')";
        $error = mysqli_query($conexion,$consult);
        
    }
    move_uploaded_file($_FILES["img"]["tmp_name"], $archivo);
    
    if(isset($_POST['name'])){
            $name = $_POST['name'];
        if($name != null){
            $consult = "INSERT INTO imagenes(idUsuario,nombreImagen) VALUES ('$id','$name')";
            $error = mysqli_query($conexion,$consult);
            $namerenom = $direciones . $_SESSION["usuario"]  . "/" . $name;
            rename ($archivo, $namerenom);
        }
    }
    header("Location: ../../views/upimg.php");
?>