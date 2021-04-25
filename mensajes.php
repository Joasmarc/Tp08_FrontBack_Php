<?php
require ("admin/conexion.php");
// proceso de insertar mensaje lista de precios
if (isset($_POST['lista'])) {
    $dato = $_POST['dato'];
    $datoEscape = mysqli_real_escape_string($conexion, $dato);
    $motivo = $_POST['motivo'];

    $querySolicitud = "INSERT INTO mensajeria(contacto, motivo) VALUES('$datoEscape', '$motivo')";
    $querySolicitudResult = mysqli_query($conexion, $querySolicitud);
    header("location:mensaje%20de%20contacto.php?contacto=".$dato);
}
// proceso insertar pregunta de producto
if (isset($_POST['pregunta'])) {
    $datoContacto = $_POST['contacto'];
    $datoContactoEscape = mysqli_real_escape_string($conexion, $datoContacto);
    $motivoPregunta = $_POST['motivo'];
    // peticion si existen 2 datos
    $queryPregunta = "INSERT INTO mensajeria(contacto, motivo) VALUES('$datoContactoEscape', '$motivoPregunta')";
    // peticion si existen 3 datos
    if (!empty($_POST['comentario'])) {
        $comentario = $_POST['comentario'];
        $comentarioEscape = mysqli_real_escape_string($conexion, $comentario);
        $queryPregunta = "INSERT INTO mensajeria(contacto, motivo, mensaje) VALUES('$datoContacto', '$motivoPregunta', '$comentarioEscape')";
    }
    $queryPreguntaResult = mysqli_query($conexion, $queryPregunta);
    header("location:mensaje%20de%20contacto.php?dato=".$datoContacto);
}
if (empty($_REQUEST)) {
    header("location:index.php");
}
mysqli_close($conexion);
?>