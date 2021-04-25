<?php
// seguridad
session_start();
if (!isset($_SESSION['TP08'])) {
    header("location:index.php");
}

require("conexion.php");
$queryMensajes = "SELECT * FROM mensajeria";
$queryMensajesResult = mysqli_query($conexion, $queryMensajes);



include("include/header.php");
$categoria = "Mensajeria";
include("include/nav.php");
?>

<!-- tabla de mensajes -->
<div class="container my-2">
    <div class="row">
        <div class="col-md-12 text-center">
            <table class="table-hover text-center">
                <thead class="border">
                    <tr>
                        <th scope="col">Contacto</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Mensaje</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($queryMensajesResult)){ ?>
                    <tr class="border">
                        <th class="border p-2" scope="row"><?= $row['contacto'] ?></th>
                        <td class="border p-2"><?= $row['motivo'] ?></td>
                        <td class="border p-2"><?= $row['mensaje'] ?></td>
                        <td class="border p-2"><a href="destruir.php?delMensaje=<?= $row['id'] ?>"><button class="btn btn-danger"><span class="icon-bin"></span></button></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 
include("include/footer.php"); 
mysqli_close($conexion);
?>