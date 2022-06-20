<?php
require_once "header.php";
?>
<?php
require_once "connection.php";


if($_GET['cid']=="")
{
   header('location:index');
}
else
{
$id=$_GET['cid'];

$r=$con->query("select * from courses_upload where uploadcourseid = $id");
$rdata=mysqli_fetch_array($r);

if($rdata[7]==0)
{
    $_SESSION['courseid']=$_GET['cid'];
    header('Location:videos_page');
    
}
else
{
?>

<style>
    
.d11 input {
    width: 70%;
    line-height: 50px;
    border: none;
    border-bottom: 3px solid black;
}

.col-md-6.d11 {
    box-shadow: 0 10px 10px -5px;
    border-top: 8px solid maroon;
    border-radius: 10px;
    margin: auto;
}

.s1 {
    margin-left: 15%;
    margin-top: 3%;
    width: 70%;
    border: none;
    border-bottom: 3px solid black;
}

.snip1348 {
    font-family: 'Raleway', Arial, sans-serif;
    border: none;
    border-radius: 5px;
    color: #000000;
    cursor: pointer;
    padding: 8px 150px 17px;
    display: inline-block;
    margin: 25px 25px;
    font-weight: 300;
    outline: none;
    position: relative;
    font-size: 21px;
    background-image: -webkit-linear-gradient(bottom, #262626 0px, #404040 10px, #262626 10px, #333333 100%);
    /* background-image: linear-gradient(to top, #262626 0px, #404040 10px, #262626 10px, #333333 100%); */
    /* background-image: linear-gradient(to top, #4f0808 0px, #df0707 10px, #f8f5f5 10px, #f8f8f8 100%); */
    background-image: linear-gradient(to top, #761818 0px, #8f0e0e 10px, #f8f5f5 10px, #f8f8f8 100%);
    box-shadow: 0 10px 10px -5px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.snip1348:after {
    content: "";
    position: absolute;
    height: 10px;
    right: 50%;
    left: 50%;
    bottom: 0;
    border-radius: 0 0 5px 5px;
    background-color: #ed2121;
    mix-blend-mode: color;
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
}

.snip1348:hover:after,
.snip1348.hover:after {
    left: 0%;
    right: 0%;
}

.snip1348:active:after {
    height: 100%;
    -webkit-transition: 0.05s;
    transition: 0.05s;
}

.razorpay-payment-button{
    margin-left: 328px;
    padding: 8px;
    font-size: 18px;
    font-weight: 600;
    width: 341px;
    border-radius: 5px;
    border: none;
    border-bottom: 7px solid #910d0d;
}   
    </style>
    <?php
    if($_SESSION['userid']=="")
    {
      header("location:user_login");
    }
    else{
    

$userid=$_SESSION['userid'];

$r=$con->query("select * from user_register where userid = '$userid'");
$rowpay=mysqli_fetch_array($r);

$cid=$_GET['cid'];
$_SESSION['cid']=$_GET['cid'];

$r1=$con->query("select * from courses_upload where uploadcourseid ='".$cid."'");
// $r1=$con->query("select * from courses_upload where uploadcourseid =2");


$rowpay1=mysqli_fetch_array($r1);
// $_SESSION['t_id']=$rowpay1[1];

?>

<?php
if(isset($_POST['btnpayment']))
{
  $bid=$_REQUEST['bankname'];

  $row1=$con->query("select * from bank where bankid like $bid");
  $bank=mysqli_fetch_array($row1);
  
  $ifsc=$_REQUEST['ifsc'];
  $date = date('d-m-Y h:i:s');

// $intransaction=$con->query("insert into transaction values(0,$cid,100,$bank[0],'$ifsc',0,'$date')");
$amt=$rowpay1[7];
// echo "$amt";
$gstamt=$amt+($amt*(3/100));
$paymentcode=uniqid();
$intransaction=$con->query("insert into transaction values(0,$cid,$gstamt,$bank[0],'$ifsc','$paymentcode','$date')");


$inbill=$con->query("insert into bill values(0,'$userid',$cid,$gstamt,'$date')");
$_SESSION['courseid']=$cid;

 header("location:videos_page");


}
?>
<div class="container">
     <div class="row">
        <div class="col-md-6 d11">
            <center>
            <form method="post">
                <h1>checkout data</h1>
                
                <h2><?php echo $rowpay1[4];?></h2>

            <div>
            <input type="text" value="<?php echo $rowpay[1].$rowpay[2];?>">
            </div>
            
            <div>
            <input type="text" value="<?php echo $rowpay[3];?>">
            </div>
            <div>
            <input type="text"  value="<?php echo $rowpay[6];?>">
            </div>
            <div>
            <input type="text"  value="<?php echo $rowpay1[7];?>">
            </div>
            <div >
            <select class="s1"  name="bankname" required>
            <option >-----select bank---</option>
                <?php
                $row1=$con->query("select * from bank");
                while($rowsub=mysqli_fetch_array($row1))
                {
                ?>
                  <option value="<?php echo $rowsub[0];?>"><?php echo $rowsub[1]; ?></option>

             <?php
           
            }
            ?>
           </select>
            </div>
            
            <div>
            <input type="text" name="ifsc" placeholder="Enter IFSC code" pattern="^[A-Z]{4}0[A-Z0-9]{6}$" required>
            </div>
            
            
            <!-- <button type="submit" class="snip1348" name="btnpayment">Pay now</button> -->
            <!-- <a href="videos_page.php"><button type="submit" class="snip1348" name="btnpayment">Pay now</button></a> -->
            <button type="submit" class="snip1348" name="btnpayment">Pay now</button>
            </form>
</center>
            
        </div>
        <div class="col-md-6">
                    <img src="img/payment.gif"/>
        </div>
    </div>
</div>
<?php
}

?>

<!-- pay with razerpay -->
<?php

$apiKey = "rzp_test_NLKgtxPpBKqPiH";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo 100*100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.
    margin-left: 397px;
data-buttontext="Pay with Razorpay"
    data-name="PathOfSkill"
    data-description="Education"
    data-image="img/online-cource.png"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
<?php
require_once "script.php";
?>
<?php
}
}
?>