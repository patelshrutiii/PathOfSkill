<?php require_once "connection.php"; ?>


<html>
<head>
<?php 
require_once "header.php"; 
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .log {
    border-left: 1px solid;
    margin: auto;
    border: none !important;
    margin-top: 100px;
    padding-top: 50px;
    padding-bottom: 50px;
    border-radius: 4px;
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
}
.mno {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid rgb(17, 17, 17);
    border-radius: 4px;
}
.btnotp {
    height: 40px;
    border: none;
    background-color: #0f0f79;
    width: 243px;
    border-radius: 5px;
    color: white;
    font-size: 18px;
}
    </style>
<?php
if(isset($_POST['btn1']))
{
    $email=$_POST['email1'];
     $q=$con->query("select * from user_register WHERE email='$email'"); 
    $rdata=mysqli_fetch_array($q);
    $_SESSION['pass']=$rdata[5];

    if($rdata[0]=='')
    {
        echo "<h1>User does not exist!</h1>";
    }
    else{
        require 'PHPMailerAutoload.php';
require_once 'class.smtp.php';
// define('EMAIL','support-mail@kayaakalp.in')

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtpout.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'support-mail@kayaakalp.in';                 // SMTP username
$mail->Password = 'bhagvati@1610';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('support-mail@kayaakalp.in', 'pathofskill');
$mail->addAddress($_REQUEST['email1'], 'Joe User');     // Add a recipient
$_SESSION['emialpass']=$_REQUEST['email1'];
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('support-mail@kayaakalp.in', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$randnum =rand(10,99).rand(10,99);
$_SESSION['randotp']=$randnum;
$mail->Body = $randnum.'<img sky.jpg" alt="Logo" title="Logo" style="display:block" width="200" height="87" /> <h1 style=color:#fff;border-radius:5px;background-image:linear-gradient(60deg,#3498DB,#D9EDF7);font-family:gudea;>pathofskill</h1>
                    <div>hey!</div><div style=margin-left:30%;border-radius:5px;height:200px;width:400px;background-color:#EDECE6;>We are
                     really happy you came to Pathofskill to share your passion and knowledge.
                    
                    <br>Teach on,<br>
                    
                    The Pathofskill Instructor Team
                    </div>
                    <br>
                
                    <br>
                    <div style=width=100%;background-color:gray;></div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate icon-change"><a href="mailto:dreamlane2021@gmail.com" class="twit-hover"><span
                                    class="ti-twitter"></span></a></li>
                        <li class="ftco-animate icon-fb"><a href="https://www.facebook.com/Dreamlane-A-better-learning-future-starts-hear-101951868546749"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate icon-insta"><a href="https://www.instagram.com/dreamlanerj/"><span class="ti-instagram"></span></a></li>
                    </ul>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
    }
}
?>


<?php

if(isset($_REQUEST['btnotp']))
{
    $myotp=$_REQUEST['otp1'].$_REQUEST['otp2'].$_REQUEST['otp3'].$_REQUEST['otp4'];

    if($_SESSION['randotp']==$myotp)
    {
         unset($_SESSION['randotp']);
         
         
        header('location:login_demo.php');
        echo "<script>alert('we sent your password into your email please check your mail');</script>";
        require 'PHPMailerAutoload.php';
        require_once 'class.smtp.php';
// define('EMAIL','support-mail@kayaakalp.in')

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtpout.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'support-mail@kayaakalp.in';                 // SMTP username
$mail->Password = 'bhagvati@1610';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('support-mail@kayaakalp.in', 'pathofskill');
$mail->addAddress($_SESSION['emialpass'], 'Joe User');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('support-mail@kayaakalp.in', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$passmail=$_SESSION['pass'];
echo $_SESSION['pass'];
$mail->Body = 'this is your password from pathofskill <br><br>'.$passmail;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    unset($_SESSION['pass']);
    unset($_SESSION['emialpass']);
    echo 'Message has been sent';
}

}
    else{

        echo 'please enter correct otp';
    }
}
?>
<body>
 
<div class="container">
<div class="row" style="margin-top:50px;    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
<div class="col-md-6" style="background-image: url('img/pass1.jpg');background-repeat: no-repeat;height:600px;width:600px">
</div>
<!-- <div class="col-md-1"></div> -->
<div class="col-md-5">
     <div class="log">
         <center>
        <h3 class="text-center" style="color : blue; font-size : 25px;">Forgot password?</h3>
       <form method="post"> 
           
        <div>           
          <div class="form-group form-floating-label">
           <input type="text" class="mno" name="email1" placeholder="enter gmail">
            <!-- <input id="mobiledata" class="mno" name="mobilenumber" type="text" autofocus="" maxlength="10" class="m_no" required> -->

          </div>
            <div class="otpdiv">
              <button name="btn1" class="btnotp">GET OTP</button>    
                    
            </div>
        </div>          
       </form>
                
               

        <form method="post">
            <div class="otp">
                <div>
                    <input type="text" class=" form-control-lg txtotp" placeholder="-" name="otp1" pattern="^[0-9]{1}$" required style="width:44px;height:42px;border:1px solid #d7d7d7;">
                    <input type="text" class=" form-control-lg txtotp" placeholder="-" name="otp2" pattern="^[0-9]{1}$" required style="width:44px;height:42px;border:1px solid #d7d7d7;">
                    <input type="text" class=" form-control-lg txtotp" placeholder="-" name="otp3" pattern="^[0-9]{1}$" required style="width:44px;height:42px;border:1px solid #d7d7d7;">
                    <input type="text" class=" form-control-lg txtotp" placeholder="-" name="otp4" pattern="^[0-9]{1}$" required style="width:44px;height:42px;border:1px solid #d7d7d7;">
               </div>
            <!-- <div class="otpdiv"> -->
            <button type="" name="btnotp" value="Sign In" class="btnotp" style="margin-top:20px;">Sign In</button>
         <!-- </div> -->
            </div>
        
        </form>
        </center>
        </div>
   </div>
  </div>
</div>
</body>    
    
    
    <?php
     require_once "script.php"; 
    ?>
    </html>
