<?php
include 'korisnikulogovan.php';
?>



<?php

if 
(isset($_SESSION['ulogovan'])){
echo '<nav class="navbar navbar-expand-lg  bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" ">OPCIJE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="btn btn-dark" href="pocetna.php" >Home</a>
        <a class="btn btn-dark" href="index.php" >Unesi Resenje</a>
        <a class="btn btn-dark" href="prikaz.php" role="button" aria-disabled="true" >Sva resenja</a>
        <a class="btn btn-dark" href="pretraga.php" >Pretraga</a>
        <a class="btn btn-dark" href="pretragakat.php" >Pretraga Kategorije</a>
        <a class="btn btn-warning" href="izlogujse.php" >Izloguj se</a>
        
      </div>
    </div>
  </div>
  
</nav>';
}else{
echo '<nav class="navbar navbar-expand-lg  bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" ">OPCIJE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="btn btn-dark"  href="pocetna.php" >Home</a>
        <a class="btn btn-dark disabled" href="index.php"  >Unesi Resenje</a>
        <a class="btn btn-dark disabled" href="prikaz.php" role="button" >Sva resenja</a>
        <a class="btn btn-dark" href="pretraga.php" >Pretraga</a>
        <a class="btn btn-dark" href="pretragakat.php" >Pretraga Kategorije</a>
        <a class="btn btn-success" href="prijava.php" >Prijavi se</a>
      </div>
    </div>
  </div>
  
</nav>';

}





?>
<img src="pozadina.jpg" class="img-fluid"  alt="slika za header"> 

