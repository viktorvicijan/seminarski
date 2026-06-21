<?php
include 'konekcija.php';
$ID=$_GET['obrisiid'];
$sql="DELETE FROM `resenjainf` WHERE ID=$ID";
$result=mysqli_query($con,$sql);
    if ($result) {
        header('location:prikaz.php');
        
    }else {
        die(mysqli_error($con));
    }

 
?>