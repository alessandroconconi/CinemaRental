<?php
    
    $con=mysqli_connect("localhost","root","","Cinema_Rental");
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma</title>
</head>
<body>
<div>
    <ul>
    <li>da: <?php echo $start ?> </li>
    <li>a: <?php echo $end ?> </li>
    <li>Oggetto: <?php echo "{$prodotto['Marca']} | {$prodotto['Modello']}" ?> </li>
    <li>Descrizione Oggetto: <?php echo $prodotto['Descrizione'] ?> </li>
    <li>Prezzo Totale: <?php echo $totale ?> </li>   
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