<?php
include 'konekcija.php';
$ID=$_GET['stampaid'];
$sql="SELECT * FROM `resenjainf` WHERE ID=$ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$naziv=$row['naziv'];
$imeautora=$row['imeautora'];
$prezimeautora=$row['prezimeautora'];
$zvanjeautora=$row['zvanjeautora'];
$kategorija=$row['kategorija'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Štampa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  
<div class="container my-5">
<h4  class="text-center">PODACI O REŠENJU</h4>
<a> ID: <?php echo $ID;?></a></br>
<a> NAZIV: <?php echo $naziv;?></a></br>
<a> IME AUTORA: <?php echo $imeautora;?></a></br>
<a> PREZIME AUTORA: <?php echo $prezimeautora;?></a></br>
<a> ZVANJE AUTORA: <?php echo $zvanjeautora;?></a></br>
<a> KATEGORIJA: <?php echo $kategorija;?></a></br>
<div class="container my-5">
<footer>
<p class="text-center">AUTOR: Vicijan Viktor IT 34/20 </p>
</footer>
</body>
</html>
