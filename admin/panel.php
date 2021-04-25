<?php
    // conexion con db
    require("conexion.php");
    // sistema de seguridad
    session_start();
    if (!isset($_SESSION['TP08'])) {
        header("location:index.php");
    }
    // peticion
    $peticion = "SELECT * FROM top";
    $resultado = mysqli_query($conexion,$peticion);
    // conversion de resultado en array
    while ($row = mysqli_fetch_array($resultado)) {
        $id[] = $row['id'];
        $name[] = $row['nombre'];
        $categoria2[] = $row['categoria'];
        $imgType[] = $row['img'];
        if ($row['nuevo']==1) {
            $nuevo[] = "checked";
        }else{
            $nuevo[] = "";
        }
    }
    // variable solicitada en cateorias y top
    $categoria = "Categoria";
    include("include/header.php");
    include("include/nav.php");
?>
<!-- contenedor titulo -->
<div class="container my-3">
    <div class="row text-center">
        <div class="col-md-12">
            <h1>
            <span class="icon-rocket"></span> Productos Destacados
            </h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-3">
        <!-- card top 1 -->
        <div class="col-md-6 border text-center">
            <!-- img -->
            <img class="w-25" src="../productos/top-1.<?= $imgType[0] ?>"  alt="">
            <form action="procesar.php" method="post" enctype="multipart/form-data">
                <!-- img form -->
                <input type="file" name="img" class="my-2 w-75">
                <!-- nombre -->
                <input type="text" name="nombre" class="form-control form-control-lg" value="<?= $name[0] ?>" placeholder="Nombre Producto" required>
                <!-- lista -->
                <div class="col-auto my-1">
                    <select name="categoria" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                        <option selected ><?= $categoria2[0] ?></option>
                        <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                        <option value="Accesorios Mascotas">Accesorios Mascotas</option>
                        <option value="Acuarios">Acuarios</option>
                        <option value="Ferreteria">Ferreteria</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Articulos Personales">Articulos Personales</option>
                    </select>
                </div>
                <!-- switch -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" value="si" name="nuevo" class="custom-control-input" id="customSwitch4" <?= $nuevo[0] ?>>
                    <label class="custom-control-label" for="customSwitch4">Nuevo</label>
                </div>
                <!-- type para borrar img previa -->
                <input type="text" name="imgPreType" value="<?= $imgType[0] ?>" hidden>
                <!-- id -->
                <input type="text" name="id" value="1" hidden>
                <!-- submit -->
                <button type="submit" name="top" class="btn btn-success my-2"><h5>Cargar</h5></button>
            </form>
        </div>
        <!-- /card top 1 -->
        <!-- card top 2 -->
        <div class="col-md-6 border text-center">
            <!-- img -->
            <img class="w-25" src="../productos/top-2.<?= $imgType[1] ?>"  alt="">
            <form action="procesar.php" method="post" enctype="multipart/form-data">
                <!-- img -->
                <input type="file" name="img" class="my-2 w-75" >
                <!-- nombre -->
                <input type="text" name="nombre" class="form-control form-control-lg" value="<?= $name[1] ?>" placeholder="Nombre Producto" required>
                <!-- lista -->
                <div class="col-auto my-1">
                    <select name="categoria" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                        <option selected ><?= $categoria2[1] ?></option>
                        <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                        <option value="Accesorios Mascotas">Accesorios Mascotas</option>
                        <option value="Acuarios">Acuarios</option>
                        <option value="Ferreteria">Ferreteria</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Articulos Personales">Articulos Personales</option>
                    </select>
                </div>
                <!-- switch -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" value="si" name="nuevo" class="custom-control-input" id="customSwitch5" <?= $nuevo[1] ?>>
                    <label class="custom-control-label" for="customSwitch5">Nuevo</label>
                </div>
                <!-- type para borrar img previa -->
                <input type="text" name="imgPreType" value="<?= $imgType[1] ?>" hidden>
                <!-- id -->
                <input type="text" name="id" value="2" hidden>
                <!-- submit -->
                <button type="submit" name="top" class="btn btn-success my-2"><h5>Cargar</h5></button>
            </form>
        </div>
        <!-- /card top 2 -->
    </div>
    <div class="row my-3">
        <!-- card top 3 -->
        <div class="col-md-4 border text-center">
            <!-- img -->
            <img class="w-25" src="../productos/top-3.<?= $imgType[2] ?>" alt="">
            <form action="procesar.php" method="post" enctype="multipart/form-data">
                <!-- img -->
                <input type="file" name="img" class="my-2 w-75" >
                <!-- nombre -->
                <input type="text" name="nombre" class="form-control form-control-lg" value="<?= $name[2] ?>" placeholder="Nombre Producto" required>
                <!-- lista -->
                <div class="col-auto my-1">
                    <select name="categoria" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                        <option selected ><?= $categoria2[2] ?></option>
                        <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                        <option value="Accesorios Mascotas">Accesorios Mascotas</option>
                        <option value="Acuarios">Acuarios</option>
                        <option value="Ferreteria">Ferreteria</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Articulos Personales">Articulos Personales</option>
                    </select>
                </div>
                <!-- switch -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" value="si" name="nuevo" class="custom-control-input" id="customSwitch1" <?= $nuevo[2] ?>>
                    <label class="custom-control-label" for="customSwitch1">Nuevo</label>
                </div>
                <!-- type para borrar img previa -->
                <input type="text" name="imgPreType" value="<?= $imgType[2] ?>" hidden>
                <!-- id -->
                <input type="text" name="id" value="3" hidden>
                <!-- submit -->
                <button type="submit" name="top" class="btn btn-success my-2"><h5>Cargar</h5></button>
            </form>
        </div>
        <!-- /card top 3 -->
        <!-- card top 4 -->
        <div class="col-md-4 border text-center">
            <!-- img -->
            <img class="w-25" src="../productos/top-4.<?= $imgType[3] ?>"  alt="">
            <form action="procesar.php" method="post" enctype="multipart/form-data">
                <!-- img -->
                <input type="file" name="img" class="my-2 w-75" >
                <!-- nombre -->
                <input type="text" name="nombre" class="form-control form-control-lg" value="<?= $name[3] ?>" placeholder="Nombre Producto" required>
                <!-- lista -->
                <div class="col-auto my-1">
                    <select name="categoria" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                        <option selected ><?= $categoria2[3] ?></option>
                        <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                        <option value="Accesorios Mascotas">Accesorios Mascotas</option>
                        <option value="Acuarios">Acuarios</option>
                        <option value="Ferreteria">Ferreteria</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Articulos Personales">Articulos Personales</option>
                    </select>
                </div>
                <!-- switch -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" value="si" name="nuevo" class="custom-control-input" id="customSwitch2" <?= $nuevo[3] ?>>
                    <label class="custom-control-label" for="customSwitch2">Nuevo</label>
                </div>
                <!-- type para borrar img previa -->
                <input type="text" name="imgPreType" value="<?= $imgType[3] ?>" hidden>
                <!-- id -->
                <input type="text" name="id" value="4" hidden>
                <!-- submit -->
                <button type="submit" name="top" class="btn btn-success my-2"><h5>Cargar</h5></button>
            </form>
        </div>
        <!-- /card top 4 -->
        <!-- card top 5 -->
        <div class="col-md-4 border text-center">
            <!-- img -->
            <img class="w-25" src="../productos/top-5.<?= $imgType[4] ?>"  alt="">
            <form action="procesar.php" method="post" enctype="multipart/form-data">
                <!-- img -->
                <input type="file" name="img" class="my-2 w-75" >
                <!-- nombre -->
                <input type="text" name="nombre" class="form-control form-control-lg" value="<?= $name[4] ?>" placeholder="Nombre Producto" required>
                <!-- lista -->
                <div class="col-auto my-1">
                    <select name="categoria" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                        <option selected ><?= $categoria2[4] ?></option>
                        <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                        <option value="Accesorios Mascotas">Accesorios Mascotas</option>
                        <option value="Acuarios">Acuarios</option>
                        <option value="Ferreteria">Ferreteria</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Articulos Personales">Articulos Personales</option>
                    </select>
                </div>
                <!-- switch -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" value="si" name="nuevo" class="custom-control-input" id="customSwitch3" <?= $nuevo[4] ?>>
                    <label class="custom-control-label" for="customSwitch3">Nuevo</label>
                </div>
                <!-- type para borrar img previa -->
                <input type="text" name="imgPreType" value="<?= $imgType[4] ?>" hidden>
                <!-- id -->
                <input type="text" name="id" value="5" hidden>
                <!-- submit -->
                <button type="submit" name="top" class="btn btn-success my-2"><h5>Cargar</h5></button>
            </form>
        </div>
        <!-- /card top 5 -->
    </div>
</div>

<?php
include("include/footer.php");
?>