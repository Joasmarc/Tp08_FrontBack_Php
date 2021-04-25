<?php
require("conexion.php");
// sistema de seguridad
session_start();
if (!isset($_SESSION['TP08'])) {
    header("location:index.php");
}

// si existe peticion de salida
if (isset($_GET['exit'])) {
    $exit = $_GET['exit'];
    if ($exit == 1) {
        session_start();
        session_destroy();
        header("location:index.php");
    }
}
// si existe peticion de eliminar
if (isset($_GET['delId']) && isset($_GET['categoria'])) {
    $delId = $_GET['delId'];
    $categoria = $_GET['categoria'];
    // consultar route y eliminar img
    $querySelectImg = "SELECT imgRoute FROM categorias WHERE id='$delId'";
    $querySelectImgResult = mysqli_query($conexion, $querySelectImg);
    $imgDel = mysqli_fetch_array($querySelectImgResult);
    unlink($imgDel[0]);
    // eliminar registro total de la base de datos
    $queryDel = "DELETE FROM categorias WHERE id ='$delId'";
    $queryDelResult = mysqli_query($conexion, $queryDel);
    header("location:categorias.php?categoria=".$categoria);
}
// si existe peticion de eliminar mensaje
if (isset($_GET['delMensaje'])) {
    $delMensaje = $_GET['delMensaje'];
    $queryDelMensaje = "DELETE FROM mensajeria WHERE id = '$delMensaje'";
    $queryDelMensajeResult = mysqli_query($conexion,$queryDelMensaje);
    header("location:mensajeria.php");
}
mysqli_close($conexion);
?>