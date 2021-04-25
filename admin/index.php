<?php 
// seguridad
session_start();
if (isset($_SESSION['TP08'])) {
    header("location:panel.php");
}
include("include/header.php");
?>

<div class="container">
    <div class="row">
        <div class="col text-center my-5">
            <img src="img/logo.png" alt="logo TP08">
        </div>
    </div>
    
    <div class="row justify-content-center text-center">
        <div class="col-md-4">
            <form action="validar.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1"><h3>Usuario</h3></label>
                    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="Introducir Usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><h3>Contraseña</h3></label>
                    <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <button type="submit" name="login" class="btn btn-primary"><h5>Ingresar</h5></button>
            </form>
        </div>
    </div>
</div>

<?php include("include/footer.php") ?>