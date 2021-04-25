<?php
require("conexion.php");

// sistema de seguridad
session_start();
if (!isset($_SESSION['TP08'])) {
    header("location:index.php");
}

// categoria seleccionada
if(isset($_GET['categoria'])){
    $categoria = $_GET['categoria'];
    // peticion Segun categoria
    if ($categoria == "Todos") {
        $query = "SELECT * FROM categorias";
    }else {
        $query = "SELECT * FROM categorias WHERE categoria='$categoria'";
    }
    // $resultado de peticion
    $queryResult = mysqli_query($conexion, $query);
}

include("include/header.php");
include("include/nav.php");
?>

<!-- contenerdor del agregador -->
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-md-4 border text-center bg-secondary">
            <!-- card prod add -->
            <!-- img -->
            <img class="w-25" src=""  alt="">
            <form action="procesar.php" method="post" enctype="multipart/form-data">
                <!-- img form -->
                <input type="file" name="img" class="my-2 w-75" required>
                <!-- nombre -->
                <input type="text" name="nombre" class="form-control form-control-lg" value="" placeholder="Nombre Producto" required>
                <!-- lista -->
                <div class="col-auto my-1">
                    <select name="categoria" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                        <option selected ><?= $categoria ?></option>
                        <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                        <option value="Accesorios Mascotas">Accesorios Mascotas</option>
                        <option value="Acuarios">Acuarios</option>
                        <option value="Ferreteria">Ferreteria</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Articulos Del Hogar">Articulos Del Hogar</option>
                    </select>
                </div>
                <!-- type para borrar img previa -->
                <!-- <input type="text" name="imgPreType" value="" hidden> -->
                <!-- submit -->
                <button type="submit" name="add" class="btn btn-success my-2"><span class="icon-plus"></span><h5>Cargar</h5></button>
            </form>
        </div>
    </div>
</div>
<!-- contenedor del catalogo -->
<div class="container my-2">
    <!-- fila de productos -->
    <div class="row my-2">
<!-- cargar productos por fila -->
<?php
$contador = 0;
while ($row = mysqli_fetch_array($queryResult)) {
    // validar que sean 4 por fila
    if ($contador < 4) {
        echo" 
        <div class='col-md-3 border text-center'>
        <!-- card prod add -->
        <!-- img -->
        <img class='w-25 mt-2' src='".$row['imgRoute']."' alt=''>
        <!-- nombre -->
        <h3 class='text-uppercase'>".$row['nombre']."</h3>
        <!-- categoria -->
        <h6 class='text-uppercase my-1'>".$row['categoria']."</h6>
        <a href=''><button type='' name='add' class='btn btn-warning btn-lg my-2'><span class='icon-pencil'></span></button></a>
        <a href='destruir.php?delId=".$row['id']."&categoria=".$categoria."'><button type='' name='add' class='btn btn-danger btn-lg my-2'><span class='icon-bin'></span></button></a>
        <!-- /card prod add -->
        </div> ";
        $contador += 1;
    // si son mas de 4 abrir nueva fila
    }else {
        // abrir nueva fila
        echo "</div>
        <div class='row my-2'>";
        // seguir insertando datos en nueva fila
        echo" 
        <div class='col-md-3 border text-center'>
        <!-- card prod add -->
        <!-- img -->
        <img class='w-25 mt-2' src='".$row['imgRoute']."' alt=''>
        <!-- nombre -->
        <h3 class='text-uppercase'>".$row['nombre']."</h3>
        <!-- categoria -->
        <h6 class='text-uppercase my-1'>".$row['categoria']."</h6>
        <button type='' name='add' class='btn btn-warning btn-lg my-2'><span class='icon-pencil'></span></button>
        <button type='' name='add' class='btn btn-danger btn-lg my-2'><span class='icon-bin'></span></button>
        <!-- /card prod add -->
        </div> ";
        $contador = 1;
    }
}
?>
    </div>
</div>

<?php include("include/footer.php"); ?>