<?php
setcookie("utenteloggato",-1, time() + (1800), "/");
setcookie("utente",$record["id"],time()+(1800),"/");
header("Location: index.php");
?>