<?php

require_once "connection.php";
// if($_SESSION['courseid']=="")
// {
//     header('location:index');
// }
// else{

require_once "header.php";

require_once "stickymenu.php";
?>
<style>
.f5{
    color: #6e6d6a;
    margin-right: 7px;
    font-size: 15px;
}
/* rate and review */
.report-model-open {
    margin-left: 8px;
    font-size: 15px;
    font-family: gudea;
    border: 3px solid #615655;
    text-align: center;
    color: #717878;
    font-weight: 600;
    margin-bottom: 10px;
}
/* .notetxt{
    background:gainsboro;
} */

.form-group {
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
}

.form-field {
    width: 540px;
    height: 200px;
    color: #575050;
    font-family: inherit;
    font-size: 14px;
    padding: 10px;
    margin: 0 0 1em 0;
    border: 3px solid #8b1c20;
    background: #eeeeee;
    resize: none;
    outline: none;
}

.form-field::placeholder {
    color: transparent;
}

.form-field:placeholder-shown~.form-label {
    font-size: 16px;
    cursor: text;
    top: 20px;
}

label,
.form-field:focus~.form-label {
    position: absolute;
    top: 5px;
    left: 8px;
    display: block;
    transition: 0.2s;
    font-size: 12px;
    color: #9b9b9b;
    background-image: linear-gradient(to bottom, #eeeeee, #eeeeee);
    background-size: 105% 5px;
    background-repeat: no-repeat;
    background-position: center;
}

.form-field:focus~.form-label {
    color: #8b1c20;
}

.form-field:focus {
    padding-bottom: 6px;
    border: 1px solid #8b1c20;
}

.form-field:valid {
    border-color: #979393;
}

.form-field:valid~.form-label {
    /* color: green; */
}

.snip1372 {
    font-family: 'Raleway', Arial, sans-serif;
    border: none;
    border-radius: 5px;
    color: #ffffff;
    cursor: pointer;
    padding: 0px 68px 0px 20px;
    text-align: center;
    display: inline-block;
    font-weight: 300;
    outline: none;
    position: relative;
    font-size: 15px;
    line-height: 40px;
    background-image: linear-gradient(to top, #262626 0, #333333 100%);
    box-shadow: 1px 1px 2px -2px rgb(255 255 255 / 80%) inset, -1px -1px 2px -2px rgb(255 255 255 / 30%) inset, 1px 1px 4px rgb(0 0 0 / 30%);
    text-shadow: 1px 1px 2px rgb(0 0 0 / 50%);
}

.snip1372 i {
    font-size: 1.5em;
    width: 51px;
    line-height: 43px;
    position: absolute;
    right: 0;
}

.snip1372:before,
.snip1372:after {
    content: "";
    position: absolute;
    top: 4px;
    right: 4px;
    width: 45px;
    bottom: 4px;
    border-radius: 5px 5px;
}

.snip1372:after {
    background-color: rgba(255, 255, 255, 0.075);
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4) inset, 1px 1px 2px -2px rgba(255, 255, 255, 0.3);
}

.snip1372:before {
    opacity: 0;
    background-color: #81eed8;
    mix-blend-mode: color;
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
}

.snip1372:hover,
.snip1372.hover {
    color: #ffffff;
}

.snip1372:hover:before,
.snip1372.hover:before {
    opacity: 1;
}
</style>
<!-----------------------------------------------Start Report Abuse code------------------------------------------------------>
<?php
               if(isset($_REQUEST['btnreportabuse']))
               {
                  
                    $insQA=$con->query("insert into report_course values(0,'$_SESSION[userid]','$_SESSION[t_id]','$_SESSION[uploadcid]','$_REQUEST[report]')");
               }
    ?>
<!-----------------------------------------------End Report Abuse code------------------------------------------------------>

<!-----------------------------------------------Q/a code------------------------------------------------------>
<?php
               if(isset($_REQUEST['qabtn']))
               {
                  
                    $insQA=$con->query("insert into course_question values(0,'$_SESSION[userid]','$_SESSION[uploadcid]','$_SESSION[t_id]','$_REQUEST[txtquestion]','dxfcgvbhjn')");
               }

    ?>

<!-----------------------------------------------End Q/a code------------------------------------------------ -->

<!-----------------------------------------------notes code------------------------------------------------------>
<?php
               if(isset($_REQUEST['notesbtn']))
               {
                   $selectnotes=$con->query("select *from notes where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
                   $selectnodedata=mysqli_fetch_array($selectnotes);
                   if($selectnodedata[0]=="")
                   {
                    //    echo "<script>alert('hello inside if')</script>";
                   $insQA=$con->query("insert into notes values(0,'$_SESSION[userid]','$_SESSION[uploadcid]','$_REQUEST[txtnotes]')");
                   }
                   else
                  {
                   $updQA=$con->query("update notes set note='$_REQUEST[txtnotes]' where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
                  }

 
               }
               
    ?>

<!-----------------------------------------------End notes code------------------------------------------------ -->



<!-- ------------------------------------follow tutor code ----------------------------------->
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
<!-----------------------------------------end follow tutor code------------------------------- -->

<html>



<!----------------------------------------------- review of courses ---------------------------------------------->
<?php
    if(isset($_REQUEST['btnreviewcourse']))
    {
        $date = date('d-m-Y');
        
    
    $ch=$con->query("select *from review where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");   
    $chh=mysqli_fetch_array($ch);
    if($chh[0]==0)
    {
       
        $in=$con->query("insert into review values(0,'$_SESSION[userid]','$_SESSION[uploadcid]','$_REQUEST[coursereview]','$date')");
        
    }
    else
    {
        
        $up=$con->query("update review set review='$_REQUEST[coursereview]' where  userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
    }
}
    ?>
<!----------------------------------------------- end of review of courses ---------------------------------------------->

<!------------------------------------------------- review of tutor------------------------------------------------- -->

<?php
    if(isset($_REQUEST['btnreviewtutor']))
    {
        $date = date('d-m-Y');
        
    
    $ch=$con->query("select *from review_tutor where userid like '$_SESSION[userid]' and tutorid like '$_SESSION[t_id]'");   
    $chh=mysqli_fetch_array($ch);
    if($chh[0]==0)
    {
        
        $in=$con->query("insert into review_tutor values(0,'$_SESSION[userid]','$_SESSION[t_id]','$_REQUEST[tutorreview]','$date')");
      
    }
    else
    {
        
        $up=$con->query("update review_tutor set review='$_REQUEST[tutorreview]' where  userid like '$_SESSION[userid]' and tutorid like '$_SESSION[t_id]'");
    }
   
}
    ?>
<!-------------------------------------------------end of review of tutor------------------------------------------------- -->

<?php 
    echo $_SESSION['userid'];
    echo $_SESSION['uploadcid'];
    // echo $_SESSION['t_id'];
    if($_REQUEST['cid']!="")
                            {
                               $_SESSION['courseid']=$_REQUEST['cid'];
                            }

$in=$con->query("select * from course_video_addition where uploadcourseid like '$_SESSION[courseid]'");
$check1=mysqli_fetch_array($in);
$in3=$con->query("select * from courses_upload where uploadcourseid like '$_SESSION[courseid]'");
$indata=mysqli_fetch_array($in3);


    ?>

<body>


    <!-- -------------------------------------------big video display code---------------------------------------------- -->
    <div class="container-fluid">
        <div class="row" style="margin-top:95px;">
            <div class="col-md-8">

                <video controls width="95%" id="ProductImg" style="margin-left:50px;"
                    src="tutor_site/<?php echo $check1[4];?>">

                </video>
                <div class="video-desc">
                    <h3><?php  echo $indata[4];?> </h3>
                    <div class="description-data">Notes : <?php echo $indata[11];?>
                    </div>
                    <div class="ti-desktop detail1"> Total length : <?php echo  $indata[10];?></div><br>
                    <div class="ti-bar-chart detail2"> Level : <?php echo $indata[9];?> </div>

                </div>

                <div class="border-v"> </div>

                <div class="c-feature" id="demo">
                    <h5> Course Features </h5>
                    <h6> <?php echo  $indata[6];?></h6>
                </div>

                <div class="border-v"> </div>
                <!-- -------------------------------------------end of big video display code---------------------------------------------- -->

                <!-- ----------------------------------------------rating & review ,Q/A,Notes,Tutor------------------------------- -->

                <div class="navbar-container">
                    <ul class="ratingul">
                        <li class="nav-link active-link ratingli">
                            <a class="ratinga" onclick="openCity(event, 'notes')">Notes
                            </a>

                            <div class="underline"></div>
                        </li>
                        <li class="nav-link ratingli">
                            <a class="ratinga" onclick="openCity(event, 'q/a')">Q/A</a>
                            <div class="underline"></div>
                        </li>
                        <li class="nav-link ratingli">
                            <a class="ratinga" onclick="openCity(event, 'rr')">Rating & Review
                            </a>
                            <div class="underline"></div>
                        </li>
                        <li class="nav-link ratingli">
                            <a class="ratinga" onclick="openCity(event, 'tutor')">Tutor</a>
                            <div class="underline"></div>
                        </li>
                    </ul>
                </div>


                <!-- -----------------------------------------------------end of rating & review ,Q/A,Notes,Tutor------------------------------- -->

                <!---------------------------------------------- model----------------------------------------------- -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Here Is Your Courses</h4>


                            </div>

                            <div class="modal-body" id="rdata">

                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------- model end----------------------------------------------- -->

                <!----------------------------------------------Report Abuse model----------------------------------------------- -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Report Abues</h4>


                            </div>

                            <div class="modal-body" id="rdata2">

                            </div>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------Report Abuse model end----------------------------------------------- -->
            </div>
            <!-- -----------------------------------------side video disply code----------------------------------------------- -->
            <div class="col-md-4">
                <?php
                            
                            if($_REQUEST['cid']!="")
                            {
                               $_SESSION['courseid']=$_REQUEST['cid'];
                            }
                         $in2=$con->query("select u.*,a.* from courses_upload u,course_video_addition a where u.uploadcourseid=a.uploadcourseid and u.uploadcourseid like '$_SESSION[courseid]'");
                         
                        
                            while($check=mysqli_fetch_array($in2))
                            {
                                
                                ?>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <video playsinline autoplay muted width="100%" class="small-img" onclick="myFunction();"
                                id="myVideo2" src="tutor_site\<?php echo $check[17];?>">
                            </video>
                        </div>
                        <div class="col-md-6">
                            <h5> <?php echo $check[4]; ?></h5>
                            <h6><?php echo $check[16]; ?></h6>
                            <span style="font-size:15px;">&#x20B9;&nbsp;<?php echo $check[7]; ?></span>
                        </div>
                    </div>
                </div>
                <?php 
                }
                 ?>

                <!-- -----------------------------------------end of side video disply code-----------------------------------------------                    -->
            </div>
        </div>
    </div>
    <!-- ------------------------------------------end of video display code------------------------------------------------- -->




    <!-- ***********************************************divs of tablink for rating&review,Q/A,Notes*****************************************-->



    <!----------------------------------------------Rating&Review div-------------------------------------------------->

    <div class="container tabcontent" id="rr">


        <button onclick="ratedata('rr','first',0);" class="report-model-open" style="width:260px;background:none;outline:none;" data-toggle="modal"
            data-target="#myModal">Rating & Review
        </button>
        <!-------------review data of courses------------>
        <?php
                      
                      $creview=$con->query("select u.*,rvc.* from user_register u ,review rvc where u.userid=rvc.userid and uploadcourseid like '$_SESSION[uploadcid]'");
                      while($creviewdata=mysqli_fetch_array($creview))
                      {
                          ?>
        <div style="display: flex;">
            <div style="    color: white;
    margin-top: -5px;
    margin-right: 10px;
    background: #67676b;
    height: 40px;
    width: 40px;
    text-align: center;
    font-size: 23px;
    font-weight: 500;
    border-radius: 40px;">
                <?php
                            $n = $creviewdata[1];
                            $var=substr($n,0,1);
                            echo $var;
                            
                             ?>
            </div>

            <h4 style="text-transform: capitalize;"><?php echo $creviewdata[1]." ".$creviewdata[2]; ?><h4>

        </div>

        <!-- ------rating----- -->
        <?php
                            $rt=$con->query("select ratecourse from rate where userid like '$creviewdata[0]' and uploadcourseid like '$_SESSION[uploadcid]'");
                            $rrt=mysqli_fetch_array($rt);
                        ?>
        <div style="margin-left:52px;">

            <?php
                            for($c=1;$c<=5;$c++)
                            {
                                if($c<=$rrt[0])
                                {
                             ?>
            <i class="fa fa-star" style="color:#ffc107; font-size:18px;"></i>
            <?php
                                }
                                else
                                {
                              ?>
            <i class="fa fa-star-o" style="color:#ffc107; font-size:18px;"></i>
            <?php
                                }
                            }  
                        ?>
        </div>
        <!-- ------end rating----- -->
        <!-- ------review display----- -->
        <div style="margin-left:52px;">
            <h5><?php echo $creviewdata[12];?><h5>
        </div>
        <!-- ------end review display----- -->

        <?php
                      }
                     
                   ?>

<hr style="width:50%;text-align:left;margin-left:0">
        <!-------- end of review data of courses---------->
        <button class="report-model-open" style="width:260px;background:none;outline:none;" onclick="ratedata2('ra','rafirst',0);" data-toggle="modal"
            data-target="#myModal2">Report Abuse
        </button>
        
    </div>

    <div class="border-v"> </div>
    <!---------------------------------------------- end Rating&Review div-------------------------------------------------->

    <!------------------------------------------------Tutor data div------------------------------------------------------>
    <div class="container tabcontent" id="tutor">
        <div class="row">
            <?php
                          $tutdetail=$con->query("select * from tutor where tutorid like '$_SESSION[t_id]' ");
                          $tutdetaildata=mysqli_fetch_array($tutdetail);
                          ?>
            <div class="col-md-3">


                <img src="tutor_site/<?php echo $tutdetaildata[6]?>" ;
                    style="height:200px ;width:200px;border-radius: 100px;">



            </div>
            <div class="col-md-8" style="margin-left:-55px;">


                <div style="text-transform:capitalize;"><i class="fa fa-user-circle f5"></i><?php echo $tutdetaildata[1]." ".$tutdetaildata[2]; ?>
                </div>
                <div><i class="fa fa-envelope f5"></i><?php echo $tutdetaildata[6];?></div>
                <div><i class="fa fa-phone-square f5"></i><?php echo $tutdetaildata[7];?></div>
                <div><i class="fa fa-graduation-cap f5"></i><?php echo $tutdetaildata[8];?></div>
                <div><i class="fa  fa-bar-chart f5"></i><?php echo $tutdetaildata[11];?></div>

                <a href="<?php echo $tutdetaildata[12]; ?>"> <i class="fa fa-facebook-square f5"></i></a>
                <a href="<?php echo $tutdetaildata[12]; ?>"><i class="fa fa-twitter f5"></i></a>
                <div>
                    <?php

                            $selectrate=$con->query("select sum(ratetutor),count(userid) from rate_tutor where tutorid like '$_SESSION[t_id]'");

                            $selectratedata=mysqli_fetch_array($selectrate);

                            $avg=round($selectratedata[0]/$selectratedata[1]);
                            
                            for($c=1;$c<=5;$c++)
                            {
                                if($c<=$avg)
                                {
                            ?>
                    <i class="fa fa-star" style="color:#ffc107; font-size:20px;"></i>
                    <?php
                                }
                                else
                                {
                            ?>
                    <i class="fa fa-star-o" style="color:#ffc107; font-size:20px;"></i>
                    <?php
                                }
                            }
                            ?>
                </div>
                <button onclick="ratedata('rrt','tfirst',0);" class="report-model-open" style="width:260px;background:none;outline:none;margin-left: 0px;" data-toggle="modal"
                    data-target="#myModal">Rating & Review
                </button>

                <!-- follow button code-->
                <form method="post">
                    <?php
                                    if($_SESSION['userid']=="")
                                    {
                                        ?>
                    <button type="button" class="report-model-open" name="btnfollow" title="please login">follow<i
                            class="fa fa-thumbs-o-up"></i></button>
                    <?php
                                    }
                                    else{
                                        $se=$con->query("select *from follow_tutor where userid like '$_SESSION[userid]' and tutorid like '$_SESSION[t_id]'");
                                        $sedata=mysqli_fetch_array($se);
                                        if($sedata[0]=="")
                                        {
                                            ?>
                    <button type="submit" class="report-model-open" name="btnfollow">follow<i class="fa fa-thumbs-o-up"></i></button>
                    <?php
                                        }
                                        else
                                        {
                                            ?>
                    <button type="submit" class="report-model-open" name="btnunfollow">unfollow<i class="fa fa-thumbs-up"></i></button>
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
    <!-- <div class="border-v"> </div> -->



    <!----------------------------------------------end of Tutor data div------------------------------------------------------>

    <!-- --------------------------------------------Q/A data div-------------------------------------------------- -->

    <div class="container tabcontent" id="q/a">
        <?php
                          
                            $selectans=$con->query("select CQ.*,u.*
                            from course_question CQ,user_register u
                            where
                             u.userid like '$_SESSION[userid]' and
                             u.userid=CQ.userid and
                              CQ.uploadcourseid like '$_SESSION[uploadcid]' ");
                            
                            while($dataQ=mysqli_fetch_array($selectans))
                            {
                              
                                // print_r($dataQ);
                                ?>
        <input type="hidden" name="ttxt" value="<?php echo $dataQ[3];?>">

        <div style="display: flex;">
            <div style="    color: white;
    margin-top: -5px;
    margin-right: 10px;
    background: #67676b;
    height: 40px;
    width: 40px;
    text-align: center;
    font-size: 23px;
    font-weight: 500;
    border-radius: 40px;">
                <?php
                                        $n = $dataQ[1];
                                        $var=substr($n,0,1);
                                        echo $var;
                                        
                                        ?>
            </div>
            <div>

                <h4 style="text-transform: capitalize;"><?php echo $dataQ[7]." ".$dataQ[8]; ?><h4>

                        <h5 style="text-transform: capitalize;">Q. <?php echo $dataQ[4];?><h5>


                                <?php
                                           $tdetail=$con->query("select *from tutor where tutorid like '$_REQUEST[ttxt]'");
                                           $tdetaildata=mysqli_fetch_array($tutdetail);
                                           $ans=$con->query("select *from course_answer where questionid like $dataQ[0] ");
                                           $dataans=mysqli_fetch_array($ans);
                                      ?>

                                <div>
                                    <img src="tutor_site/<?php echo $tutdetaildata[6];?>"
                                        style="height:55px;width:55px;border-radius:50%;margin-left:40px;">
                                    <div
                                        style="    margin-left: 105px; margin-top: -51px;font-size: 17px;font-weight: 600;letter-spacing: 0.2px;color: #3c3b37;">
                                        <?php echo $tutdetaildata[1]." ".$tutdetaildata[2]; ?></div>
                                    <div
                                        style="    margin-left: 105px;margin-top: 9px;font-size: 1rem;letter-spacing: -.02rem; color: #3c3b37;">
                                        A. Hey <?php echo $dataQ[7];?>!<?php echo $dataans[5];?></div>
                                </div>
                                <hr>
            </div>
        </div>



        <?php
                            }
                        ?>
        <form method="post">
            <!-- <div>
                <input type="text" name="txtquestion" size="70">
                <button type="submit" name="qabtn">submit</button>
            </div>
            <div>
                <label>have any quetion ?place your question hear</label>
            </div> -->
            <input type="text" name="txtquestion" autofocus="" rows="1" cols="64"
            style="outline:none;width: 60%; border: 2px solid #798080;height: 40px;border-top-left-radius: 20px;resize:none;border-bottom-right-radius: 20px;">
        <button type="submit" name="qabtn" class="quebtn"
            style="padding: 6px;
    color: white;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    border: transparent;
    background-color: #3e4646;
    outline: none;
    width: 100px;">
Submit</button>
        </form>
       
    
    </div>
    <!-- ------------------------------------------End of Q/A data div--------------------------------------------------------------- -->


    <!-- ---------------------------------------------------Notes div------------------------------------------------ -->
    <div class="container tabcontent" id="notes">

        <?php
                       $notes=$con->query("select * from notes where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
                       $notesdata=mysqli_fetch_array($notes);
                       if($notesdata[0]=="")
                    //    while()
                       {
                        ?>

        <form method="post">

            <div class="form-group">
                <textarea id="message" class="form-field" placeholder="Your Message" rows="10" cols="60" name="txtnotes"
                    required></textarea>
                <!-- <label for="message" class="form-label">Your Message</label> -->
            </div>

            <div>
                <!-- <textarea class="notetxt" rows="10" cols="60" name="txtnotes" placeholder="place your notes hear">
                                 </textarea> -->
                <button type="submt" name="notesbtn" class="snip1372">Add note<i class="ion-plus-round"></i></button>

                <!-- <button type="submt" name="notesbtn">Save</button> -->
            </div>

        </form>

        <?php
                            }
                            else
                            {
                                ?>
        <form method="post">

            <div class="form-group">
                <textarea id="message" class="form-field" placeholder="Your Message" rows="10" cols="60" name="txtnotes"
                    required><?php echo $notesdata[3];?></textarea>
                <!-- <label for="message" class="form-label">Your Message</label> -->
            </div>

            <div>
                <!-- <textarea class="notetxt" rows="10" cols="60" name="txtnotes" placeholder="place your notes hear">
                                </textarea> -->
                <button type="submt" name="notesbtn" class="snip1372">Add note<i class="ion-plus-round"></i></button>
                <!-- <button type="submt" name="notesbtn">Save</button> -->
            </div>

        </form>

        <?php
                            }
                            ?>
    </div>

    <!-- ---------------------------------------------------End Notes div------------------------------------------------ -->


    <!-- *************************************************end divs of tablink for rating&review,Q/A,Notes*****************************************-->
</body>

</html>
<?php
require_once "footer.php";
?> <?php
require_once "script.php";
// }
?>
