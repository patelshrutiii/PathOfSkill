<?php require_once "connection.php"; ?>

<html style="font-size :18px;">
<head>
<?php require_once "head.php"; ?>
</head>

<?php

if(isset($_REQUEST['btnotp']))
{
    $myotp=$_REQUEST['otp1'].$_REQUEST['otp2'].$_REQUEST['otp3'].$_REQUEST['otp4'];
    if($_SESSION['otp']==$myotp)
    {
        $_SESSION['what']="dashboard";
        echo $_SESSION['what'];
        unset($_SESSION['otp']);
        header('location:dashboard.php');
    }
    else{
        $er=1;
    }
}
?>
<body>
 
<div class="container">
<div class="row">
<div class="col-md-7" style="background-image: url('work1.png');background-repeat: no-repeat;top:100px;height:500px;width:800px">
</div>
<div class="col-md-5 ">
     <div class="log">
         <center>
        <h3 class="text-center" style="color : blue; font-size : 25px;">Log In To PathOfSkill</h3>
            <!-- <div class="login-form"> -->
            <?php 
           if($er==1)
            {
               echo "otp invalid please try again";
            }
            ?>
       <form method="post"> 
           
        <div id="fillme">           
          <div class="form-group form-floating-label">
            <label for="username" class="placeholder">mobile number</label><br>
            <input id="mobiledata" class="mno" name="mobilenumber" type="text" autofocus="" maxlength="10" class="m_no" required>

          </div>
            <div class="otpdiv">
              <button type="button" id="getotp" onclick="finddata('otpmobile',0,<?php echo rand(10,99).rand(10,99);?>);" 
                          name="btnotp" class="btnotp">GET OTP</button>    
                    
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
            <button type="" name="btnotp" value="Sign In" class="btnsignin">Sign In</button>
         <!-- </div> -->
            </div>
        
        </form>
        </center>
        </div>
   </div>
  </div>
</div>
</body>    
    
    
    <?php require_once "script.php"; ?>
    </html>
