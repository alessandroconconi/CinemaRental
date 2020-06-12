<html>
  <head>
  <link href="progetto.css" rel="stylesheet" type="text/css">
  </head>
  <?php
$marca=$_POST["marca"];
$modello=$_POST["modello"];
$disp=(int)$_POST["disponibilita"];
$prezzo=$_POST["prezzo"]."€";
$desc=$_POST["descrizione"];
$categoria=$_POST["categoria"];
$filename=$_FILES['userfile']['name'];

$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
$sql="INSERT INTO prodotti (Marca,Modello,Disponibilità,Prezzo,Descrizione,Categoria,Immagine) VALUES ('$marca','$modello','$disp','$prezzo','$desc','$categoria','$filename')";

if (mysqli_query($con,$sql)){
    echo "<center><h1>PRODOTTO AGGIUNTO</h1></center>";
    echo "<center><a href=admin_menu.html><h2>Torna al menu</h2></a></center>";
}

?>
</html>