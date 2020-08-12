<?php
  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $amount= $_POST['amount'];

  include 'instamojo/Instamojo.php';
  $api = new Instamojo\Instamojo('test_ee8518b463e42929f58388e9608', 'test_e50121eb82c92dbf67582c8811f', 'https://test.instamojo.com/api/1.1/');

  try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Donation for Educational purpose",
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
        "phone" => $phone,
        "send_sms" => true,
        "redirect_url" => "https://donation-demo.herokuapp.com/thankyou.php"
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
