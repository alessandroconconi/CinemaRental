<!doctype html>
<html lang="en">
 

<head>
<<<<<<< HEAD
	<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
  <?php
    //CONTROLLO TRAMITE IL METODO ISSET() SE IL COOKIE UTENTELOGGATO ESISTE GIA
    //SE ESISTE NON FACCIO NULLA,ALTRIMENTI LO CREO
    if (isset($_COOKIE["utenteloggato"]) && $_COOKIE["utenteloggato"]==1){
         if($_COOKIE["utente"]==15){
			header("Location: index_admin.html ");
		}else{
			header("Location: index_loggato.php");
		}
	}else{  
=======
  <?php
    //CONTROLLO TRAMITE IL METODO ISSET() SE IL COOKIE UTENTELOGGATO ESISTE GIA
    //SE ESISTE NON FACCIO NULLA,ALTRIMENTI LO CREO
    if (isset($_COOKIE["utenteloggato"])){
        
    }else{  
>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d
        $loggato=-1;
        setcookie("utenteloggato", $loggato, time() + 1800, "/");
    }
  ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title> Cinema Rental </title>

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
<<<<<<< HEAD
          <a class="text-muted" href="contatti.html">+39 3334675021 </a>
=======
          <a class="text-muted" href="#">+39 3939393939 </a>
>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="#">Cinema Rental</a>
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

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
<<<<<<< HEAD
        <a class="p-2 text-muted" href="Prodotti.php">Noleggio</a>
=======
        <a class="p-2 text-muted" href="#">cr.info@gmail.com</a>
        <a class="p-2 text-muted" href="#">Trasporti</a>
        <a class="p-2 text-muted" href="#">Noleggio</a>
>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d
        <a class="p-2 text-muted" href="contatti.html">Contatti</a>
        <a class="p-2 text-muted" href="preventivo.php">Preventivo</a>
      </nav>
    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark align-items-center">
      <div class="container-fluid">
        <img src="https://aleconco.s3-eu-west-1.amazonaws.com/arri-alexa-mini.jpg"
          width="300" height="175">
        <div class="row" style="float: right;">
          <form class="form-inline">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="Cameras">Cameras </label>
                <select class="form-control" id="Cameras" name="Camera">
                  <option value=0>lenti</option>
                  <option value=1>accessories</option>
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label for="Lights"> Lights </label>
                <select class="form-control" id="Lights" name="Lights">
                  <option value=0>led lights</option>
                  <option value=1>tungsten lights</option>
                  <option value=2>fluorescent lights</option>
                  <option value=3>lighting accessories</option>
                </select>
              </div>
            </div>


            <div class="col-xs-4">
              <div class="form-group">
                <label for="Grip"> Grip </label>
                <select class="form-control" id="Grip" name="Grip">
                  <option value=0>dolly</option>
                  <option value=1>crane</option>
                  <option value=2>slider</option>
                  <option value=0>grip accessories</option>
                </select>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">Shipping</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Servizio a domicilio</a>
            </h3>
            <div class="mb-1 text-muted">7 giorni su 7</div>
            <a href="#">richiedi il tuo preventivo</a>
          </div>
          <img src="https://aleconco.s3-eu-west-1.amazonaws.com/unnamed.jpg" width="300"
            height="250">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">about us</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Visit us</a>
            </h3>
            <div class="mb-1 text-muted">via verdi</div>
            <a href="#">+39 72649823</a>
            <div class="mb-1 text-muted">via rossi</div>
            <a href="#">+39 42345532</a>
            <p>lun-sab 8:30-22:00 domenica 12:00-18:00</p>
          </div>
<<<<<<< HEAD
=======
          <img
            src="https://aleconco.s3-eu-west-1.amazonaws.com/286c1f0786f22f49796739d023ce5417.png"
            width="300" height="250">
>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d
        </div>
      </div>
    </div>
  </div>

  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">Service</h4>
          <p class="mb-0">Cinema Rental <em>leader nel noleggio attrezzatura</em> offriamo un servizio completo su tutto
            il territorio italiano.</p>
        </div>

<<<<<<< HEAD
		<div id="demoMap" class="box">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/openlayers/2.13.1/OpenLayers.js"></script>
      <script>
          let lat = 45.5257;
          let lon = 10.2283;
          let zoom = 5;

          let fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
          let toProjection = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
          let position = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);
          map = new OpenLayers.Map("demoMap");
          let mapnik = new OpenLayers.Layer.OSM();
          map.addLayer(mapnik);
          map.setCenter(position, zoom);
          let markers;
          position = navigator.geolocation.getCurrentPosition(function(posit){
            position = new OpenLayers.LonLat(posit.coords.longitude || lon, posit.coords.latitude || lat).transform(fromProjection, toProjection);
            let markers = new OpenLayers.Layer.Markers("Markers");
            map.addLayer(markers);
            markers.addMarker(new OpenLayers.Marker(position));
            map.setCenter(position, zoom);
          })
      </script>
	</div>
=======

>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d
        <!--
               <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->



    </div><!-- /.row -->
<<<<<<< HEAD
	
	<footer class="blog-footer">
    <p>
      <a href="#">torna su</a>
    </p>
	
	
	
  </footer>
	
	
	
  </main><!-- /.container -->
	
=======

  </main><!-- /.container -->

  <footer class="blog-footer">
    <p>
      <a href="#">torna su</a>
    </p>
  </footer>
>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../../dist/js/bootstrap.min.js"></script>
  <script src="../../../../assets/js/vendor/holder.min.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
<<<<<<< HEAD
	
	<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js%22%3E</script>
=======
>>>>>>> bc9e473a35018a79c15f3d284d7371166c6be37d
</body>

</html>