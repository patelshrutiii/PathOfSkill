<?php
require_once "connection.php";
$c1=$con->query("select count(*) from courses_upload");
$cc1=mysqli_fetch_array($c1);
$_SESSION['course']=$cc1[0];


$c1=$con->query("select count(*) from tutor_bankdetail");
$cc1=mysqli_fetch_array($c1);
$_SESSION['bank']=$cc1[0];


if(isset($_REQUEST['btnsubcatinsert']))
{
  // echo "<script>alert('hello i am inside the insert qyuery');</script>";
  //  $newname=$_REQUEST[txtcoursename].".".pathinfo($_FILES[coursevideo][name],PATHINFO_EXTENSION);
            $newname=$_REQUEST['txtcoursename'].".".pathinfo($_FILES[upphoto][name],PATHINFO_EXTENSION);
        //  $newname="shruti".".".pathinfo($_FILES[upphoto][name],PATHINFO_EXTENSION);
          $ex=pathinfo($_FILES[upphoto][name],PATHINFO_EXTENSION);
          $s=$_FILES[upphoto][size]/1024/1024;
          if($ex=="jpg" || $ex=="png" || $ex=="jpeg"){
              if($s<5){
                          $setpath=dirname(__FILE__)."/courseimage/".$newname;
                          $path="courseimage/".$newname;
                          move_uploaded_file($_FILES[upphoto][tmp_name],$setpath);
                          $in=$con->query("insert into courses_upload values(0,
                          '$_SESSION[tutor_id]',
                          $_REQUEST[catid],
                          $_REQUEST[subid],
                          '$_REQUEST[txtcoursename]',
                          '$path',
                          '$_REQUEST[txtcoursefeature]',
                          $_REQUEST[txtprice],
                          $_REQUEST[txtrprice],
                          '$_REQUEST[slevel]',
                          '$_REQUEST[txtlength]',
                          '$_REQUEST[txtnote]',0)");
         
                      }
        else{
          echo "invalid file size";
        }
     }
     else{
       echo "invalid file type";
     }
        // $in=$con->query("insert into courses_upload values(0,'$_SESSION[tutor_id]',
        // $_REQUEST[catid],
        //  $_REQUEST[subid],
        // '$_REQUEST[txtcoursename]',
        // 'image',
        // '$_REQUEST[txtcoursefeature]',
        // $_REQUEST[txtprice],
        // '$_REQUEST[slevel]',
        // '$_REQUEST[txtlength]',
        // '$_REQUEST[txtnote]',0)");
}

    

   

   if(isset($_REQUEST['uploadvideo'])){
    // echo "hii";
    if($_SESSION['c']<=12)
   {
  //   echo $_SESSION[c];
  $is=$_SESSION['coursevideoupload'];
    //  echo "<script>alert($is);</script>";
  
    $_SESSION['c']--;
  
   }
  //  to give a random name to video which stores in tutor_video of tutor site filder.
            $char="abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ123456789";
          $str;
          for($i=0;$i<=5;$i++)
          {
              $index=rand(0,strlen($char)-1);
              $str.=$char[$index];
          }
  
          $newname=$str.".".pathinfo($_FILES[coursevideo][name],PATHINFO_EXTENSION);
          $ex=pathinfo($_FILES[coursevideo][name],PATHINFO_EXTENSION);
          $s=$_FILES[coursevideo][size]/1024/1024;
          if($ex=="mp4"){
              // if($s<5){
          $setpath=dirname(__FILE__)."/tutorvideo/".$newname;
          $path="tutorvideo/".$newname;
          move_uploaded_file($_FILES[coursevideo][tmp_name],$setpath);
         $in=$con->query("insert into course_video_addition values('0','$_SESSION[tutor_id]','$_SESSION[coursevideoupload]','$_REQUEST[desc]','$path','$_REQUEST[videonotes]')");
        //  if($in){
        //    $_SESSION[what]="dashboard2";
        //  }
        // }
        // else{
        //   echo "invalid file size";
        // }
     }
     else{
       echo "invalid file type";
     }
  }
  
  if(isset($_REQUEST['btncourseupdate']))
  {
    echo "<script>alert('hello i am inside the update qyuery');</script>";
    $updatecat=$con->query("update courses_upload set 
    categoryid=$_REQUEST[catid],
    subcategoryid=$_REQUEST[subid],
    coursename='$_REQUEST[txtcoursename]',
    coursefeature='$_REQUEST[txtcoursefeature]',
    price=$_REQUEST[txtprice],
    regularprice=$_REQUEST[txtrprice],
    level='$_REQUEST[slevel]',
    totallength='$_REQUEST[txtlength]',
    relatednotes='$_REQUEST[txtnote]'
     where uploadcourseid=$_SESSION[rid]");
   
  unset($_SESSION['rid']);

  }



  $c1=$con->query("select count(*) from subcategory");
$cc1=mysqli_fetch_array($c1);
$_SESSION['subcategory']=$cc1[0];

if(isset($_REQUEST['btnsubcatinsert1']))
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


// ------------------------------------------Q/A's Answer insert Query-------------------------------- 


                     if(isset($_REQUEST['Ansbtn']))
                     {

                            $inAns=$con->query("insert into course_answer values(0,'$_REQUEST[Q_id]','$_REQUEST[Qu_id]','$_REQUEST[Quploadc_id]','$_SESSION[tutor_id]','$_REQUEST[txtans]')");
                     }
                   
// ------------------------------------------end Q/A's Answer insert Query--------------------------------
  
// --------------------------------------------------Start code of display followers code----------------------------------

$c1=$con->query("select count(*) from follow_tutor");
$cc1=mysqli_fetch_array($c1);
$_SESSION['followtutor']=$cc1[0];

// --------------------------------------------------End code of display followers code----------------------------------

// --------------------------------------------------Start code of display like_tutor code----------------------------------
$c1=$con->query("select count(*) from like_tutor");
$cc1=mysqli_fetch_array($c1);
$_SESSION['liketutor']=$cc1[0];

// --------------------------------------------------End code of display like_tutor code----------------------------------

// --------------------------------------------------Start code of display like_course code----------------------------------
$c1=$con->query("select count(*) from like_course");
$cc1=mysqli_fetch_array($c1);
$_SESSION['likecourse']=$cc1[0];

// --------------------------------------------------End code of display like_course code----------------------------------
// -------------------------------------------------start code of edit_profile----------------------------------

if(isset($_REQUEST['edittutorprofile']))
{

  // echo "<script>alert('hello i am inside the update qyuery');</script>";
  $updatecat=$con->query("update tutor set 
  fname='$_REQUEST[fname]',
  lname='$_REQUEST[lname]',
  email='$_REQUEST[email]',
  gender='$_REQUEST[gen]',
  contact=$_REQUEST[contact],
  skill='$_REQUEST[skill]',
  skilllevel='$_REQUEST[skillevel]',
  bio='$_REQUEST[bio]'
   where tutorid='$_SESSION[tutor_id]'");


}

// --------------------------------------------------End code of edit_profile----------------------------------
// --------------------------------------------------Start code of tutor_bank----------------------------------
if(isset($_REQUEST['btnbank']))
{
   
  $addbank=$con->query("insert into tutor_bankdetail values (0,$_REQUEST[bankid],'$_SESSION[tutor_id]','$_REQUEST[txtifsc]','$_REQUEST[txtano]',0)");
    // $add=$con->query("insert into tutor_bankdetail values (0,$_REQUEST[bankid],'$_SESSION[tutor_id]','$_REQUEST[txtifsc]','$_REQUEST[txtano]',0)");
}

// --------------------------------------------------End code of  tutor_bank----------------------------------


