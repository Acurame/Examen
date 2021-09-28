<?php

include("../db.php");

if(isset($_POST['save'])){
    $user = $_POST['user'];
    $password = $_POST['passwd'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];

    if($state != null){
    $consult = "INSERT INTO usuario(nombreUsuario, password, imagenUsuario, NombrePerfil, Apellidos, Telefono, Correo, estado) VALUES ('$user','$password','$name','$lastname','$telephone','$mail','2')";
    $error = mysqli_query($conexion,$consult);

        if(!$error){
            die("Error");
        }

    }
    echo $consult;
}
?>