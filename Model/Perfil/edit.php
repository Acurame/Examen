<?php include("../db.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consult = "SELECT * FROM usuario WHERE idUsuario = $id";
    $result = mysqli_query($conexion,$consult);
    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_array($result);
        $user = $row['nombreUsuario'];
        $password = $row['password'];
        $name = $row['NombrePerfil'];
        $lastname = $row['Apellidos'];
        $telephone = $row['Telefono'];
        $mail = $row['Correo'];
    }
}
include("../db.php");

if(isset($_POST['save'])){
    $user = $_POST['user'];
    $password = $_POST['passwd'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];

   
    $consult = "UPDATE usuario set  nombreUsuario = '$user', password = '$password', NombrePerfil = '$name', Apellidos = '$lastname', Telefono = '$telephone', Correo = '$mail' WHERE idUsuario = $id";
    $error = mysqli_query($conexion,$consult);
    header("Location: ../../views/Perfil.php");
}

?>

<?php include("../../Includes/header.php") ?>
    <div class="home_content">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card card-body">
                        <form action="edit.php?id=<?php echo $_GET['id'];?>" method="post">
                                <div class="form-group p-3">
                                    <input type="text" name="user" class="form-control" placeholder="Usuario" autofocus value="<?php echo $user ?>"></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="password" name="passwd" class="form-control" placeholder="Pasword" autofocus value="<?php echo $password ?>"></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="password" name="passwd2" class="form-control" placeholder="Pasword" autofocus value="<?php echo $password ?>"></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" autofocus value="<?php echo $name ?>"></input>
                                </div> 
                                <div class="form-group p-3">
                                    <input type="text" name="lastname" class="form-control" placeholder="apellidos" autofocus value="<?php echo $lastname ?>"></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="text" name="telephone" class="form-control" placeholder="Telefono" autofocus value="<?php echo $telephone ?>"></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="text" name="mail" class="form-control" placeholder="Correo" autofocus value="<?php echo $mail ?>"></input>
                                </div>
                        <div class="modal-footer">
                            <button type="submit" name="save" class="btn btn-success">Editar</button>
                            <a href="/views/Perfil.php" class="btn btn-danger"> Cancelar </a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("../../Includes/fooder.php") ?>