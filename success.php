<?php

    $con=mysqli_connect("localhost","root","","Cinema_Rental");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $idProdotto=$_GET["idProdotto"];
    $idUtente=$_COOKIE["utente"];
    
    $result=mysqli_query($con,"select * From utenti Where id=$idUtente");
    $utente;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $utente=$row;
        }
      }
    
      $result=mysqli_query($con,"select * From prodotti Where id=$idProdotto");
      $prodotto;
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            $prodotto=$row;
          }
        }
    
    echo "{$utente['Username']}, hai acquistato correttamente il prodotto : {$prodotto['Marca']} {$prodotto['Modello']}";
    echo "<br>";
    echo "<a href='/index.php'>torna alla home page</a>";
?>