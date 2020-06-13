<html>
  <head><link href="progetto.css" rel="stylesheet" type="text/css"></head>
<?php

    $con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
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
    echo "<br><br><p><h1><b>DETTAGLI ORDINE</h1></b></p>";
    echo "<br><br>{$utente['Username']}, <br><br>Hai acquistato correttamente il prodotto  : {$prodotto['Marca']} {$prodotto['Modello']}";
    echo "<br>";
    echo "<a href='/index.php'><br><br>Home page</a>";

    $sqlordine="INSERT INTO ordini (Marca,Modello,id_utente,data_inizio,data_fine) VALUES (".$prodotto['Marca'].",".$prodotto['Modello'].",".$_COOKIE["utente"].",".$_COOKIE["start"].",".$_COOKIE["end"].")";
    $queryinsertordine=mysqli_query($con,$sqlordine);
    
?>
</html>