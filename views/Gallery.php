<?php include("../Model/db.php"); ?>
<?php include("../Includes/header.php") ?>

    <div class="home_content">
        <div class="row row-cols-1 row-cols-md-2 g-4 px-4">
            <?php 
                
                $id = $_SESSION["id"];
                $consult = "SELECT * FROM imagenes WHERE idUsuario = $id";
                $result = mysqli_query($conexion,$consult);
                while($row = mysqli_fetch_array($result)){?>
                    
                    <div class="card" style="width: 18rem;">
                        <img src="/img/<?php echo $_SESSION["usuario"] ."/". $row['nombreImagen'] ?>" class="card-img-top " alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nombreImagen'] ?></h5>
                        </div>
                    </div>
        
                <?php } ?>
        </div>
    </div>
<?php include("../Includes/fooder.php") ?>