<html>
<head> 
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