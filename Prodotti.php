
<?php
$con=mysqli_connect("localhost","root","","Cinema_Rental");
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
  echo "<a href=visualizza.php?id=".$riga["id"].">".$riga["Marca"]." ".$riga["Modello"]."</a><br>"; //MARCA E MODELLO CHE PORTANO ALLA PAGINA DEL PRODOTTO (SI PUO SOSTITUIRE CON UN PULSANTE)
  echo "</td></tr>";
}



?>
