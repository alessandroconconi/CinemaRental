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
$username=$_POST["username"];
$pass=$_POST["pass"];
$pass=md5($pass);

$sql="SELECT * FROM utenti WHERE Username='".$username."' AND Password='".$pass."' ";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$record=mysqli_fetch_assoc($result);

if($n!=0){
  header("Location: ../index.php");
  //AGGIORNO IL COOKIE IN MODO DA SEGNALARE L'AVVENUTO LOGIN 
  setcookie("utenteloggato",1, time() + 1800, "/");
  setcookie("utente",$record["id"],time()+(1800),"/");
}else{
	echo "Login non effettuato !" ;
}

mysqli_close($con);
?> 
</html>