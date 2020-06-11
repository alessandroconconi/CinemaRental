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
    echo "<center><h1>Cinema Rental</h1><a href=index.php>homepage</a>";
    echo "<h2>Dati Personali </h2><br>";
    echo "Username ".$record["Username"]."<br><br>";
    echo "Nome ".$record["Nome"]."<br><br>";
    echo "Cognome ".$record["Cognome"]."<br><br>";
    echo "Email ".$record["Email"]."<br><br>";
    echo "Indirizzo ".$record["Indirizzo"]."<br><br>";
    echo "Telefono ".$record["Telefono"]."<br><br>";
    echo "</center>";
    
?>