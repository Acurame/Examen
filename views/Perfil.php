<?php include("../Includes/header.php") ?>
<?php include("../Model/db.php"); ?>
<div class="home_content">
    <div class="create">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#Crear">
        Crear Perfil
        </button>
    
        <!-- Modal -->
        <div class="modal fade" id="Crear" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nuevo Perfil</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="../Model/Perfil/seve.php" method="post">
                        <div class="modal-body">
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

    <div class="py-3 p-3">
        <div class="table-responsive col-lg-10">
            <table class="table table-dark table-striped">
                <thead>
                    <th >ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM usuario";
                    $result = mysqli_query($conexion, $query);
                    while($row = mysqli_fetch_array($result))
                    { 
                        $estado = $row['estado'];
                        if($estado != NULL) 
                        {?>
                            <tr>
                                <td><?php echo $row['idUsuario'] ?></td>
                                <td><?php echo $row['nombreUsuario'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><?php echo $row['NombrePerfil'] ?></td>
                                <td><?php echo $row['Apellidos'] ?></td>
                                <td><?php echo $row['Telefono'] ?></td>
                                <td><?php echo $row['Correo'] ?></td>
                                <td>
                                <?php
                                    switch($row['estado'] ) {
                                        case 1:
                                            echo "Activo";
                                            break;
                                        case 2:
                                            echo "En Progreso";
                                            break;
                                        case 3:
                                            echo "Inactivo";
                                            break;
                                    }
                                    ?>
                                </td>
                                    <td>
                                        <a href="../Model/Perfil/edit.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-warning btn-lg"> Editar</a>
                                        <?php if($row['estado'] == 1){ ?>
                                            <a href="../Model/Perfil/delete.php?id=<?php echo $row['idUsuario'] ?>"  class="btn btn-danger btn-lg"> Desactivar</a>
                                        <?php }else if($row['estado']==3){ ?>
                                            <a href="../Model/Perfil/delete.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-success btn-lg"> Activar</a>
                                        <?php }?>
                                    </td>
                                </tr>
                        <?php 
                            }

                    } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<?php include("../Includes/fooder.php") ?>