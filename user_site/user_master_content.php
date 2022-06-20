<?php
require_once "header.php";
require_once "connection.php";

if($_SESSION['userid']=="")
{
    header('location:user_login');
}
else{
$_SESSION['page']='myaccount';
?>
<?php
require_once "stickymenu.php";
?>
<style>
/* reset password */
.oldpwd {
    width: 100%;
    margin-top: 30px;
    padding: 5px;
    border: none;
    border-bottom: 2px solid black;
    margin-top: 30px;
}

.reset {
    margin: auto;
    margin-left: 17px;
    padding: 7px;
    font-size: 21px;
    text-align: center;
    margin-top: 30px;
    width: 400px;
    border-radius: 8px;
    background: #180850;
}

/* bill model */
.page {
    margin: 0;
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
}

div.container {
    /* border-radius: 15px;
    background: white; */

}

div.invoice-letter {
    width: auto;
    position: relative;
    min-height: 150px;
    background-color: #04617B;
    margin-right: -48px;
    ;
    margin-left: -48px;
    box-shadow: 0 4px 3px rgba(0, 0, 0, 0.4);
}

div.letter-title {
    margin-top: 10px;
    height: 130px;
    border-right: 2px solid #eee;
}

div.letter-content {
    margin-top: 10px;
}

table.invoice thead th {
    background-color: rgba(4, 97, 123, 0.2);
    border-top: none;
}

table.invoice thead tr:first-child th:first-child {
    border-top-left-radius: 25px;
}

table.invoice thead tr:first-child th:last-child {
    border-top-right-radius: 25px;
}

tr.last-row {
    background-color: rgba(4, 97, 123, 0.2);

}

tr.last-row th {
    border-bottom-left-radius: 25px;
    width: 30px;
}

tr.last-row td {
    border-bottom-right-radius: 25px;
}

div.row div.to {
    height: 260px;
    padding-right: 25px;
    border-right: 2px solid rgba(4, 97, 123, 0.2);
}


/* skew */
.panel-2 {
    margin-top: 70px;
    /* background-color: #1631db24; */
    background-image: url(img/img2.png);
    min-height: 442px;
    -webkit-transform: skew(0deg,
            -6deg);
    transform: skew(0deg,
            -6deg);
    padding: 40px 40px 0;
}

.content1 {
    -webkit-transform: skew(0deg, 6deg);
    transform: skew(0deg, 6deg);
}

/* like tooltip */
.tool {
    display: flex;
    width: 70px;
    background-color: white;
    text-align: center;
    border-radius: 6px;
    padding: 7px 6px 0px 15px;
    /* position: absolute; */
    /* z-index: 1; */
    /* bottom: 150%;
  left: 50%; */
    /* margin-left: -60px; */
}

.main1 {
    border-radius: 3px;
    height: 160px;
    margin-top: 30px;
    background: rgb(217 215 215) !important;
}

.row1 {
    margin-right: 0px !important;
    margin-left: 0px !important;
}

.img1 {
    height: 136px;
    width: 145px;
}

.img1:hover {
    margin-top: -20px;
}

.modal-header .close {
    margin-top: -2px;
}

button.close {
    padding: 0;
    font-size: 40px;
    border: none !important;
    cursor: pointer;
    background: 0 0;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.close {
    float: right;
    font-size: 40px;
    font-weight: 500 !important;
    line-height: 1;
    color: #fff !important;
    filter: alpha(opacity=20);
    opacity: .4;
    border: none !important;
}

.modal-title {
    margin: auto !important;
}

.modal-dialog {
    /* margin-top:300px; */
    /* width: 500px; */
    /* height:600px !important; */
}

.modal-content {
    margin-top: 100px;

    /* 80% of window height */
    /* height: 70%;
    background-color: #BBD6EC; */
}

.modal-header {
    /* background-color: #337AB7;
    padding: 5px 20px !important;
    color: #FFF; */
    /* border-bottom:2px dashed #337AB7; */
}

.buttonft {
    display: inline-block;
    position: fixed;
    border-radius: 4px;
    background: linear-gradient(to left, #7696ff 0%, #8342f6 78%);
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 16px;
    padding: 5px;
    width: 90px;
    transition: all 0.5s;
    cursor: pointer;
    margin-left: 0;
    margin-top: 0px;
    box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
}

.buttonft:hover {
    background-image: linear-gradient(60deg, #7696FF, #8342F6);
}

.button2 {
    display: inline-block;
    position: fixed;
    border-radius: 4px;
    background: linear-gradient(to left, #7696ff 0%, #8342f6 78%);
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 16px;
    padding: 5px;
    width: 90px;
    transition: all 0.5s;
    cursor: pointer;
    margin-left: 153px;
    margin-top: -28px;
    box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
}

.button2:hover {
    background-image: linear-gradient(60deg, #7696FF, #8342F6);
}
</style>

<header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</header>
<style>
.body1 {
    line-height: 1.25;
    width: 100%;
}

.a1 {
    color: #ccc;
}

.header1,
.section1 {
    padding: 0;
}

.header1 {
    background-color: #333;
    color: #eee;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
}

.section1 {
    background-image: url(img/collage3.png);
    background-position: center center;
    background-size: cover;
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden;
}

.skew-title {
    background-color: rgba(0, 0, 0, 0.85);
    color: #eee;
    opacity: 0;
    pointer-events: none;
    font-size: 0.75rem;
    padding: 3rem;
    position: absolute;
    top: 0;
    bottom: 0;
    width: 15rem;
    z-index: 10;
    transform: skew(-15deg, 0);
    transition: all 0.125s ease-in-out;
}

.section1:hover .skew-title {
    opacity: 1;
    pointer-events: auto;
}

.skew-title>div {
    transform: skew(15deg, 0);
}

.skew-title h2 {
    text-transform: uppercase;
}

.skew-image {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}

.skew-image>div {
    position: absolute;
    top: 0;
    bottom: 0;
    overflow: hidden;
    animation-duration: 30s;
    animation-iteration-count: infinite;
}

.skew-image>div:nth-of-type(1) {
    animation-name: skewShift1;
    left: 0;
    width: 15rem;
}

.skew-image>div:nth-of-type(1):before {
    animation-name: skewBgShift1;
    -webkit-filter: blur(2px);
}

.skew-image>div:nth-of-type(2) {
    animation-name: skewShift2;
    right: -15rem;
    width: 15rem;
}

.skew-image>div:nth-of-type(2):before {
    margin-left: -100vw;
    animation-name: skewBgShift2;
    -webkit-filter: blur(5px) grayscale(100%) contrast(125%);
}

.skew-image>div:before {
    background-image: url(img/collage3.png);
    background-position: center center;
    background-size: cover;
    content: "";
    display: block;
    width: 100vw;
    height: 100vh;
    position: relative;
    animation-duration: 27s;
    animation-iteration-count: infinite;
}

@-webkit-keyframes skewShift1 {
    0% {
        transform: translate3d(0, 0, 0) skew(15deg, 0);
    }

    50% {
        transform: translate3d(40rem, 0, 0) skew(15deg, 0);
        width: 20rem;
    }

    100% {
        transform: translate3d(0, 0, 0) skew(15deg, 0);
    }
}

@-webkit-keyframes skewBgShift1 {
    0% {
        transform: translate3d(0, 0, 0) scale(1.25) skew(-15deg, 0);
    }

    50% {
        transform: translate3d(-40rem, 0, 0) scale(1.25) skew(-15deg, 0);
    }

    100% {
        transform: translate3d(0, 0, 0) scale(1.25) skew(-15deg, 0);
    }
}

@-webkit-keyframes skewShift2 {
    0% {
        transform: translate3d(0, 0, 0) skew(-15deg, 0);
    }

    50% {
        transform: translate3d(-60rem, 0, 0) skew(-15deg, 0);
    }

    100% {
        transform: translate3d(0, 0, 0) skew(-15deg, 0);
    }
}

@-webkit-keyframes skewBgShift2 {
    0% {
        transform: translate3d(0, 0, 0) scale(1.25) skew(15deg, 0);
    }

    50% {
        transform: translate3d(60rem, 0, 0) scale(1.25) skew(15deg, 0);
    }

    100% {
        transform: translate3d(0, 0, 0) scale(1.25) skew(15deg, 0);
    }
}

/* edit profile */
.header-profile {

    padding: 30px 0px 20px 61px;
    /* margin-left: 50px; */
    margin-top: -30px;

}

.input-data {
    width: 250px;
    border: none;
    margin: 10px;
    margin-left: 15px;
    border-bottom: 1px solid;
}

.input-data-email {
    width: 250px;
    border: none;
    margin: 10px;
    margin-left: 47px;
    border-bottom: 1px solid;
}

.input-data-contact {
    width: 250px;
    border: none;
    margin: 10px;
    margin-left: 34px;
    border-bottom: 1px solid;
}
</style>

<?php
if(isset($_REQUEST['updateprofile']))
{
    // echo "helllo";
    // echo "<script>alert('hello');</script>";
    $fn=$_REQUEST['ufname'];
    $ln=$_REQUEST['ulname'];
    $gmail=$_REQUEST['uemail'];
    $gen=$_REQUEST['gender'];
    $mo=$_REQUEST['contact'];
    $upuser=$con->query("update user_register set fname='$fn',lname='$ln',email='$gmail',gender='$gen',contact=$mo where userid like '$_SESSION[userid]'");

}
?>
<link href="css/page2.css" rel="stylesheet">
<html class="html1">

<body class="body1">

    <section class="section1" style="width:100%;">
        <div class="skew-title" style="width: 17%;">
            <div><br><br><br><br><br><br><br><br><br>
                <h2>WELCOME</h2>
                <h3>to
                    Pathofskill</h3>
            </div>
        </div>

        <div class="skew-image">
            <div></div><!-- #1 -->
            <div></div><!-- #2 -->
        </div>

    </section>


</body>

<div class="container">
    <div class="row" style="height:150px; background-color: #e9e9e9; margin-top:50px;">
        <div class="col-md-4">
            <img src="img/wel.jpg" width="200px" height="60px"
                style="margin-left: 100px;box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);height: 195px;margin-top: -25px;">

        </div>
        <div class="col-md-8">
            <?php
$user=$con->query("select * from user_register where userid like '$_SESSION[userid]'");
$user1=mysqli_fetch_array($user);

?>
            <div style="font-size:40px;color:#154D76;"> <?php echo $user1[1]." ".$user1[2];?>
            </div><br>
            <div><?php echo $user1[7];?></div>

            <br>
            <div><a href="logout.php"><input type="submit" name="logout" value="logout"
                        style="background-color:none;"></a></div>
        </div>
    </div>
</div>
<div class="panel-2">
    <!-- <div class="container"> -->
    <div class="container-fluid">

        <div class="Row content1" style="margin-top:50px;">

            <div class="home-right-column col-md-6 match-height text-center" style="height: 430px;">
                <div class="home-right-column-insert">
                    <div class="row">
                        <div class="categories-gradient"></div>
                        <div class="text-center home-column-category-item" data-toggle="modal"
                            data-target="#myModaledit">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/4edit1.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Edit Profile
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center home-column-category-item" data-toggle="modal" data-target="#myModal2">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/ltutor.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Liked Tutors
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center home-column-category-item" data-toggle="modal" data-target="#myModal1">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/ftutor.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Following Tutor
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center home-column-category-item" data-toggle="modal" data-target="#myModal4">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/courses.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Your Courses
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center home-column-category-item" data-toggle="modal" data-target="#myModal">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/lcourse.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Liked Courses
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center home-column-category-item" data-toggle="modal" data-target="#myModal3">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/fcourse.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Favourite
                                        Course
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center home-column-category-item" data-toggle="modal" data-target="#myModal5">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/in.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Invoice</p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center home-column-category-item" data-toggle="modal" data-target="#resetpwd">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/resetpass.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Reset password
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center home-column-category-item" data-toggle="modal" data-target="#reportcoures">
                            <div class="card1">
                                <div class="front">
                                    <img class="img3" src="img/re.png">
                                    <p class="home-category-heading home-category-heading--new-taxonomy">Reported
                                        Courses</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-5 p1">
                <h1>Welcome to PathOfSkill</h1>
                <p>On PathOfSkill a tutor is able to give personalized teaching using audio, video and whiteboarding
                    tools where both tutor and learner are able to see, hear, write and interact in real-time. Imagine
                    it like 'Skype' custom made for education. PathOfSkill caters to all type of learners and prepares
                    for particular art, science and technology, business, motivational, Designing and many more.
                    -PathOfSkill
                </p>
            </div>
        </div>
    </div>

</div>

</html>

<?php
require_once "footer.php";
?>
<?php
require_once "script.php";
?>
<!-- following tutor -->
<?php
$ftutor=$con->query("SELECT t.*,ft.* from tutor t,follow_tutor ft WHERE t.tutorid=ft.tutorid and ft.userid='$_SESSION[userid]'  GROUP BY ft.tutorid");

?>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Here is the tutors you follow</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>

            </div>
            <div class="modal-body">
                <?php
            while($ftutor1=mysqli_fetch_array($ftutor))
            {
            ?>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <img class="img1" src="tutor_site\<?php echo $ftutor1[6]; ?>" width="170" height="150">
                    </div>
                    <div class="col-md-6">
                        <h3><?php echo $ftutor1[1]." ".$ftutor1[2]; ?><h3>
                                <h5><?php echo $ftutor1[8]." ".$ftutor1[9]; ?></h5>
                    </div>
                </div>
                <br>
                <?php
               }
                ?>
            </div>
            <div class="modal-footer">

                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button> -->

            </div>
        </div>
    </div>
</div>
<!-- like tutors -->

<?php
$ltutor=$con->query("SELECT t.*,lt.* from tutor t,like_tutor lt WHERE t.tutorid=lt.tutorid and lt.userid='$_SESSION[userid]' GROUP BY lt.tutorid");

?>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Here is the tutors you likes</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>

            </div>
            <div class="modal-body">
                <?php
            while($ltutor1=mysqli_fetch_array($ltutor))
            {
            ?>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <img class="img1" src="tutor_site\<?php echo $ltutor1['6']; ?>" width="170" height="150">
                    </div>
                    <div class="col-md-6">
                        <h3><?php echo $ltutor1[1]." ".$ltutor1[2]; ?><h3>
                                <h5><?php echo $ltutor1[8]." ".$ltutor1[9]; ?></h5>
                    </div>
                </div>
                <br>
                <?php
               }
                ?>
            </div>
            <div class="modal-footer">

                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button> -->

            </div>
        </div>
    </div>
</div>

<!-- ===================================================Start reported courses model======================================= -->
<?php
$likec=$con->query("SELECT u.*,lc.* from courses_upload u,report_course lc WHERE u.uploadcourseid=lc.uploadcourseid and lc.userid='$_SESSION[userid]'");
       
?>
<div class="modal fade" id="reportcoures" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Courses which you have liked are</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>

            </div>
            <div class="modal-body">
                <div class="row row1">
                    <?php
      while($likeco=mysqli_fetch_array($likec))
      {
        //   print_r($likeco);
        // $likecount=$con->query("select count(*) from like_course where uploadcourseid=$likeco[0]");
        // $c=mysqli_fetch_array($likecount);
        $report=$con->query("select *from report_course where userid='$_SESSION[userid]' and uploadcourseid=$likeco[0]");
         $reportdata=mysqli_fetch_array($report);
          ?>
                    <div class="col-md-12 main1" style="">
                        <div class="col-md-5">
                            <img class="img1" src="tutor_site\<?php echo $likeco[5];?>" style="">
                        </div>
                        <div class="col-md-7">
                            <h3><?php echo $likeco[4];?></h3>
                            <p><i class="fa fa-rupee"></i>&nbsp;<?php echo $likeco[7];?></p>
                            <!-- <div class="tool"><i class="fa fa-heart" style="color: red;"></i>
                                
                            </div> -->
                            <div class="tool">
                                <p><?php echo $reportdata[4];?></p>
                            </div>
                            <!-- <a href="videos_page?courseid=<?php echo $likeco[0];?>"> <button type="button"
                                    name="btnbuy" class="button2">
                                    Learn now</button></a> -->
                        </div>
                    </div>
                    <?php
                    }?>
                </div>
            </div>
            <br>

        </div>
    </div>
</div>
</div>





<!-- ====================================================End reported courses model========================================== -->




<!-- liked course -->
<?php
$likec=$con->query("SELECT u.*,lc.* from courses_upload u,like_course lc WHERE u.uploadcourseid=lc.uploadcourseid and lc.userid='$_SESSION[userid]'");
       
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Courses which you have Reported are</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>

            </div>
            <div class="modal-body">
                <div class="row row1">
                    <?php
      while($likeco=mysqli_fetch_array($likec))
      {
        //   print_r($likeco);
        $likecount=$con->query("select count(*) from like_course where uploadcourseid=$likeco[0]");
        $c=mysqli_fetch_array($likecount);

     
          ?>
                    <div class="col-md-12 main1" style="">
                        <div class="col-md-5">
                            <img class="img1" src="tutor_site\<?php echo $likeco[5];?>" style="">
                        </div>
                        <div class="col-md-7">
                            <h3><?php echo $likeco[4];?></h3>
                            <p><i class="fa fa-rupee"></i>&nbsp;<?php echo $likeco[7];?></p>
                            <!-- <div class="tool"><i class="fa fa-heart" style="color: red;"></i> -->
                                <p><?php echo $c[0];?></p>
                            <!-- </div> -->
                            <a href="detail_page?courseid=<?php echo $likeco[0];?>"> <button type="button"
                                    name="btnbuy" class="button2">
                                    Learn now</button></a>
                        </div>
                    </div>
                    <?php
                    }?>
                </div>
            </div>
            <br>

        </div>
    </div>
</div>
</div>

<!-- favourite list -->
<?php
$fcourse=$con->query("SELECT u.*,f.* from courses_upload u,favorite f WHERE u.uploadcourseid=f.uploadcourseid and f.userid='$_SESSION[userid]' GROUP by u.uploadcourseid");
   
?>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Favourite list</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>

            </div>
            <div class="modal-body">
                <div class="row row1">
                    <?php
      while($fcourse1=mysqli_fetch_array($fcourse))
      {
        //   print_r($fcourse1);
        $likecount=$con->query("select count(*) from like_course where uploadcourseid=$fcourse1[0]");
        $c=mysqli_fetch_array($likecount);
        // print_r($c);
          ?>

                    <div class="col-md-12 main1" style="">
                        <div class="col-md-5">
                            <img class="img1" src="tutor_site\<?php echo $fcourse1[5];?>" style="">
                        </div>
                        <div class="col-md-7">
                            <h3><?php echo $fcourse1[4];?></h3>
                            <p><i class="fa fa-rupee"></i>&nbsp;<?php echo $fcourse1[7];?></p>
                            <div class="tool"><i class="fa fa-heart" style="color: red;"></i>
                                <p style="font-size: 17px;
    margin-top: -6px;
    margin-left: 5px;">&nbsp;<?php echo $c[0];?></p>
                            </div>
                            <a href="detail_page?courseid=<?php echo $fcourse1[0];?>"> <button type="button"
                                    name="btnbuy" class="button2">
                                    Learn now</button></a>
                        </div>
                    </div>
                    <?php
                    }?>
                </div>
            </div>
            <br>

        </div>
    </div>
</div>
</div>


<!-- Your courses -->
<?php
$fcourse=$con->query("SELECT u.*,b.* from courses_upload u,bill b where u.uploadcourseid=b.uploadcourseid AND userid='$_SESSION[userid]'");
       
?>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Your courses</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>

            </div>
            <div class="modal-body">
                <div class="row row1">
                    <?php
      while($fcourse1=mysqli_fetch_array($fcourse))
      {
        //   print_r($fcourse1);
        $likecount=$con->query("select count(*) from like_course where uploadcourseid=$fcourse1[0]");
        $c=mysqli_fetch_array($likecount);
        

          ?>
                    <div class="col-md-12 main1" style="">
                        <div class="col-md-5">
                            <img class="img1" src="tutor_site\<?php echo $fcourse1[5];?>" style="">
                        </div>
                        <div class="col-md-7">
                            <h3><?php echo $fcourse1[4];?></h3>
                            <p><i class="fa fa-rupee"></i>&nbsp;<?php echo $fcourse1[7];?></p>
                            <div class="tool"><i class="fa fa-heart" style="color: red;"></i>
                                <p><?php echo $c[0];?></p>
                            </div>
                            <!-- <button type="button" onclick="" class="button2">Learn now</button> -->
                            <a href="videos_page?cid=<?php echo $fcourse1[0];?>"> <button type="button"
                                    name="btnbuy" class="button2">
                                    Learn now</button></a>
                        </div>
                    </div>
                    <?php
                    }?>
                </div>
            </div>
            <br>

        </div>
    </div>
</div>
</div>

<!-- bill -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Your Bill</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>

            </div>
            <div class="modal-body" style="padding:0px !important;">


                <div class="container my-5 px-5" style="width:100%;">
                    <div class="row">
                        <?php 
    $invoice1=$con->query("select * from user_register where userid='$_SESSION[userid]'");
    $in2=mysqli_fetch_array($invoice1);
    ?>
                        <div class="col-3 contact-details">
                            <h3 style="color:black">Name of Issuer :<h3>
                                    <h5> <?php echo $in2[1]." ".$in2[2];?></h5>
                                    <h6><?php echo $in2[3];?></h6>
                                    <h6><?php echo $in2[6];?></h6>

                        </div>
                        <div class="col-1 offset-2 logo">
                            <img src="img/online-cource.png" alt="" style="    height: 90px;
    width: 97px;
    margin-top: 8px;filter: drop-shadow(1px -1px 1px black);">
                        </div>
                        <div class="invoice-details col-3 offset-3 text-right">
                            <h5>Last login:</h5>
                            <h6><?php echo $in2[7];?></h6>

                        </div>
                    </div>

                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">


                    <div class="row table mt-5">
                        <table class="invoice table table-hover">
                            <thead class="thead">
                                <tr style="color:black;">
                                    <th scope="col">NO.</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">date</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">GST</th>
                                    <th scope="col">Payable Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
            //  $invoice=$con->query("select b.*,u.*,cu.* from bill b,user_register u,courses_upload cu where b.userid=u.userid and b.uploadcourseid=cu.uploadcourseid and b.userid='$_SESSION[userid]'");
             $invoice=$con->query("select b.*,u.*,cu.* from bill b,user_register u,courses_upload cu where b.userid=u.userid and b.uploadcourseid=cu.uploadcourseid and b.userid='$_SESSION[userid]'");
            
             while($in1=mysqli_fetch_array($invoice))
              {
                // print_r($in1);
           ?>
                                <tr>
                                    <th scope="row"><?php echo $in1[0];?></th>
                                    <td class="item"><?php echo $in1[18];?></td>
                                    <td><?php echo $in1[4];?></td>
                                    <td><span class="currency">&#8377;</span><?php echo $in1[21];?> </td>
                                    <td>3%</td>


                                    <td><span class="currency">&#8377;</span><?php echo $in1[3];?> </td>

                                </tr>
                                <?php
              }
                ?>

                            </tbody>
                        </table>
                    </div>

                    <p class="text-center mt-3"><em>* Taxes will be calculated in &#8377; using the default % value for
                            your region</em>
                    </p>
                </div>




            </div>
            <br>

        </div>
    </div>
</div>
</div>
<!-- ==========================================reset password===================================================== -->
<!-- Reset Modal -->
<?php
if(isset($_REQUEST["reset"]))
{
    $oldpsw= $_REQUEST["opwd"];
$newpsw= $_REQUEST["npwd"];
$conpsw= $_REQUEST["cnpwd"];
$dbpsw= $row[5];
if($_REQUEST['npwd']==$_REQUEST['cnpwd']){
    $up=$con->query("update user_register set password='$newpsw' where userid='$_SESSION[userid]'");
}
}
    ?>
<div class="modal fade" id="resetpwd">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
            <div class="modal-header">
                        <img src="img/edit3.png" style="width:100px;margin-left: 40%;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                <!-- <div class="modal-header" style="border:none;">
                    <p class="name ti-unlock"> Reset Password </p>
                    <i type="button" data-dismiss="modal" class="ti-close close-button" style="font-size:20;"></i>
                </div> -->
                <div class="modal-body" style="padding: 35px;">

                    <div>
                        <input type="password" name="opwd" class="oldpwd" Placeholder="Enter Old Password" id="opass"
                            onkeyup="resetpass(); return false;">
                        <input type="hidden" value="<?php echo $user1[5];?>" id="dbpass">
                        <span id="confirmMessagetwo" style="margin-left:30px;"></span>
                    </div>
                    <div style="display:none;" id="formtwo">
                        <input type="password" name="npwd" class="oldpwd" Placeholder="Enter New Password" id="pass1">
                        <input type="password" name="cnpwd" class="oldpwd" Placeholder="Confirm New Password" id="pass2"
                            onkeyup="resetpass(); return false;" required>
                        <span id="confirmMessage" style="margin-left:30px;"></span>

                    </div>
                    <div>
                        <button type="submit" value="reset" name="reset" id="cp" class="reset">Reset</button>
                    </div>
                </div>
                <div class="modal-footer" style="border:none;">
                    <!-- <button type="submit" value="reset" name="reset" id="cp" class="button1">Reset</button> -->

                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Reset Modal -->

<!-- -----------------------------------------------------------edit profile---------------------------------------- -->



<?php
$fcourse1=$con->query("SELECT u.*,b.* from courses_upload u,bill b where u.uploadcourseid=b.uploadcourseid AND userid='$_SESSION[userid]'");
       
?>
<div class="modal fade" id="myModaledit" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background:white !important;">
                <img src="img/edit3.png" style="width:100px;margin-left: 40%;">
                <button type="button" class="close" data-dismiss="modal"
                    style="color: black !important;">&times;</button>
            </div>
            <div class="modal-body">
                <!-- text box ma name aavshe ne 2nd ma image -->
                <form method="post" name="tutoreditprofile" class="header-profile" style="margin-top:-30px;">
                    <div>
                        <?php
                        $selectuser1=$con->query("select *from user_register where userid='$_SESSION[userid]'");
                        while($userdata1=mysqli_fetch_array($selectuser1))
                        {
                      ?>
                        <div>
                            <label>First Name :</label>
                            <input type="text" name="fname" class="input-data" value="<?php echo $userdata1[1];?>">
                        </div>
                        <div>
                            <label>Last Name :</label>
                            <input type="text" name="lname" class="input-data" value="<?php echo $userdata1[2];?>">
                        </div>
                        <div>
                            <label>Email :</label>
                            <input type="text" name="email" class="input-data-email"
                                value="<?php echo $userdata1[3];?>">
                        </div>
                        <div style="border-bottom: 1px solid;
    
    padding-bottom: -17px;
    width: 251px;
    
    margin-left: 93px;
    margin-bottom: 7px;">
                            <input id="male" type="radio" value="male" name="gen">
                            <label for="male">Male</label>
                            <input id="female" type="radio" value="female" name="gen" checked="">
                            <label for="female">Female</label>
                        </div>
                        <div>
                            <label>Contact :</label>
                            <input type="text" name="contact" class="input-data-contact"
                                value="<?php echo $userdata1[6];?>">
                        </div>

                        <button type="submit" name="edittutorprofile" style="outline:none;width:200px;border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
    font-size: 18px;
    padding: 4px;
    border: none;
    background-color: #0A4D5E;
    color: #fff;
    margin-left:55px;
    margin-top:20px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    ">Update</button>
                        <?php
                    }
?>
                    </div>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- -----------------------------------------------------------End edit profile---------------------------------------- -->

<!-- Modal -->
<div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>This is a large modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

</body>

</html>
<?php
// else part 
}
?>