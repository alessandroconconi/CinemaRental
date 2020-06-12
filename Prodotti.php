<html>
  <head>
  <link href="progetto.css" rel="stylesheet" type="text/css">
    <h2>Seleziona un prodotto da noleggiare</h2>
    <link href="progetto.css" rel="stylesheet" type="text/css">
  </head>

  

<?php
$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
$sql="SELECT * FROM Prodotti ";
$query=mysqli_query($con,$sql);
//STAMPA DEL CONTENUTO DELLA TABELLA PRODOTTI
foreach ($query as $riga){
  echo "<tr><td>";
  echo "<img src=img/".$riga["Immagine"]." width=400 length=400/><br>"; //iMMAGINE
  echo "<a href=Visualizza.php?id=".$riga["id"].">".$riga["Marca"]." ".$riga["Modello"]."</a><br>"; //MARCA E MODELLO CHE PORTANO ALLA PAGINA DEL PRODOTTO (SI PUO SOSTITUIRE CON UN PULSANTE)
  echo "</td></tr>";
}



?>
</html>