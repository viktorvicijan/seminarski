<?php

if( isset($_SESSION["korisnikime"])  &&  $_SESSION["sifra"]) {
     // echo  " uspesno ulogovan";
      $_SESSION['ulogovan'] = random_int(100, 999);
     // echo $_SESSION['ulogovan'];
   } else {
     // echo"not workinlog";
     
      
   }

   ?>