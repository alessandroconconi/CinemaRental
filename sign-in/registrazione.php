<?php
$con=mysqli_connect("localhost","root","","Cinema_Rental");
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