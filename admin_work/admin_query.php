<?php
require_once "connection.php";
$c1=$con->query("select count(*) from category");
$cc1=mysqli_fetch_array($c1);
$_SESSION['category']=$cc1[0];

if(isset($_REQUEST['btninsert']))
{
    $check=$con->query("select * from category where categoryname like '$_REQUEST[txtcatename]'");
    $checkrow=mysqli_fetch_array($check);
    if($_REQUEST['txtcatename']=="")
    {
      
    }
    else if($checkrow[0]=="")
    {
        $in=$con->query("insert into category values(0,'$_REQUEST[txtcatename]')");
    }
    else{
          $_SESSION['er']=1;
    }
}


if(isset($_REQUEST['btnupdate']))
{
$updatecat=$con->query("update category set categoryname='$_REQUEST[txtcatename]' where categoryid=$_SESSION[rid]");
unset($_SESSION['rid']);
}

//report issue

$c1=$con->query("select count(*) from report_issue");
$cc1=mysqli_fetch_array($c1);
$_SESSION['reportissue']=$cc1[0];

if(isset($_REQUEST['btninsertreport']))
{
    $check=$con->query("select * from report_issue where description like '$_REQUEST[txtreportdesc]'");
    $checkrow=mysqli_fetch_array($check);
    if($_REQUEST['txtreportdesc']=="")
    {
       
    }
    else if($checkrow[0]=="")
    {
        $in=$con->query("insert into report_issue values(0,'$_REQUEST[txtreportdesc]')");
    }
    else{
          $_SESSION['er']=1;
    }
}


if(isset($_REQUEST['btnupdatereport']))
{
$updatecat=$con->query("update report_issue set description='$_REQUEST[txtreportdesc]' where reportissueid=$_SESSION[rid]");
unset($_SESSION['rid']);
}



// sub category
$c1=$con->query("select count(*) from subcategory");
$cc1=mysqli_fetch_array($c1);
$_SESSION['subcategory']=$cc1[0];

if(isset($_REQUEST['btnsubcatinsert']))
{
    // echo "<script>alert('hii')</script>";
    $check=$con->query("select * from subcategory where subcategoryname like '$_REQUEST[txtsubcatename]'");
    $checkrow=mysqli_fetch_array($check);
    
 if($checkrow[0]=="")
    {
        $in=$con->query("insert into subcategory values(0,'$_REQUEST[subid]','$_REQUEST[txtsubcatename]')");
    }
    else{
          $_SESSION['er']=1;
    }
}


if(isset($_REQUEST['btnsubcatupdate']))
{
$updatecat=$con->query("update subcategory set subcategoryname='$_REQUEST[txtsubcatename]' ,
      categoryid=$_REQUEST[subid]
     where subcategoryid=$_SESSION[rid]");
unset($_SESSION['rid']);
}
?>

<?php
$c1=$con->query("select count(*) from bank");
$cc1=mysqli_fetch_array($c1);
$_SESSION['bank']=$cc1[0];

if(isset($_REQUEST['btnbankinsert']))
{
    $check=$con->query("select * from bank where bankname like '$_REQUEST[txtbankname]'");
    $checkrow=mysqli_fetch_array($check);
    if($_REQUEST['txtbankname']=="")
    {
      
    }
    else if($checkrow[0]=="")
    {
        $in=$con->query("insert into bank values(0,'$_REQUEST[txtbankname]')");
    }
    else{
          $_SESSION['er']=1;
    }
}


if(isset($_REQUEST['btnbankupdate']))
{
$updatecat=$con->query("update bank set bankname='$_REQUEST[txtbankname]' where bankid=$_SESSION[rid]");
unset($_SESSION['rid']);
}
$c1=$con->query("select count(*) from user_register");
$cc1=mysqli_fetch_array($c1);
$_SESSION['users']=$cc1[0];

$c1=$con->query("select count(*) from email_subscribe");
$cc1=mysqli_fetch_array($c1);
$_SESSION['visitors']=$cc1[0];

$c1=$con->query("select count(*) from transaction");
$cc1=mysqli_fetch_array($c1);
$_SESSION['transactions']=$cc1[0];
?>



