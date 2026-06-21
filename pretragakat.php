<?php
include 'konekcija.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga po kategoriji</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>
<?php
include 'korisnikulogovan.php';
include 'navigacioni.php';

?>
<body>

<div class="container my-5">
<form method="post">
    <div class="input-group mb-3">

<div class="mb-3">
  <label class="form-label">Kategorija resenja</label>
  <select class="form-select" name="pretkategorija" >
  <option value=" ">Izaberi kategoriju tehnickog resenja</option>
  <option value="M81">M81</option>
  <option value="M82">M82</option>
  <option value="M83">M83</option>
  <option value="M84">M84</option>
  <option value="M85">M85</option>
  <option value="M86">M86</option>
</select>


<button class="btn btn-dark" id="button-addon2" name="pretrazi">Pretrazi</button>
</div>
</div>
</form>
</br>
<div class="containter">
    <table class="table">
<?php
if (isset($_POST['pretrazi'])) {
    $pretkategorija=$_POST['pretkategorija'];
    $sql="SELECT * FROM `resenjainf` WHERE kategorija = '$pretkategorija' ";
    $result=mysqli_query($con,$sql);
    if ($result) {
        if (mysqli_num_rows($result)>0) {
            echo '<table class="table table-dark table-striped">
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
      </tbody>
    </thead>
    ';
    while ($row=mysqli_fetch_assoc($result)){
        
if 
(isset($_SESSION['ulogovan'])){
    echo '<tbody>
    <tr>
      <th scope="row">'.$row['ID'].'</th>
      <td>'.$row['naziv'].'</td>
      <td>'.$row['imeautora'].'</td>
      <td>'.$row['prezimeautora'].'</td>
      <td>'.$row['zvanjeautora'].'</td>
      <td>'.$row['kategorija'].'</td>
      <td>
      <a href="izmeni.php?izmeniid='.$row['ID'].'" class="btn btn-info">Update</a>
      </td>
      <td>
      <a href="obrisi.php?obrisiid='.$row['ID'].'" class="btn btn-danger">Delete</a>
      </td>
      <td>
      <a target="_blank" href="stampa.php?stampaid='.$row['ID'].'" class="btn btn-info">Stampa</a>
      </td>
      </tr>
    </tbody>';}
    else {
        echo '<tbody>
    <tr>
      <th scope="row">'.$row['ID'].'</th>
      <td>'.$row['naziv'].'</td>
      <td>'.$row['imeautora'].'</td>
      <td>'.$row['prezimeautora'].'</td>
      <td>'.$row['zvanjeautora'].'</td>
      <td>'.$row['kategorija'].'</td>
      <td>
      <a href="izmeni.php?izmeniid='.$row['ID'].'" class="btn btn-info disabled">Update</a>
      </td>
      <td>
      <a href="obrisi.php?obrisiid='.$row['ID'].'" class="btn btn-danger disabled">Delete</a>
      </td>
      <td>
      <a target="_blank" href="stampa.php?stampaid='.$row['ID'].'" class="btn btn-info">Stampa</a>
      </td>
      </tr>
    </tbody>';
    }}
        }
        else {
           echo '<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Pretraga neuspesna</h4>
  <p>Proverite podatke koje ste uneli i pokusajte opet</p>
</div>';
        }
    }
}

?>

    </table>



</div>

</div>
    <footer>
<p class="text-center">AUTOR: Vicijan Viktor IT 34/20 </p>
</footer>
</body>
</html>