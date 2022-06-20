<style>

</style>
<?php
require_once "connection.php";
require_once "header.php";
// require_once "stickymenu.php";
?>
<?php

    if(isset($_REQUEST['signin']))
  {
    $userid=$_POST['email1'];
     $psw=$_POST['psw1'];
     
     $q=$con->query("SELECT * FROM user_register WHERE email like '$userid' and password='$psw'"); 
    $rdata=mysqli_fetch_array($q);
    
    if($rdata[0]=='')
    {
        echo "<script>alert('Emailid or password is invalid please try again!');</script>";
    }
     else{  
         if($rdata[8]!=0)         {
             header("location:403");
         }
         else{
         $_SESSION['userid']=$email;
         $id=$_SESSION['userid'];
         echo "<script>alert($id);</script>";
        //  $_SESSION['psw']=$psw;
            if(isset($_REQUEST[rem])){
                   setcookie("userid",$rdata[3],time() + 60 * 60 * 24 *30);
                   setcookie("password",$rdata[5],time() + 60 * 60 * 24 *30);
            }
            else
            {
                if(isset($_COOKIE['userid']))
                {
                    setcookie("userid","",time()-1);
                    setcookie("password","",time()-1);
                }
            }
            $_SESSION['userid']=$rdata[0];
            $_SESSION['username']=$rdata[1]."".$rdata[2];
            $_SESSION['logintime']=date('d-m-y h:i:s');
            $_SESSION['lastlogin']=$rdata[7];
            header("location:user_master_content.php");    
        }    
     }
}
?>


<?php
$uname=$_POST['username'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$psw=$_POST['psw'];
$mbo=$_POST['mobilenumber'];
$lastlogin = date('d-m-Y h:i:s');
if(isset($_POST['signup']))
{
      $in=$con->query("insert into user_register values('$uname','$fname','$lname','$email','$gender','$psw','$mbo','$lastlogin',0)");
}
?>


<body class="bg-animation b1" onload="code()">
    <ul class="bg-animation-box">
        <li class="circle-box"></li>
        <li class="corners-box-20"></li>
        <li class="circle-box"></li>
        <li class="corners-box-20"></li>
        <li></li>
        <li class="corners-box-35"></li>
        <li class="circle-box"></li>
        <li></li>
    </ul>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <div class="container con1" id="container" style="margin:auto;font-size: 15px; margin-top: 100px;margin-bottom: 100px;">
        <div class="form-container sign-up-container">
            <!-- registration form -->
            <form method="post" onsubmit="return checkpass()">
                <h1>Create Account</h1>

                <input type="text" placeholder="userid" pattern="^[0-9a-zA-Z]{6,16}$" name="username" />
                <lebale>user id should be between 6 to 16</lebale>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="fName" pattern="^[a-zA-Z]*$" name="fname" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="lName" pattern="^[a-zA-Z]*$" name="lname" />
                    </div>
                </div>
                <input type="email" placeholder="Email" name="email" />
                <div class="row">

                    <div class="col-md-4" style="margin-top:15px;">
                        Gender:
                    </div>
                    <div class="col-md-3">
                        <input type="radio" name="gender" value="male">male
                    </div>
                    <div class="col-md-4">
                        <input type="radio" name="gender" value="female">female
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-10">
                        <input type="password" id="password" placeholder="Enter Password" name="psw">
                    </div>
                    <div class="col-md-1">
                        <i id="togglePassword" class="fa fa-eye" style="margin-top:13px;"></i>
                    </div>
                    <div class="col-md-10">
                        <input type="password" id="password1" placeholder="Enter confirm Password" name="psw">
                    </div>
                    <div class="col-md-1">
                        <i id="togglePassword1" class="fa fa-eye" style="margin-top:13px;"></i>
                    </div>

                </div>
                <input id="mobiledata" class="mno" placeholder="enter contact number" name="mobilenumber" type="text"
                    autofocus="" maxlength="10" class="m_no" required>
                <div class="row">
                    <div class="col-md-5">
                        <input type="text" id="captch" />
                    </div>
                    <div class="col-md-2">
                        <img src="img/captcha.png" style="height:35px;" onclick="code();">
                    </div>

                    <div class="col-md-5">
                        <input type="text" id="ccaptch" />
                    </div>
                </div>
                <button name="signup" class="btnlogin">Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <!-- login form -->
            <form method="post">
                <h1>Sign in</h1>

                <span>or use your account</span>
                <?php
                     if(isset($_COOKIE['userid']))
                     {
                ?>
                <input type="email" placeholder="Email" name="email1" value="<?php echo $_COOKIE['userid'];?>" />
                <?php
                     }
                    else{
                        ?>
                <input type="email" placeholder="Email" name="email1" />
                <?php
                    }
?>
                <div class="row">
                    <div class="col-md-10">

                        <?php
                     if(isset($_COOKIE['password']))
                     {
                ?>
                        <input type="password" id="password2" placeholder="Enter Password" name="psw1"
                            value="<?php echo $_COOKIE['password'];?>">
                        <?php
                     }
                    else{
                        ?>
                        <input type="password" id="password2" placeholder="Enter Password" name="psw1">
                        <?php
                    }
                   ?>
                    </div>
                    <div class="col-md-1">
                        <i id="togglePassword2" class="fa fa-eye" style="margin-top:13px;"></i>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <?php
                     if(isset($_COOKIE['userid']))
                     {
                ?>
                        <input type="checkbox" class="checkmark" name="rem" checked>
                    </div>
                    <div class="col-md-8">remember&nbsp;me</div>
                    <?php
                     }
                     else
                     {
                         ?>
                    <input type="checkbox" class="checkmark" name="rem">
                </div>
                <div class="col-md-8">remember&nbsp;me</div>
                <?php 
                     }
                     ?>
        </div>
        <a href="forgot_password.php">Forgot your password?</a>
        <button name="signin" class="btnlogin">Sign In</button><br>
        </form>
    </div>


    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost btnlogin" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost btnlogin" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
    </div>

</body>
<?php
 require_once "script.php";
 require_once "footer.php";
 ?>