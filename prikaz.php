<?php
include 'konekcija.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prikaz podataka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <?php
  include 'navigacioni.php';
  ?>
  <body>

  

    <div class="container my-2">
      <a>Stampa tabele svih resenja</a>
<a target="_blank" href="stampasve.php" class="btn btn-info">Stampa</a>
       <table class="table table-dark table-striped">
        <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Naziv resenja</th>
      <th scope="col">Ime autora</th>
      <th scope="col">Prezime autora</th>
      <th scope="col">Zvanje</th>
      <th scope="col">Kategorija</th>
      <th scope="col">Opcije izmene</th>
      <th scope="col">Opcije brisanja</th>
      <th scope="col">Opcije stampe</th>
    </tr>
  </thead>
  <tbody>
<?php

// select query
$sql="SELECT * FROM `resenjainf`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
$ID=$row['ID'];
$naziv=$row['naziv'];
$imeautora=$row['imeautora'];
$prezimeautora=$row['prezimeautora'];
$zvanjeautora=$row['zvanjeautora'];
$kategorija=$row['kategorija'];
echo '<tr>
      <th scope="row">'.$ID.'</th>
      <td>'.$naziv.'</td>
      <td>'.$imeautora.'</td>
      <td>'.$prezimeautora.'</td>
      <td>'.$zvanjeautora.'</td>
      <td>'.$kategorija.'</td>
      <td>
      <a href="izmeni.php?izmeniid='.$ID.'" class="btn btn-info">Update</a>
      </td>
      <td>
      <a href="obrisi.php?obrisiid='.$ID.'" class="btn btn-danger">Delete</a>
      </td>
      <td>
      <a target="_blank" href="stampa.php?stampaid='.$row['ID'].'" class="btn btn-info">Stampa</a>
      </td>
    </tr>';



}

?>

    
   
  </tbody>
</table>
</table> 

    </div>
    <footer>
<p class="text-center">AUTOR: Vicijan Viktor IT 34/20 </p>
</footer>
  </body>
</html>