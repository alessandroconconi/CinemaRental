<?php
$con=mysqli_connect("localhost","root","","Cinema_Rental");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$username=$_POST["username"];
$pass=$_POST["pass"];
$pass=md5($pass);

$sql="SELECT * FROM utenti WHERE Username='".$username."' AND Password='".$pass."' ";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
<<<<<<< HEAD
$record=mysqli_fetch_assoc($result);
=======
>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d

if($n!=0){
  header("Location: ../index.php");
  //AGGIORNO IL COOKIE IN MODO DA SEGNALARE L'AVVENUTO LOGIN 
  setcookie("utenteloggato",1, time() + 1800, "/");
<<<<<<< HEAD
  setcookie("utente",$record["id"],time()+(1800),"/");
=======
>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d
}else{
	echo "Login non effettuato !" ;
}

mysqli_close($con);
?> 