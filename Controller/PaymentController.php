<?php

require_once '../vendor/autoload.php';



    try{
      $stripe = new \Stripe\StripeClient("sk_test_51J7HY3JtaAsLpj8sP2PaGq4IcMZhjQpU5WFwFDwzDGaYVwuRxDCC3PKwaIR0PlSFWt5ZFiwxICivso3cym5fo7fn00FsTUBtgp");
      $card_data =['card' => [
          'number' => $_POST['cardnumber'],
          'exp_month' =>  (int)$_POST['expirationmonth'],
          'exp_year' => (int)$_POST['expirationyear'],
          'cvc' => $_POST['securitycode'],
        ]];
      $token = $stripe->tokens->create($card_data);

      $charges = $stripe->charges->create([
        'amount' => 100*((int)$_POST['amount']),
        'currency' => 'USD',
        'source' => 'tok_mastercard',
      ]);
      $detail = [
        "amount" => $charges->amount/100,
        'service' =>'stripe'
      ];
      session_start();

      $_SESSION['details'] = $detail;
      $project_id = $_POST["id"];
      header("Location:../payment.php?id=$project_id");
    }
    catch(\Exception $e)
    {
      session_start();
      $_SESSION['error'] = $e->getMessage();
      $project_id = $_POST["id"];
      $amount = $_POST['amount'];
      var_dump("Location:../payment.php?id=$project_id&amount=$amount");
      header("Location:../payment.php?id=$project_id&amount=$amount");
    }
?>