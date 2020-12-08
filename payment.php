<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
.checkoutForm{
  background-color: rgba(0,0,0,0.25);
  color: #F39F1A;
  height: 1200px;
  width:500px;
  font-size:20px;
  margin-left: 3em;
  display:inline-block;

}

.cart{
    background-color: rgba(0,0,0,0.25);
  color: #F39F1A;
  height: 200px;
  width: 500px;
  font-size:20px;
    float:right;
    display:inline-block;
}

.checkoutHeader{
    color: lightgray;
    font-size: 35px;
    text-align: center;
    display:inline-block;
    margin-left: 6em;
    font-weight: bold;
}

.checkoutLabel{
    font-size: 28px;
    color: #F39F1A;
    text-align: center;
}

.checkoutInput{
    color:#9c6000;
    border: 2px solid red;
    border-radius: 6px;
}
::placeholder { 
  color: lightgray;
  opacity: 1; 
}

i{
    font-size:80px; 

}

.icon-container {
  margin-bottom: 20px;
  padding: 20px 0;
  font-size: 30px;
  margin-left: 2em;
}

.inputCard{
    margin-left: 2em;
    font-size: 30px;
}
.checkoutSelect{
    background-color:#F39F1A;
    color: white;
    font-size: 16px;
    border: 1px solid #F39F1A;
    height:28px;
    border-radius: 6px;
}

.checkoutButton {
  background-color:rgb(211, 182, 21);
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 475px;
  border-radius: 6px;
  cursor: pointer;
  font-size: 17px;
}

.checkoutButton:hover {
  background-color: #F39F1A;
}

.cardName{
    color:rgb(211, 182, 21);
}

.total{
    font-size: 28px;
    color: lightgray;
}

.amount{
    color:lightgray;
}

.back{
    font-size: 20px;
    color: white;
    text-decoration: none;
    margin-left: 1em;
}

.valid{
    color:green;
    font-size: 15px;
}

.error{
    color:red;
    font-size: 15px;
}
    </style>

    <script type="text/javascript">


        function validateForm()
        {

        var fullname=document.getElementById("checkoutName").value;
        var email=document.getElementById("checkoutEmail").value;
        var address=document.getElementById("checkoutAddress").value;
        var city=document.getElementById("checkoutCity").value;
        var postal=document.getElementById("checkoutPostal").value;
        var cardName=document.getElementById("checkoutCardName").value;
        var cardNumber=document.getElementById("checkoutCardNumber").value;
        var cardMonth=document.getElementById("checkoutMonth").value;
        var cardYear=document.getElementById("checkoutYear").value;
        var cardCVV=document.getElementById("checkoutCVV").value;

        
        var postalPattern= /[A-Za-z]\d[A-Za-z][ ]\d[A-Za-z]\d/;
        var namePattern=/[A-Za-z]+/;
        var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
        var addressPattern=/^\d+\s[A-z]+/;
        var cityPattern=/[A-z]+/;
        var cardNumberPattern=/[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}/;
        var cvvPattern=/[0-9][0-9][0-9]/;
        var yearPattern=/[0-9]{4}/;
        var isValid=true;

            if(fullname=="" || email=="" || address=="" || city=="" || postal=="" || cardName=="" || cardNumber==""
            || cardMonth=="Month" || cardYear=="" || cardCVV=="")
            {
                alert ("Error: Please fill out all fields.");
                return false;
            }
            else
            {
                 
                if(!namePattern.test(fullname))
                {
                     document.getElementById("errorName").innerHTML="*Error: Invalid Name. Cannot contain digits or special characters";
                     document.getElementById("checkoutName").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validName").innerHTML="Valid Name";
                }

                if(!emailPattern.test(email))
                {
                     document.getElementById("errorEmail").innerHTML="*Error: Invalid Email";
                     document.getElementById("checkoutEmail").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validEmail").innerHTML="Valid Email";
                }



                if(!addressPattern.test(address))
                {
                     document.getElementById("errorAddress").innerHTML="*Error: Invalid Address";
                     document.getElementById("checkoutAddress").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validAddress").innerHTML="Valid Address";
                }


                if(!cityPattern.test(city))
                {
                     document.getElementById("errorCity").innerHTML="*Error: Invalid City Name";
                     document.getElementById("checkoutCity").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validCity").innerHTML="Valid City Name";
                }


                if(!postalPattern.test(postal))
                {
                     document.getElementById("errorPostal").innerHTML="*Error: Invalid Postal Code";
                     document.getElementById("checkoutPostal").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validPostal").innerHTML="Valid Postal Code";
                }



                if(!namePattern.test(cardName))
                {
                     document.getElementById("errorCardName").innerHTML="*Error: Invalid Card Name. Cannot contain digits or special characters";
                     document.getElementById("checkoutCardName").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validCardName").innerHTML="Valid Card Name";
                }


                if(!cardNumberPattern.test(cardNumber))
                {
                     document.getElementById("errorCardNumber").innerHTML="*Error: Invalid Card Number";
                     document.getElementById("checkoutCardNumber").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validCardNumber").innerHTML="Valid Card Number";
                }

                if(!yearPattern.test(cardYear))
                {
                     document.getElementById("errorCardYear").innerHTML="*Error: Invalid Card Year";
                     document.getElementById("checkoutCardYear").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validCardYear").innerHTML="Valid Card Year";
                }

                if(!cvvPattern.test(cardCVV))
                {
                     document.getElementById("errorCVV").innerHTML="*Error: Invalid CVV";
                     document.getElementById("errorCVV").innerHTML="Must be 3 digits, with no special characters.";
                     document.getElementById("checkoutCVV").value="";
                    isValid=false;
                }

                else{
                 document.getElementById("validCVV").innerHTML="Valid CVV";
                }
            }
            return isValid;
        }
    </script>
