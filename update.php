<html>

<?php
$con=mysqli_connect("localhost","root","","cinema_rental");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
$sql="SELECT * FROM prodotti WHERE id=".$_GET["prodotto"]."";
$query=mysqli_query($con,$sql);
$record=mysqli_fetch_assoc($query);
echo $record["Marca"]." ".$record["Modello"]."<br>";
echo "<form action=update2.php method=POST>";
    echo "<input type=hidden name=id value=".$_GET["prodotto"].">";
    echo "Disponibilità <input type=text name=disponibilita value='".$record["Disponibilità"]."'><br>";
    echo "Prezzo <input type=text name=prezzo value='".$record["Prezzo"]."'><br>";
    echo "Descrizione <textarea name=desc rows=10 col=10>'".$record["Descrizione"]."'</textarea><br>";
    echo "<input type=submit>";     
echo "</form>"  
?>

</html>