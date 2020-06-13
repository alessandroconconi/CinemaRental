<?php

    $con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($con,"utf8");

    $sql="SELECT * FROM utenti WHERE id=".$_COOKIE["utente"]."";
    $sqlordini="SELECT * FROM ordini WHERE id_utente=".$_COOKIE["utente"]."";
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
    
   
    $queryordini=mysqli_query($con,$sqlordini);
    echo "<h2>Riepilogo ordini </h2><br>";
    foreach($queryordini as $riga){
        
        echo "ID ".$riga["id"]."<br><br>";
        echo "Marca ".$riga["Marca"]."<br><br>";
        echo "Modello ".$riga["Modello"]."<br><br>";  
        echo "Data inizio ".$riga["data_inizio"]."<br><br>";
        echo "Data fine ".$riga["data_fine"]."<br><br>";
    }
    echo "</center>";
?>