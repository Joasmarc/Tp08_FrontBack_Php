<?php
require("conexion.php");
// seguridad
session_start();
if (empty($_REQUEST)) {
    header("location:index.php");
}
if (!isset($_SESSION['TP08'])) {
    header("location:index.php");
}
// Proceso del top
if (isset($_POST['top'])) {
    // organizar datos
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    if (isset($_POST['nuevo'])){
        $nuevo = 1;
    }else {
        $nuevo = 0;
    }
    $id = $_POST['id'];
    // query para actualizar datos
    $peticion = "UPDATE top SET nombre='$nombre', categoria='$categoria', nuevo='$nuevo' WHERE id='$id'";
    $resultado = mysqli_query($conexion, $peticion);
    // validar si tenemos img
    if (isset($_FILES['img'])) {
        // validar si llenamos las variables correctamente
        if (!empty($_FILES['img']['tmp_name']) && !empty($_FILES['img']['name'])) {
            $imgPreType = $_POST['imgPreType'];
            $imgTmp = $_FILES['img']['tmp_name'];
            $imgName = $_FILES['img']['name'];
            if ($_FILES['img']['type'] == "image/jpeg") {
                $imgType = "jpg";
            }else if ($_FILES['img']['type'] == "image/png") {
                $imgType = "png";
            }else{
                exit('Este formato no es admitido por el sistema.');
            }
            // $imgType = exif_imagetype($imgTmp);
            // if ($imgType == 2) {
            //     $imgType = "jpg";
            // }else if($imgType == 3){
            //     $imgType = "png";
            // }
            // query img
            // $imgType="jpg";
            $peticionImg = "UPDATE top SET img='$imgType' WHERE id='$id'";
            $resultadoImg = mysqli_query($conexion,$peticionImg);
            $dest = "../productos/top-".$id.".".$imgType;
            // copiar, ubicar y renombrar fichero
            copy($imgTmp,$imgName);
            rename($imgName,$dest);
            // eliminar img sobrante si no se reemplaza
            if ($imgPreType <> $imgType && !empty($imgPreType)){
                unlink("../productos/top-".$id.".".$imgPreType);
            }
        }
    }
    clearstatcache();
    // regresar a inicio
    echo '<script>
    alert("informacion Actualizada!");
    window.location = "panel.php";
    </script>';
}
// proceso de add articulo
if (isset($_POST['add'])) {
    // organizar datos
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    if (empty($_POST['mostrar'])){
        $mostrar = 0;
    }else {
        $mostrar = 1;
    }
    $imgTmp = $_FILES['img']['tmp_name'];
    $imgName = $_FILES['img']['name'];
    $imgId = uniqid($categoria);
    if ($_FILES['img']['type'] == "image/jpeg") {
        $imgType = "jpg";
    }else if ($_FILES['img']['type'] == "image/png") {
        $imgType = "png";
    }else{
        exit('Este formato no es admitido por el sistema.');
    }
    // $imgType = exif_imagetype($imgTmp);
    // if ($imgType == 2) {
    //     $imgType = "jpg";
    // }else if($imgType == 3){
    //     $imgType = "png";
    // }
    $imgRoute = "../productos/$categoria/$imgId.$imgType";
    // query
    $query = "INSERT INTO categorias(nombre, categoria, mostrar, imgRoute) VALUES('$nombre', '$categoria', '$mostrar', '$imgRoute')";
    $queryResult = mysqli_query($conexion, $query);
    // almacenar img en fichero
    copy($imgTmp,$imgName);
    rename($imgName,$imgRoute);
    // despachar
    header("location:categorias.php?categoria=$categoria");
}
mysqli_close($conexion);
?>