<html>
<head>
<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
</head>
<?php
$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
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