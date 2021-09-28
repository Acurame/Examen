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
?>

<?php include("../../Includes/header.php") ?>
    <div class="home_content">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card card-body">
                        <form action="" method="post">
                                <div class="form-group p-3">
                                    <input type="text" name="user" class="form-control" placeholder="Usuario" autofocus></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="password" name="passwd" class="form-control" placeholder="Pasword" autofocus></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="password" name="passwd2" class="form-control" placeholder="Pasword" autofocus></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" autofocus></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="text" name="lastname" class="form-control" placeholder="apellidos" autofocus></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="text" name="telephone" class="form-control" placeholder="Telefono" autofocus></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="text" name="mail" class="form-control" placeholder="Correo" autofocus></input>
                                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Canselar</button>
                            <button type="submit" name="save" class="btn btn-primary">Crear</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("../../Includes/fooder.php") ?>