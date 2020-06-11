<html>

<?php
$con=mysqli_connect("localhost","root","","cinema_rental");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
$sql="DELETE FROM prodotti WHERE id=".$_GET["prodotto"]."";


if (mysqli_query($con,$sql)){
    echo "<center><h1>RECORD CANCELLATO CON SUCCESSO</h1></center>";
    echo "<center><a href=admin_menu.html><h2>Torna al menu</h2></a></center>";
}else{
    echo "<center><h1>ERRORE</h1></center>";
    echo "<center><a href=admin_menu.html><h2>Torna al menu</h2></a></center>";
}
?>

</html>