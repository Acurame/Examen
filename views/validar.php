
<?php
//include('db.php');
include("../Model/db.php"); 

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


//$conexion=mysqli_connect("localhost","root","","examen");


$consulta="SELECT*FROM usuario WHERE nombreUsuario = '$usuario' and password = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:Login.php");

}else{
    ?>
    <?php include("../index.php"); ?>
    <script src="/sweetAlert.js"></script>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
