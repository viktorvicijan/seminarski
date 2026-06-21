<?php
include 'konekcija.php';
include 'korisnikulogovan.php';

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Početna</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>
<body>
    <?php
    include 'navigacioni.php';
    ?>
    <?php
    if( !isset($_SESSION["korisnikime"])) {
      
      header('location:prijava.php');
   }
   ?>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> Dobro dosli <?php echo $_SESSION['korisnikime'];?>, Prijava uspesna</h4>
  <p>Za navigaciju izaberite jednu od opcija</p>
</div>

</body>