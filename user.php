<html>
<head>
    <link href="progetto.css" rel="stylesheet" type="text/css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> User </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="progetto.css" rel="stylesheet">

</head>

<body>
<div class="container">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a class="text-muted" href="contatti.html">+39 3334675021 </a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="index.php">CINEMA RENTAL</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
                  <circle cx="10.5" cy="10.5" r="7.5"></circle>
                  <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                </svg>
              </a>
              <a class="btn btn-sm btn-outline-secondary" href="sign-in/index.html">Sign-up</a>
              <a class="btn btn-sm btn-outline-secondary" href="log-in/index.html">log-in</a>
            </div>
          </div>
        </header>
      
</body>
    
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

    echo "<center><br><br>";
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
    echo "<br><i><a href=index.php>homepage</a><i>";
    echo "</center>";
?>

</html>