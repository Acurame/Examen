<?php include("../Includes/header.php") ?>

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
                    <form action="" method="post">
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
                            <button type="sumit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive col-lg-12">
        <table class="table table-dark table-striped">
            <thead>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Correo</th>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

</div>

<?php include("../Includes/fooder.php") ?>