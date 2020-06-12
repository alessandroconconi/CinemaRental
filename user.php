<?php
    $con=mysqli_connect("localhost","root","","cinema_rental");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($con,"utf8");
    $sql="SELECT * FROM utenti WHERE id=".$_COOKIE["utente"]."";
    $query=mysqli_query($con,$sql);
    $record=mysqli_fetch_array($query);

    echo "<br><br><center><h1>CINEMA RENTAL</h1>";
    echo "<br><br><h2>Dati Personali </h2><br>";
    echo "<i>Username:</i> ".$record["Username"]."<br><br>";
    echo "<i>Nome:</i> ".$record["Nome"]."<br><br>";
    echo "<i>Cognome:</i> ".$record["Cognome"]."<br><br>";
    echo "<i>Email:</i> ".$record["Email"]."<br><br>";
    echo "<i>Indirizzo:</i> ".$record["Indirizzo"]."<br><br>";
    echo "<i>Telefono:</i> ".$record["Telefono"]."<br><br>";

    echo"<br><br><h5><a href=index.php>HOMEPAGE</a></h5>";
    echo "</center>";
    
?>