<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style_donate.css">
  </head>
  <body>
    <div class="container">
      <h3 class="ml-3">Enter your details:-</h3>
      <form class="ml-5" action="pay.php" method="post" accept-charset="utf-8">
        <table>
          <div class="form-group">
            <tr>
              <td><strong>Name:</strong></td>
              <td><input type="text" name="name" placeholder="Enter your name" required></td>
            </tr>
          </div>
          <div class="form-group">
            <tr>
              <td><strong>Email:</strong></td>
              <td><input type="email" name="email" placeholder="Enter your email" required></td>
            </tr>
          </div>
          <div class="form-group">
            <tr>
              <td><strong>Contact:</strong></td>
              <td><input type="tel" name="phone" placeholder="Enter your contact-number" required></td>
            </tr>
          </div>
          <div class="form-group">
            <tr>
              <td><strong>Amount:</strong></td>
              <td><input type="tel" name="amount" placeholder="Donation amount (in rupees) " required></td>
            </tr>
          </div>
        </table>
        <br>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary btn" value="Donate" >
        </div>
      </form>
    </div>


  </body>
</html>
