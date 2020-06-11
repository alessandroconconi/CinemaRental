<html>

<?php
$con=mysqli_connect("localhost","root","","cinema_rental");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
$sql="SELECT * FROM prodotti ";
$query=mysqli_query($con,$sql);

//STAMPA DEL CONTENUTO DELLA TABELLA PRODOTTI
echo "<form method=GET action=delete.php>";
echo "<select name=prodotto>";
foreach ($query as $riga){
    echo "<option value=".$riga["id"]." >".$riga["Marca"]." ".$riga["Modello"]." </option>";
}
echo "</select><br><br>";
echo "<input type=submit>";
echo "</form>";
echo "<center><a href=admin_menu.html><h2>Torna al menu</h2></a></center>";
?>

</html>