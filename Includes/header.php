<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class="bi bi-moon-stars-fill"></i>
                <div class="logo_name">Galeria Lunar</div>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="/views/Gallery.php">
                        <i class="bi bi-camera-fill"></i>
                        <span class="links_name">Galeria</span>
                    </a>
                </li>
                <li>
                    <a href="/views/upimg.php">
                        <i class="bi bi-arrow-bar-up"></i>
                        <span class="links_name">Subir Imagen</span>
                    </a>
                </li>
                <li>
                    <a href="/views/Perfil.php">
                        <i class="bi bi-person-circle"></i>
                        <span class="links_name">Perfil</span>
                    </a>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="/img/Admin.png" alt="">
                        <div class="name_job">
                            <?php session_start(); ?>
                            <div class="name"><?php echo $_SESSION["usuario"] ?></div>
                            <div class="job">Administrador</div>
                        </div>
                    </div>
                    <i class="bi bi-box-arrow-right" id="log_out"></i>
                </div>
            </div>
        </div>
    </div>