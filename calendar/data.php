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
    $sqlprodotto="SELECT * FROM prodotti WHERE id=".$_GET["id"]."";
	$sqlutente="SELECT * FROM utenti WHERE id=".$_COOKIE["utente"]."";
    $queryutente=mysqli_query($con,$sqlutente);
    $queryprodotto=mysqli_query($con,$sqlprodotto);
    $recordutente=mysqli_fetch_assoc($queryutente);
    $recordprodotto=mysqli_fetch_assoc($queryprodotto);

    echo "Noleggio di ".$recordprodotto["Marca"]." ".$recordprodotto["Modello"]." da ".$_GET["start"]." a ".$_GET["end"]." confermato!<br>";
	echo "Invieremo il prodotto a : <br>";
	echo $recordutente["Nome"]." ".$recordutente["Cognome"]." <br>";
	echo $recordutente["Indirizzo"];

	$sqlprodottoupdate="UPDATE prodotti SET Disponibilità=0 WHERE id=".$_GET["id"]."";
	$queryupdatepr=mysqli_query($con,$sqlprodottoupdate);
	
	echo "<a href=../index_loggato.php>torna alla home page</a>";
?>
<html>