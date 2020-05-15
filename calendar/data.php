<html>

<?php
	$con=mysqli_connect("localhost","root","","Cinema_Rental");
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
?>
<html>