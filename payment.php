<?php
$city=$_GET['city'];
$State=$_GET['State'];
$pinCode=$_GET['pinCode'];
$address=$_GET['address'];
include 'database/conn.php';
if (isset($_POST["send"])) {

require __DIR__ . '/vendor/autoload.php';
$sid = "ACb0e6726b3e7a9cfd8d2c19816cdd243e";
$token = "fef5c17a895b9cd9d19d6ac3e49b532a";
$client = new Twilio\Rest\Client($sid, $token);
$message=$client->messages->create(
    // The number you'd like to send the message to
    '+918087585560',
    [
        // A Twilio phone number you purchased at https://console.twilio.com
        'from' => '+16813666904',
        // The body of the text message you'd like to send
        'body' => "Hey Paurush, next Consignment in, ".$city." Address : ".$address." ".$pinCode." ".$State." Thank You"
    ]
);
if($message){
    echo header('Location: success.php');

}else{
    echo "something wents wrong";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link href="paymentform.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  background-color: #f5f5f5;
  font-family: Arial, Helvetica, sans-serif;
}
.wrapper{
  background-color: #fff;
  width: 500px;
  padding: 25px;
  margin: 25px auto 0;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.wrapper h2{
  background-color: #fcfcfc;
  color: #7ed321;
  font-size: 24px;
  padding: 10px;
  margin-bottom: 20px;
  text-align: center;
  border: 1px dotted #333;
}
h4{
  padding-bottom: 5px;
  color: #7ed321;
}
.input-group{
  margin-bottom: 8px;
  width: 100%;
  position: relative;
  display: flex;
  flex-direction: row;
  padding: 5px 0;
}
.input-box{
  width: 100%;
  margin-right: 12px;
  position: relative;
}
.input-box:last-child{
  margin-right: 0;
}
.name{
  padding: 14px 10px 14px 50px;
  width: 100%;
  background-color: #fcfcfc;
  border: 1px solid #00000033;
  outline: none;
  letter-spacing: 1px;
  transition: 0.3s;
  border-radius: 3px;
  color: #333;
}
.name:focus, .dob:focus{
  -webkit-box-shadow:0 0 2px 1px #7ed32180;
  -moz-box-shadow:0 0 2px 1px #7ed32180;
  box-shadow: 0 0 2px 1px #7ed32180;
  border: 1px solid #7ed321;
}
.input-box .icon{
  width: 48px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  color: #333;
  background-color: #f1f1f1;
  border-radius: 2px 0 0 2px;
  transition: 0.3s;
  font-size: 20px;
  pointer-events: none;
  border: 1px solid #00000033;
  border-right: none;
}
.name:focus + .icon{
  background-color: #7ed321;
  color: #fff;
  border-right: 1px solid #7ed321;
  border: none;
  transition: 1s;
}
.dob{
  width: 30%;
  padding: 14px;
  text-align: center;
  background-color: #fcfcfc;
  transition: 0.3s;
  outline: none;
  border: 1px solid #c0bfbf;
  border-radius: 3px;
}
.radio{
  display: none;
}
.input-box label{
  width: 50%;
  padding: 13px;
  background-color: #fcfcfc;
  display: inline-block;
  float: left;
  text-align: center;
  border: 1px solid #c0bfbf;
}
.input-box label:first-of-type{
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-right: none;
}
.input-box label:last-of-type{
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.radio:checked + label{
  background-color: #7ed321;
  color: #fff;
  transition: 0.5s;
}
.input-box select{
  display: inline-block;
  width: 50%;
  padding: 12px;
  background-color: #fcfcfc;
  float: left;
  text-align: center;
  font-size: 16px;
  outline: none;
  border: 1px solid #c0bfbf;
  cursor: pointer;
  transition: all 0.2s ease;
}
.input-box select:focus{
  background-color: #7ed321;
  color: #fff;
  text-align: center;
}
button{
  width: 100%;
  background: transparent;
  border: none;
  background: #7ed321;
  color: #fff;
  padding: 15px;
  border-radius: 4px;
  font-size: 16px;
  transition: all 0.35s ease;
}
button:hover{
  cursor: pointer;
  background: #5eb105;
}
</style>


<body>
    <div class="wrapper">
        <h2>Payment Page</h2>
        <form action="" method="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="First Name" required class="name" name="firstname">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Last Name" required class="name" name="lastname">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Address" required class="name" name="email">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Holder Name" required class="name" name=""cardholdername>
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name" name="cardnumber">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVV" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                <input type="month" placeholder="expiry date" name="expmonth">
                </div>
            </div>
            <?php
            include 'database/conn.php';
            $city=$_GET['city'];
            $State=$_GET['State'];
            $pinCode=$_GET['pinCode'];
            $address=$_GET['address'];
            echo "<div class='input-group'><div class='input-box'><button type='submit' name='send'>PAY NOW</button></div></div>";
            ?>
        </form>
    </div>
</body>

</html>