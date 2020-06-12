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
mysqli_set_charset($con,"utf8");

$inizio=$_GET["start"];
$fine=$_GET["end"];
$idprodotto=$_GET["id"];
//ottengo il giorno,mese e anno dell'inizio e della fine del periodo ipotetico di noleggio per il calcolo dei giorni tra le date
$startgiorno=substr($inizio,0,2);

$startmese=substr($inizio,3,2);

$startanno=substr($inizio,6);

$finegiorno=substr($fine,0,2);

$finemese=substr($fine,3,2);

$fineanno=substr($fine,6);

$sommamesi=0;

//Anno inziale è bisestile? In base al risultato inizalizzo in maniera diversa l'array
if ($startanno%400==0){
    //l'array conterrà il numero di giorni nei vari mesi in ordine, quindi il primo elemento rappresenta i giorni di Gennaio e l'ultimo di Dicembre, in base alla bisestilità dell'anno
    $stardays=array(31,29,31,30,31,30,31,31,30,31,30,31);
}else{
    if($startanno%4==0 && $startanno%100!=0){
        $startdays=array(31,29,31,30,31,30,31,31,30,31,30,31);
    }else{
        $startdays=array(31,28,31,30,31,30,31,31,30,31,30,31);
    }
}

//Anno finale è bisestile? In base al risultato inizializzo in maniera diversa l'array
if ($fineanno%400==0){
    $finedays=array(31,29,31,30,31,30,31,31,30,31,30,31);
}else{
    if($fineanno%4==0 && $fineanno%100!=0){
        $finedays=array(31,29,31,30,31,30,31,31,30,31,30,31);
    }else{
        $finedays=array(31,28,31,30,31,30,31,31,30,31,30,31);
    }
}

if ($startmese==$finemese && $startanno==$fineanno){
    $giorni=$finegiorno-$startgiorno;
}else{//non sono nello stesso mese
    
    //sono nello stesso anno
    if ($startanno==$fineanno){
        
        $startindice=$startmese-1;
    
        $diff=$startdays[$startindice]-$startgiorno;

        for($i=$startmese+1;($startmese<$i && $i<$finemese) && $i<count($startdays);$i++){
            $sommamesi=$sommamesi+$startdays[$i-1]; 
        }
        $giorni=$diff+$sommamesi+$finegiorno;

    }else{
    
        //calcolo quanti giorni mancano alla fine dell'anno iniziale
        $startindice=$startmese-1;
        $diff=$startdays[$startindice]-$startgiorno;
        for($i=$startmese+1;($startmese<$i && $i<12) && $i<count($startdays);$i++){
            $sommamesi=$sommamesi+$startdays[$i-1]; 
        }
        $giorniannoiniziale=$diff+$sommamesi+31;
       
        $sommamesi=0;
        //calcolo quanti giorni sono passati dall'inizio dell'anno finale alla data finale
        $diff=$finedays[0]-1;
        for($i=2;(0<$i && $i<$finemese) && $i<count($finedays);$i++){
            $sommamesi=$sommamesi+$finedays[$i-1];
           
        }
        $giorniannofinale=$diff+$sommamesi+$finegiorno;
        //per via di limitazioni algoritmiche il risultato sarà inferiore di 1 all'effettivo n. di giorni trascorsi,
		//motivo per cui si trova un +1 alla fine del calcolo.
        $giorni=$giorniannoiniziale+$giorniannofinale+1;
        
    }
   
}
//faccio la query al database 
$sql="SELECT * FROM Prodotti WHERE id=".$idprodotto."";
$query=mysqli_query($con,$sql);
$record=mysqli_fetch_assoc($query);

$costo=(int)$record["Prezzo"]*$giorni;

echo "Il noleggio di ".$record["Marca"]." ".$record["Modello"]." per ".$giorni." giorni al prezzo giornaliero di ".$record["Prezzo"]."<br>";
echo "verrebbe a costare : ".$costo." euro.";
echo "Visualizza prodotto: <a href=../Visualizza.php?id=".$idprodotto.">Link</a><br>";
?>


</html>