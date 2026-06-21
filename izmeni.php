<?php
include 'konekcija.php';
$ID=$_GET['izmeniid'];
$sql="SELECT * FROM `resenjainf` WHERE ID=$ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$naziv=$row['naziv'];
$imeautora=$row['imeautora'];
$prezimeautora=$row['prezimeautora'];
$zvanjeautora=$row['zvanjeautora'];
$kategorija=$row['kategorija'];
if (isset($_POST['izmeni'])) {
    $naziv=$_POST['naziv'];
    $imeautora=$_POST['imeautora'];
    $prezimeautora=$_POST['prezimeautora'];
    $zvanjeautora=$_POST['zvanjeautora'];
    $kategorija=$_POST['kategorija'];

    $sql="UPDATE `resenjainf`SET naziv='$naziv',imeautora='$imeautora',prezimeautora='$prezimeautora',zvanjeautora='$zvanjeautora', kategorija='$kategorija' WHERE ID='$ID'";
    $result=mysqli_query($con,$sql);
    if ($result) {
        //echo "Izmena uspesna";
        header('location:prikaz.php');
    }else {
        die(mysqli_error($con));
    }
}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unos novih podataka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <?php
include 'navigacioni.php';
?>
  <body>
    <div class="container my-5">
        <form method="post">
<div class="mb-3">
  <label class="form-label">Naziv resenja</label>
  <input type="text" class="form-control"  autocomplete="off" name="naziv" value=<?php echo $naziv ?>>
</div>
<div class="mb-3">
  <label class="form-label">Ime autora</label>
  <input type="text" class="form-control" autocomplete="off" name="imeautora" value=<?php echo $imeautora ?>>
</div>
<div class="mb-3">
  <label class="form-label">Prezime autora</label>
  <input type="text" class="form-control" autocomplete="off" name="prezimeautora" value=<?php echo $prezimeautora ?>>
</div>
<div class="mb-3">
  <label class="form-label">Zvanje</label>
  <input type="text" class="form-control" placeholder="Zvanje autora" autocomplete="off" name="zvanjeautora" value=<?php echo $zvanjeautora ?>>
</div>
<div class="mb-3">
  <label class="form-label">Kategorija resenja</label>
  <select class="form-select" name="kategorija" >
  <option value=" ">Izaberi kategoriju tehnickog resenja</option>
  <option value="M81">M81</option>
  <option value="M82">M82</option>
  <option value="M83">M83</option>
  <option value="M84">M84</option>
  <option value="M85">M85</option>
  <option value="M86">M86</option>
</select>
</div>
<button class="btn btn-dark" name="izmeni">Izmeni</button>
</form>

    </div>
    
  </body>
</html>