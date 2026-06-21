<?php
session_start();
if (session_destroy()) {
    header("location:index.php");
    $_SESSION['ulogovan'] = 0;
}


?>