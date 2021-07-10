<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51J7HY3JtaAsLpj8sP2PaGq4IcMZhjQpU5WFwFDwzDGaYVwuRxDCC3PKwaIR0PlSFWt5ZFiwxICivso3cym5fo7fn00FsTUBtgp');
$id = $_POST['id'];
$amountURL = $_POST["amount"];
$amount = base64_decode($_POST['amount']);
$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'USD',
      'product_data' => [
          
        'name' => 'Order',
      ],
      'unit_amount' => 100*(int)$amount,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => "https://forms.globaltech360.com?id=$id&amount=$amountURL",
  'cancel_url' => 'http://example.com/cancel',
]);

?>

<html>
  <head>
    <title>Buy cool new product</title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <script>
      var stripe = Stripe('pk_test_51J7HY3JtaAsLpj8sxmbUrtTl2jAYFbrHeCOW8Xv1d3Z3ciDdOkD1QvK96VeTqicozN0OGYS2dVu637DlG9Oshcq100TimdidAf');
      document.addEventListener('DOMContentLoaded', function(e) {
        e.preventDefault();
        stripe.redirectToCheckout({
          sessionId: "<?php echo $session->id; ?>"
        });
      });
    </script>
  </body>
</html>