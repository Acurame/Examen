<?php
    $direciones = "../../img/";
    $ejemplo = "CuervoLunar" . "/";

    $archivo =$direciones . $ejemplo . basename($_FILES["img"]["name"]);

    move_uploaded_file($_FILES["img"]["tmp_name"], $archivo);
    if(isset($_POST['name'])){
        $name =  $_POST['name'];
        if($name != null){
            rename($archivo,$name);
        }
    }
    echo $archivo;
?>