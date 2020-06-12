<?php
    require("./vendor/autoload.php");
    $prezzo=$_POST["prezzo"];
    $descrizione=$_POST["descrizione"];
    $oggetto=$_POST["oggetto"];
    $idProdotto=$_POST["idProdotto"];
    
    // STARTING STRIPE CONFIGURATION
  \Stripe\Stripe::setApiKey("sk_test_51GsvW7GrUpOj4WCBWZhoMjEXS5SM7083ebewncV63ZdfN4CjE5iOO7IxI8UZpXlMtOQb0C0D3FjtbXXGZPMNUt5a006PJQRTQK");

  // Session is an array wich includes the id for the checkout
  $session = \Stripe\Checkout\Session::create([
    'success_url' => "https://cinemarental.herokuapp.com//success.php?idProdotto=$idProdotto",
    'cancel_url' => "https://cinemarental.herokuapp.com//index.php",
    'payment_method_types' => ['card'],
    'line_items' => [
      [
        'name' => "$oggetto",
        'description' => "$descrizione",
        'amount' => intval($prezzo)*100,
        'currency' => 'eur',
        'quantity' => 1,
      ],
    ],
  ]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="progetto.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConfermaPagamento</title>
</head>
<body>
<main role="main">
      <div class="container">
        <div class="row pt-3">
          <div class="col">
            <h5 class="mb-3">Clicca su Conferma per procedere al pagamento, altrimenti clicca indietro...</h5>
            <button id="confirm" class="btn btn-success">Conferma</button>
            <a href="/index.php" class="btn btn-danger">Indietro</a>
            <script src="https://js.stripe.com/v3/"></script>
            <script>
              var stripe=Stripe("<?php echo "pk_test_51GsvW7GrUpOj4WCBpp9yQnQWPHgg0pZwQCJnNNNqr2tHsYuiiADvnQ7vkGrTqT8KrKZnfxKeJ6TpnX3OUeHQmtM900dwLVtGQR"?>");
              var confirmBtn=document.getElementById("confirm");
              confirmBtn.addEventListener("click",function(){
                // Redirects to Stripe checkout page
                stripe.redirectToCheckout({
                  sessionId:"<?php echo $session["id"]?>"
                });
              });
            </script>
          </div>
        </div>
      </div>
    </main>
</body>
</html>