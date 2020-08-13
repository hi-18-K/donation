<?php
  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $amount= $_POST['amount'];

  include 'instamojo/Instamojo.php';
  $api = new Instamojo\Instamojo('', '', '');

  try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Donation for Educational purpose",
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
        "phone" => $phone,
        "send_sms" => true,
        "redirect_url" => "https:// /thankyou.php"
        //"webhook" =>
        ));
        //print_r($response);
        $pay_url=$response['longurl'];
        header("location:$pay_url");
  }
  catch (Exception $e) {
      print('Error: ' . $e->getMessage());
  }
?>
