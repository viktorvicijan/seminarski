<?php
session_start();
$con=mysqli_connect('localhost', 'root','','resenjainfo');
if (!$con)
    {
       die(mysqli_error("error"+$con));
    }

?>
