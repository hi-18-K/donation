<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thanks for donating !</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style_thankyou.css">
  </head>
  <body>

    <div class="container">

      <div class="row justify-content-center">
        <h5 class="success_D">You have successfully donated for our Organization! </h5>
        <div class="col-md-8">
          <h1 class="text-center">Thankyou for donating !</h1>

          <?php
            include 'instamojo/Instamojo.php';
            $api = new Instamojo\Instamojo('test_ee8518b463e42929f58388e9608', 'test_e50121eb82c92dbf67582c8811f', 'https://test.instamojo.com/api/1.1/');

            $pay_id=$_GET['payment_request_id'];

            try{
              $response=$api->paymentRequestStatus($pay_id);

              ?>

              <h2 class="text-center">Payment Details</h2>
              <table class="table table-bordered text-center" id="table_one">
                <tr>
                  <th>Payment ID: </th>
                  <td><?= $response['payments'][0]['payment_id']?></td>
                </tr>
                <tr>
                  <th>Payee Name: </th>
                  <td><?= $response['payments'][0]['buyer_name']?></td>
                </tr>
                <tr>
                  <th>Payee Email: </th>
                  <td><?= $response['payments'][0]['buyer_email']?></td>
                </tr>
                <tr>
                  <th>Payee Contact: </th>
                  <td><?= $response['payments'][0]['buyer_phone']?></td>
                </tr>
              </table>
              <?php
            }
            catch(Exception $e){
              print("Error: ". $e->getMessage());
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
