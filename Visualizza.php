
<?php
  
  $con=mysqli_connect("localhost","root","","Cinema_Rental");
  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //IMPOSTAZIONE DEL CHARSET ALTRIMENTI DIO MALEDETTO NON VEDE GLI ACCENTI 
  mysqli_set_charset($con,"utf8");
  $sql="SELECT * FROM Prodotti WHERE Id=".$_GET["id"]."";
  $query=mysqli_query($con,$sql);
  //ARRAY ASSOCIATIVO PER LA STAMPA DEL CONTENUTO DEL RECORD
  $record=mysqli_fetch_assoc($query);
  //CONTROLLO IL VALORE DEL COOKIE, SE COINCIDE CON 1 L'UTENTE È LOGGATO ALTRIMENTI STAMPO LA STESSA PAGINA CON UN MESSAGGIO DI INVITO AL LOGIN
  if ($_COOKIE["utenteloggato"]==1){
    echo "<form action=./calendar/noleggia.html method=GET>";
    echo "<center><img src=img/".$record["Immagine"]." width=400 length=500></center>";
    echo "<h1>".$record["Marca"]." ".$record["Modello"]." ".$record["Prezzo"]."</h1><br>";
    echo "<h1>".$record["Prezzo"]." al giorno</h1><br>";
    echo "<h2>".$record["Descrizione"]."</h2>";
    echo "Ciao utente numero ".$_COOKIE["utente"]." Vuoi noleggiare?";
    //VERIFICO LA DISPONIBILITÀ DEL PRODOTTO NEL DATABASE, DOVE 0=NON DISPONIBILE E 1=DISPONIBILE
    if ($record["Disponibilità"]==1){
      echo "<input type=hidden value=".$_GET["id"]." name=id >";
      echo "<input type=submit >";
    }else{
      echo "Prodotto non disponibile per il noleggio";
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
