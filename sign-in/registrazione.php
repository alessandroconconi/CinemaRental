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

$Nome=$_POST["nome"];

$Cognome=$_POST["cognome"];

$Email=$_POST["email"];

$Numerotelefono=$_POST["numerotelefono"];

$username=$_POST["username"];

$pass=$_POST["password"];
$pass=md5($pass);

$Indirizzo=$_POST["indirizzo"];

$sql="INSERT INTO utenti (Nome,Cognome,Username,Password,Indirizzo,Email,Telefono) VALUES ('$Nome','$Cognome','$username','$pass','$Indirizzo','$Email','$Numerotelefono')";


if($result=mysqli_query($con,$sql)){
	echo "Registrazione effettuata <br>";
	echo "<a href=../index.php> Torna alla homepage</a>";
}else{
	echo "Login non effettuato !" ;
}

mysqli_close($con);
?> 
</html>