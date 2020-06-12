<html>
    <head>
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    </head>
    <?php
   
   echo '<script type="text/javascript"> ';
    echo ' function openurl(newurl) {';
    echo '  if (confirm("Sei sicuro di voler cancellare il record?")) {';
    echo '    document.location = newurl; ';
    echo '  }';
    echo '}';
    echo '</script>'; 

$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
$sql="SELECT * FROM prodotti ";
$query=mysqli_query($con,$sql);

echo "<table border=1>";

echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Marca</th>";
    echo "<th>Modello</th>";
    echo "<th>Disponibilità</th>";
    echo "<th>Prezzo</th>";
    echo "<th>Descrizione</th>";
    echo "<th>Categoria</th>";
    echo "<th>Immagine</th>";
echo "</tr>";


foreach ($query as $riga){
   

    echo "<tr>";
        echo "<td>".$riga["id"]."</td>";
        echo "<td>".$riga["Marca"]."</td>";
        echo "<td>".$riga["Modello"]."</td>";
        echo "<td>".$riga["Disponibilità"]."</td>";
        echo "<td>".$riga["Prezzo"]."</td>";
        echo "<td>".$riga["Descrizione"]."</td>";
        echo "<td>".$riga["Categoria"]."</td>";
        echo "<td><img width=200 length=200 src=img/".$riga["Immagine"]."></td>";
        echo "<td><a href=update.php?id=".$riga["id"].">Modifica</a> <a  href=javascript:openurl('delete.php?prodotto=".$riga["id"]."');>Cancella</a></td>";
    echo "</tr>";

    
}

echo "</table>";
echo "<center><a href=admin_menu.html><h2>Torna al menu</h2></a></center>";

?>
</html>

