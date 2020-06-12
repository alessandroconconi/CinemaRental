<html>
<head><link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css"></head>
<?php
$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");

$disp=(int)$_POST["disponibilita"];
$prezzo=$_POST["prezzo"]."€";
//uso un metodo mysqli per adattare la stringa in modo da essere inserita correttamente nel db (es: se trova ' mette \')
$desc=mysqli_real_escape_string($con,$_POST["desc"]);

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
$sql="UPDATE prodotti SET  Disponibilità='".$disp."', Prezzo='".$prezzo."', Descrizione='".$desc."'  WHERE id='".$_POST["id"]."' ";
if(mysqli_query($con,$sql)){
    echo "<center><h1>RECORD MODIFICATO</h1></center>";
    echo "<center><a href=admin_menu.html><h2>Torna al menu</h2></a></center>";
}else{
    echo "<center><h1>ERRORE</h1></center>";
    echo "<center><a href=admin_menu.html><h2>Torna al menu</h2></a></center>";
}

?>

</html>