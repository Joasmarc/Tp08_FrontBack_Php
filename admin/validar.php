<?php
session_start();
// validar entrada
if (isset($_POST['login'])) {
    $user0 = "antonella";
    $pass0 = "valle";
    
    $user1 = $_POST['usuario'];
    $pass1 = $_POST['contrasena'];
    if ($user1 === $user0 && $pass1 === $pass0) {
        $_SESSION['TP08'] = "Todo periquito 08";
        header("location:panel.php");
    }else {
        echo '<script>
        alert("Contraseña Incorrecta");
        window.location = "index.php";
        </script>';
    }

}
// negar entrada por url sin ingresar contrasena
if (isset($_SESSION['TP08'])) {
    header("location:panel.php");
}

?>