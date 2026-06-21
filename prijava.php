<?php
include 'konekcija.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prijava</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>
<?php
include 'navigacioni.php';
?>
<body>

<div class="container my-5">
<form action="prijava.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Korisnicko ime</label>
    <input type="text" class="form-control" name="korisnikime" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Sifra</label>
    <input type="password" class="form-control" name="sifra">
  </div>
  <button type="submit" class="btn btn-dark" name="prijava" >Submit</button>
</form>

</div>
<?php
if (isset($_POST['prijava'])) {
    $korisnikime = $_POST['korisnikime'];
    $sifra = $_POST['sifra'];
    $sql = "SELECT * FROM `korisnici` WHERE korisnikime='$korisnikime' AND sifra='$sifra'";

    $select = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($select);

    if (is_array($row)) {
        $_SESSION["korisnikime"] = $row['korisnikime'];
        $_SESSION["sifra"] = $row['sifra'];
    }else {
        echo '<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Prijava neuspesna</h4>
  <p>Proverite podatke koje ste uneli i pokusajte opet</p>
</div>';
    }
    
}
if( isset($_SESSION["korisnikime"])  &&  $_SESSION["sifra"]) {
      echo  " uspesno ulogovan";
      header('location:pocetna.php');
   } else {
      echo" ";
   }


?>
    
</body>
</html>