<html>
<head>
    <link href="progetto.css" rel="stylesheet" type="text/css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> Visualizza </title>

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
            </div>
          </div>
        </header>
      <br><br>
      
</body>
<?php
  
  $con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //IMPOSTAZIONE DEL CHARSET ALTRIMENTI DIO MALEDETTO NON VEDE GLI ACCENTI 
  mysqli_set_charset($con,"utf8");
  $sql="SELECT * FROM Prodotti WHERE Id=".$_GET["id"]."";
  $sql2="SELECT * FROM Utenti WHERE id=".$_COOKIE["utente"]."";
  $query=mysqli_query($con,$sql);
  $query2=mysqli_query($con,$sql2);
  //ARRAY ASSOCIATIVO PER LA STAMPA DEL CONTENUTO DEL RECORD
  $record=mysqli_fetch_assoc($query);
  $record2=mysqli_fetch_assoc($query2);
  //CONTROLLO IL VALORE DEL COOKIE, SE COINCIDE CON 1 L'UTENTE È LOGGATO ALTRIMENTI STAMPO LA STESSA PAGINA CON UN MESSAGGIO DI INVITO AL LOGIN
  if ($_COOKIE["utenteloggato"]==1){
    echo "<form action=./calendar/noleggia.html method=GET>";
    echo "<center><img src=img/".$record["Immagine"]." width=400 length=500></center>";
    echo "<h1>".$record["Marca"]." ".$record["Modello"]." ".$record["Prezzo"]."</h1><br>";
    echo "<h1>".$record["Prezzo"]." al giorno</h1><br>";
    echo "<h2>".$record["Descrizione"]."</h2>";
    echo "utente : ".$record2["Username"]."<br>Vuoi noleggiare il seguente prodotto?";
    //VERIFICO LA DISPONIBILITÀ DEL PRODOTTO NEL DATABASE, DOVE 0=NON DISPONIBILE E 1=DISPONIBILE
    if ($record["Disponibilità"]==1){
      echo "<input type=hidden value=".$_GET["id"]." name=id >";
      echo "<input type=submit >";
    }else{
      echo "<br>Prodotto non disponibile per il noleggio";
    }
    
    echo "</form>";
  }else{
    //"FRONTEND" DA MODIFICARE : STAMPA IMMAGINE AL CENTRO, SOTTO MARCA E MODELLO E INFINE LA DESCRIZIONE
    echo "<center><img src=img/".$record["Immagine"]." width=400 length=500></center>";
    echo "<h1>".$record["Marca"]." ".$record["Modello"]." ".$record["Prezzo"]."</h1><br>";
    echo "<h1>".$record["Prezzo"]."</h1><br>";
    echo "<h2>".$record["Descrizione"]." al giorno</h2>";
    echo "<h2>Devi fare il login per poter noleggiare</h2>";
  }
  
?>
</html>