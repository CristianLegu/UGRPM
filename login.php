<?php
if ($_POST['usuario'] == 'ugrpm' && $_POST['pass'] == 'Ugrpm2021') {
    session_start();
    $_SESSION['valueuser'] = 'SessionActive';
    header("Location: precios.php");

} else {
    echo '<script type="text/javascript">
    alert("Credenciales inválidas");
    window.location.href="index.php";
    </script>';
}
