<html>

<head>
    <link href="progetto.css" rel="stylesheet" type="text/css">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title> Cameras </title>

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
      
        <br><br><center><h3>Benvenuto nella sezione dedicata alle camere</h3></center>
        <br><br>
        <h5>Seleziona uno dei seguenti prodotti :</h5><br><br>
</body>

<?php
$con=mysqli_connect("eu-cdbr-west-03.cleardb.net","b9122e4bb6f324","af8dc60b","heroku_2486b3b7e521673");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
$sql="SELECT * FROM prodotti WHERE Categoria='Cameras'";
$query=mysqli_query($con,$sql);

echo "<table border=1>";

echo "<tr>";
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
        //echo "<td>".$riga["id"]."</td>";
        echo "<td>".$riga["Marca"]."</td>";
        echo "<td><a href=Visualizza.php?id=".$riga["id"].">".$riga["Modello"]."</a></td>";
        echo "<td>".$riga["Disponibilità"]."</td>";
        echo "<td>".$riga["Prezzo"]."</td>";
        echo "<td>".$riga["Descrizione"]."</td>";
        echo "<td>".$riga["Categoria"]."</td>";
        echo "<td><img width=200 length=200 src=img/".$riga["Immagine"]."></td>";
        //echo "<td><a href=update.php?id=".$riga["id"]."></a> <a  href=javascript:openurl('delete.php?prodotto=".$riga["id"]."');>Cancella</a></td>";
    echo "</tr>";
    

    
}

?>
</html>