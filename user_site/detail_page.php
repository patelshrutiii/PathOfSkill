<?php
require_once "header.php";
?>
<?php
require_once "connection.php";
?>
<?php
require_once "stickymenu.php";
?>
<style>
    b, sup, sub, u, del {
    color: #585752;
}
    img.vi2 {
    width: 100%;
    
    height: 220px;

    margin-top: 13px;
}
/* like button css */
.i1 {
    margin-left: 5px;
}

.like {
    padding: 3px;
    width: 93px;
    font-size: 19px;
    color: #212529;
    background: none;
    border-radius: 5px;
    border: 2px solid #212529;
}

.like:hover {

    margin-top: -5px;

}

/* end like */
/* follow unfollow */
.favourite {
    margin-left: 10px;
    padding: 3px;
    width: 117px;
    font-size: 19px;
    color: #212529;
    background: none;
    border-radius: 5px;
    border: 2px solid #212529;
}

.favourite:hover {

    margin-top: -7px;

}

/* end */
.d1 {
    height: 400px;
    width: 100%;
    background: linear-gradient(130deg, #ff7a18, #af002d 41.07%, #319197 76.05%);
}

.textbanner {
    font-weight: 400;
    line-height: 1.4;
    font-size: 1.4rem;
    max-width: 600px;
}

.v1 {
    /* width:350px; */
    height: 500px;
    position: absolute;
    background: white;
    margin-left: 50%;
    margin-top: 100px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    border-radius: 5px;
}

.v2 {
    padding-top: 30px;
    padding-left: 30px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
}

.clp {
    padding-top: 84px;
}

.txt {
    font-size: 20px;
    color: black !important;
    word-spacing: 57px;
    margin-top: 28px;
    margin-left: 60px;
}

.snip1434 {
    font-family: 'Raleway', Arial, sans-serif;
    border: none;
    border-radius: 5px;
    overflow: hidden;
    color: #ffffff;
    cursor: pointer;
    /* padding: 0px 25px 0px 70px; */
    padding: 0px 74px 0px 117px;
    text-align: center;
    display: inline-block;
    margin: 12px 25px;
    font-weight: 600;
    outline: none;
    position: relative;
    font-size: 18px;
    line-height: 50px;
    background-color: #8a1a32;
    letter-spacing: 1px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.snip1434 i {
    font-size: 3em;
    width: 55px;
    line-height: 50px;
    position: absolute;
    left: -4px;
    top: 5px;
    -webkit-transform: rotate(-25deg) scale(1);
    transform: rotate(-25deg) scale(1);
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.snip1434:hover,
.snip1434.hover {
    color: #ffffff;
    background-color: #ac203f;
}

.snip1434:hover i,
.snip1434.hover i {
    -webkit-transform: rotate(-20deg) scale(1.3);
    transform: rotate(-20deg) scale(1.3);
}
</style>
<?php
$id=$_GET['courseid'];
//uploadcid session  and t_id is for use in follow and like course and rate and review purpose in detail_page
            $_SESSION['uploadcid']=$id;
            $selecttid=$con->query("select *from courses_upload where uploadcourseid like '$_SESSION[uploadcid]'");
            $selectdata=mysqli_fetch_array($selecttid);
            $_SESSION['t_id']=$selectdata[1];

    //end content of uploadcid session  and t_id is for use in follow and like course and rate and review purpose in detail_page
    ?>
<!-- follow tutor code -->

<?php
if(isset($_REQUEST['btnfollow']))
{
    $in=$con->query("insert into follow_tutor values(0,'$_SESSION[userid]','$_SESSION[t_id]')");
}
?>
<?php
if(isset($_REQUEST['btnunfollow']))
{
    $in=$con->query("delete from follow_tutor where userid like '$_SESSION[userid]' and tutorid like '$_SESSION[t_id]'");
}
?>


<!-- favorite list  code -->
<?php
if(isset($_REQUEST['btnfav']))
{
    $in=$con->query("insert into favorite values(0,'$_SESSION[userid]','$_SESSION[uploadcid]')");
}
?>
<?php
if(isset($_REQUEST['btnunfav']))
{
    $in=$con->query("delete from favorite where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
}
?>
<!-- like course code -->
<?php
if(isset($_REQUEST['btnlike']))
{
    $in=$con->query("insert into like_course values(0,'$_SESSION[userid]','$_SESSION[uploadcid]')");
}
?>
<?php
if(isset($_REQUEST['btnunlike']))
{
    $in=$con->query("delete from like_course where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
}
?>


<?php           
$id2=$_GET['uploadcourseid'];
// echo $id2;

// $check=$con->query("select * from course_video_addition where coursevideoid='".$id2."'");
// $row=mysqli_fetch_array($check);

$check1=$con->query("select * from courses_upload where uploadcourseid like '$_SESSION[uploadcid]'");
$row1=mysqli_fetch_array($check1);
$_SESSION['t_id']=$row1[1];
?>
<div class="d1">
    <div class="container">
        <div class="row">
            <div class="textbanner col-md-9">
                <div class="clp">
                    <h1 class="" data-purpose="lead-title">
                        <?php echo $row1[4];?>
                    </h1>
                    <div class="udlite-text-md clp-lead__headline" data-purpose="lead-headline">
                        This course will includes all the corner of skill. 
                    </div>

                    <div style="display:flex; padding: 11px;">
                        <!-- like button code -->
                        <form method="post">
                            <?php
                    if($_SESSION['userid']=="")
                    {
                        ?>
                            <button class="like" type="button" name="btnlike" title="please login">Like<i
                                    class="fa fa-heart-o"></i></button>
                            <?php
                    }
                    else{
                        $se=$con->query("select *from like_course where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
                        $sedata=mysqli_fetch_array($se);
                        if($sedata[0]=="")
                        {
                            ?>
                            <button class="like" type="submit" name="btnlike">Like<i class="fa fa-heart-o"></i></button>
                            <?php
                        }
                        else
                        {
                            ?>
                            <button class="like" type="submit" name="btnunlike">UnLike<i
                                    class="fa fa-heart"></i></button>
                            <?php
                        }
                        ?>

                            <?php
                    }
                ?>

                        </form>
                        <!-- favorite button code -->
                        <form method="post">
                            <?php
                    if($_SESSION['userid']=="")
                    {
                        ?>
                            <button class="favourite" type="button" name="btnfav" title="please login">Favorite<i
                                    class="fa fa-gift"></i></button>
                            <?php
                    }
                    else{
                        $se=$con->query("select *from favorite where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
                        $sedata=mysqli_fetch_array($se);
                        if($sedata[0]=="")
                        {
                            ?>
                            <button class="favourite" type="submit" name="btnfav">Favorite<i class="fa fa-gift"></i></button>
                            <?php
                        }
                        else
                        {
                            ?>
                            <button class="favourite" type="submit" name="btnunfav">unFavorite<i class="fa fa-gift"></i></button>
                            <?php
                        }
                        ?>

                            <?php
                    }
                ?>
                        </form>
                    </div>

                </div>
            </div>
            <div class="v1 col-md-3">
                <div style>
                      <!-- <video id="bgvid" playsinline autoplay muted loop class="vi2">
                        <source src="tutor_site\<?php echo $row[4];?>" type="video/mp4" autoplay="true">
                    </video> -->
           <img src="tutor_site\<?php echo $row1[5];?>" class="vi2">
                </div>
                <div class="txt">
                <?php
                            if($row1[7]=='0')
                            {
                                ?>
                          <h2 style="color:black;">Free</h2>               
  <?php
                            }
                            else
                            {
                                ?>
 <h2 style="color:black;">&#8377;<?php echo $row1[7];?>
                        <del>&#8377;<?php echo $row1[8];?></del>
                    </h2>                <?php
                            }
                           
                            ?>

                
                   
                </div>
                <form method="POST">
                    <!-- <button class="snip1434">Add to Cart<i class="fa fa-shopping-cart" style="left: -13px;"></i></button> -->

                    <a href="checkout.php?cid=<?php echo $row1[0];?>"> <button type="button" name="btnbuy"
                            class="snip1434" style="padding-left: 41%; margin-top:-1px!important;"
                            onclick="checkout.php">
                            Buy now<i class="fa fa-inr"></i></button></a>
                            <div style="font-size: 20px;margin-left: 25px;color: #4c4c4c;">This course includes:</div>
                            <div style="padding-left:29px;font-size: 14px; margin-top: 6px;"><i class="ti-bar-chart"></i>&nbsp;<?php echo $row1[9];?></div>
                            <div style="padding-left:29px;font-size: 14px; margin-top: 3px;"><i class="ti-layout-media-center"></i>&nbsp;<?php echo $row1[10];?></div>
                            <div style="padding-left:29px;font-size: 14px; margin-top: 3px;"><i class="ti-notepad"></i>&nbsp;<?php echo $row1[11];?></div>

                </form>


            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="row col-md-9">
        <h1 style="color:black; margin-top:100px;font-size: 45px;">Description</h1>
    </div>
    <div class="row col-md-9">
        <p>
        <br><br>
            <strong><u style="font-size: 25px;">Course features</u></strong><br>
            <?php echo $row1[6]; ?>Students will be able to create their own abdominal.<br>
            <strong><u style="font-size: 25px;">Releted Notes</u></strong><br>
            <?php echo $row1[11] ?>
        </p>
    </div>



</div>

<?php
require_once "footer.php";
?>
<?php
require_once "script.php";
?>