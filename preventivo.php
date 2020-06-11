<html>

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
echo "<form method=GET action=calendar/preventivo2.html>";
echo "<select name=prodotto>";
foreach ($query as $riga){
    echo "<option value=".$riga["id"]." >".$riga["Marca"]." ".$riga["Modello"]." </option>";
}
echo "</select><br><br>";
echo "<input type=submit>";
echo "</form>";
?>

</html>