</head>
<body>

    <div id="main">
        <a class="back" href="my-account.php"><img src="https://image.flaticon.com/icons/png/512/271/271218.png" height="30" width="30"></a>
    </br></br></br>
    <div class="checkoutTitle">
    <label class="checkoutHeader">Checkout Form</label>
    </br>  </br>
    </div>


    <div class="cart">
        <table>
            <tr>
                <td colspan="3">

                </td>
            </tr>
            <tr>
                <td class="checkoutLabel" colspan="2">
                    Your Cart 
                </td>
                <td>
                    <i class="fa fa-shopping-cart" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                </td>
                <td class="total">
                    Total
                </td>
            </tr>

            <tr>
            <!--Add PHP here-->
               <td class="visibilityImg" colspan="1">
                    <img src="img/visibilityicon.png" width="50px" height="50px">
                </td>
                <td colspan="2">
                    <?php $_GET["package"] ?>
                </td>

                <td class="amount">
                    <?php 
                        if ($_GET["package"] === "visibility-card") {
                            echo("4.99 $");
                        } else {
                            echo("9.99 $");
                        }
                    ?>
                </td>

            </tr>
        </table>
    </div>

     <div class="checkoutForm">
         <form onsubmit="return validateForm();" method="POST" action=<?php echo("business_page.php?businessName=".$_GET["businessName"]); ?>>
             <table>
                 <tr>
                     <td class="checkoutLabel">
                         Billing Address
                     </td>
                 </tr>
                 <tr>
                    <td>
                        <i class="fa fa-user" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutName">Full Name</label></br>
                        <input type="text" class="checkoutInput" id="checkoutName" name="checkoutName" placeholder="Enter your full name">
                        <p id="errorName" class="error"></p>
                        <p id="validName" class="valid"></p>
                    </td>
                 </tr>

                 <tr>
                    <td>
                        <i class="fa fa-envelope" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutEmail">Email</label></br>
                        <input type="text" class="checkoutInput" id="checkoutEmail" name="checkoutEmail" placeholder="Enter your email address">
                        <p id="errorEmail" class="error"></p>
                        <p id="validEmail" class="valid"></p>
                    </td>
                 </tr>

                 <tr>
                    <td>
                        <i class="fa fa-home" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutAddress">Address</label></br>
                        <input type="text" class="checkoutInput" id="checkoutAddress" name="checkoutAddress" placeholder="Enter your address">
                        <p id="errorAddress" class="error"></p>
                        <p id="validAddress" class="valid"></p>
                    </td>
                 </tr>

                 <tr>
                    <td>
                        <i class="fa fa-home" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutCity">City</label></br>
                        <input type="text" class="checkoutInput" id="checkoutCity" name="checkoutCity" placeholder="Enter your city">
                        <p id="errorCity" class="error"></p>
                        <p id="validCity" class="valid"></p>
                    </td>
                 </tr>

                 <tr>
                    <td>
                        <i class="fa fa-home" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutPostal">Postal Code</label></br>
                        <input type="text" class="checkoutInput" id="checkoutPostal" name="checkoutPostal" placeholder="Enter your postal code">
                        <p id="errorPostal" class="error"></p>
                        <p id="validPostal" class="valid"></p>
                    </td>
                 </tr>
                </br>

                <tr>
                    <td class="checkoutLabel">
                        Payment Method
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="checkoutCardType">Select Card Type</label></br></br>
                        <input type="radio" name="checkoutCardType" id="checkoutCardType" value="visa" checked>  <i class="fa fa-cc-visa" style="color:navy;"></i><label class="cardName"> Visa</label></br>
                        <input type="radio" name="checkoutCardType" id="checkoutCardType" value="amex">  <i class="fa fa-cc-amex" style="color:blue;"></i><label class="cardName"> American Express</label></br>
                        <input type="radio" name="checkoutCardType" id="checkoutCardType" value="mastercard">  <i class="fa fa-cc-mastercard" style="color:red;"></i><label class="cardName"> Mastercard</label></br>
                        <input type="radio" name="checkoutCardType" id="checkoutCardType" value="discover">  <i class="fa fa-cc-discover" style="color:orange;"></i><label class="cardName"> Discover</label></br>
                    </td>
                 </tr>

                 <tr>
                    <td>
                        <i class="fa fa-user-circle" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutCardName">Name on Card</label></br>
                        <input type="text" class="checkoutInput" id="checkoutCardName" name="checkoutCardName" placeholder="Enter the name on your card">
                        <p id="errorCardName" class="error"></p>
                        <p id="validCardName" class="valid"></p>
                    </td>
                 </tr>

                 <tr>
                    <td>
                        <i class="fa fa-id-card-o" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutCardNumber">Card Number</label></br>
                        <input type="text" class="checkoutInput" id="checkoutCardNumber" name="checkoutCardNumber" placeholder="Enter the name on your card">
                        <p id="errorCardNumber" class="error"></p>
                        <p id="validCardNumber" class="valid"></p>
                    </td>
                 </tr>

                 <tr>
                    <td>
                        <i class="fa fa-calendar" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutName">Expiration Date</label></br>
                        <select name="checkoutMonth" id="checkoutMonth" class="checkoutSelect">
                            <option name="checkoutMonth" id="checkoutMonth" value="select" checked>Month</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="january">January</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="february">February</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="march">March</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="april">April</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="may">May</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="june">June</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="july">July</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="august">August</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="semptember">September</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="october">October</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="november">November</option>
                            <option name="checkoutMonth" id="checkoutMonth" value="december">December</option>
                        </select>

                        <input style="width: 80px"; type="text" class="checkoutInput" id="checkoutYear" name="checkoutYear" placeholder="Year">
                        <p id="errorCardYear" class="error"></p>
                        <p id="validCardYear" class="valid"></p>
                    </td>
                 </tr>

                 <tr>
                    <td>
                        <i class="fa fa-credit-card" style="font-size:36px; color: rgb(211, 182, 21)"></i>
                        <label for="checkoutCVV">CVV</label></br>
                        <input type="text" class="checkoutInput" id="checkoutCVV" name="checkoutCVV" placeholder="Enter the Card's CVV">
                        <p id="errorCVV" class="error"></p>
                        <p id="validCVV" class="valid"></p>
                    </td>
                 </tr>

                <tr>
                    <td>
                        <input type="submit" value="Process Payment" name="submitCheckout" id="submitCheckout" class="checkoutButton">
                    </td>
                </tr>

                <tr>

                <td>
                <?php
                 if(isset($_POST['submitCheckout']))
                {

                     echo "Thank you, your payment has been processed. ";
                     echo "A receipt is being sent to the email"." ".$_POST['checkoutEmail'];
                     $myfile = fopen("paymentCredentials.txt", "a") or die("Unable to open file!");
                     $txt = "\nFull name: ".$_POST['checkoutName']."\n";
                     $txt= $txt."Email: ".$_POST['checkoutEmail']."\n";
                     $txt=$txt."Address: ".$_POST['checkoutAddress']."\n";
                     $txt= $txt."City: ".$_POST['checkoutCity']."\n";
                     $txt= $txt."Postal Code: ".$_POST['checkoutPostal']."\n";
                     $txt= $txt."Card Type: ".$_POST['checkoutCardType']."\n";
                     $txt= $txt."Name on Card: ".$_POST['checkoutCardName']."\n";
                     $txt= $txt."Card Number: ".$_POST['checkoutCardNumber']."\n";
                     $txt= $txt."Expiration month: ".$_POST['checkoutMonth']."\n";
                     $txt= $txt."Expiration year: ".$_POST['checkoutYear']."\n";
                     $txt= $txt."CVV: ".$_POST['checkoutCVV']."\n";
                 
                     fwrite($myfile, $txt);
                     fclose($myfile);

                     include 'PHPMailer.php';
                     include 'SMTP.php';
                     require 'PHPMailerAutoload.php';
                     
                     date_default_timezone_set('Etc/UTC');
                     $mail = new PHPMailer;                        
                     
                     $mail->isSMTP();  
                     //$mail->SMTPDebug=2;                                    
                     $mail->Host = 'smtp.gmail.com';                         
                     $mail->SMTPAuth = true;                              
                     $mail->Username = 'jdoe0501632@gmail.com';                
                     $mail->Password = 'soen_287';                           
                     $mail->SMTPSecure = 'tls';                            
                     $mail->Port = 587;                                   
                     
                     $mail->setFrom('jdoe0501632@gmail.com', 'Shop514');
                     $mail->addAddress('jdoe0501632@gmail.com');     
                     
                     //$mail->addAttachment('/var/tmp/file.tar.gz');         
                     //$mail->addAttachment('welcome.jpg');    
                     $mail->isHTML(true);                                 
                     
                     $mail->Subject = 'Transaction Receipt';
                     $mail->Body    = '<h3>Dear '.$_POST['checkoutName'].", "."<br><br>"."This is a confirmation of your purchase of 
                     the Visibility package from Shop514.<br>Your reference number is D123W1432."."<br>"."<br>Best regards, <br>Shop514 Team<h3>";
                     
                     if(!$mail->send()) {
                         echo 'Message could not be sent.';
                         echo 'Mailer Error: ' . $mail->ErrorInfo;
                     } 

                }
                ?>
                </td>
                </td>
             </table>
         </form>


    </div>
    </body>
    </html>


