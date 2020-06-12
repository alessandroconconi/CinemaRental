<?php
    
    $con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    $idProdotto=$_GET["id"];
    $start=$_GET["start"];
    $end=$_GET["end"];

    $result=mysqli_query($con,"select * From prodotti Where id=$idProdotto");
    
    $prodotto;

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $prodotto=$row;
        }
      }
    
    
    $giorni=(intval(strtotime($end))-intval(strtotime($start)))/86400; //giorno in secondi
    $totale=$giorni*intval($prodotto["Prezzo"]);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="progetto.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma</title>
</head>
<body>
<div>
   
    <br> <h2>RIEPILOGO DELL'ORDINE</h2><br><br>
    <ul>
    <li><i>da: <?php echo $start ?> </i></li><br>
    <li><i>a: <?php echo $end ?> </i></li><br>
    <li><i>Oggetto: <?php echo "{$prodotto['Marca']} | {$prodotto['Modello']}" ?> </i></li><br>
    <li><i>Descrizione Oggetto: <?php echo $prodotto['Descrizione'] ?> </i></li><br>
    <li><i>Prezzo Totale: <?php echo $totale ?> </i></li><br>   
    </ul>
</div>    
    <form action="acquisto.php" method="post">
        <input type="hidden" value="<?php echo $totale ?>" name="prezzo">
        <input type="hidden" value="<?php echo $prodotto['Descrizione'] ?>" name="descrizione">
        <input type="hidden" value="<?php echo "{$prodotto['Marca']} | {$prodotto['Modello']}"?>" name="oggetto">
        <input type="hidden" value="<?php echo $idProdotto ?>" name="idProdotto">

        <a href="/index.php">Cancella</a>
        <button type="submit">Conferma</button>

    </form>
</body>
</html>