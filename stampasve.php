<?php
include 'konekcija.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Štampa svih rešenja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  

<h4 class="text-center">PODACI O SVIM REŠENJIMA</h4>

<div class="container my-5">
       <table class="table table-bordered">
        <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Naziv resenja</th>
      <th scope="col">Ime autora</th>
      <th scope="col">Prezime autora</th>
      <th scope="col">Zvanje</th>
      <th scope="col">Kategorija</th>
      
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
