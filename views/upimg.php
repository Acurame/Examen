<?php include("../Includes/header.php") ?>
<div class="home_content">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card card-body">
                        <form action="/Model/upImg/datosImg.php" method="post" enctype="multipart/form-data">
                                <div class="form-group p-3">
                                    <input type="text" name="user" class="form-control" placeholder="Nombre" autofocus></input>
                                </div>
                                <div class="form-group p-3">
                                    <input type="file" name="img" class="form-control" autofocus ></input>
                                </div>
                                
                        <div class="modal-footer">
                            <button type="submit" name="save" class="btn btn-success">Subir</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("../Includes/fooder.php") ?>