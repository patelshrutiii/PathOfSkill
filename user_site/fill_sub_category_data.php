<?php require_once "connection.php";?>
<?php
if($_REQUEST['wht']=='filldata')
{
?>

<div class="row">
    <?php
                    $id=$_SESSION['filtersubcid'];
                    
                    // $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and cu.categoryid=s.categoryid and s.subcategory=cu.subcategory and cu.subcategoryid ='".$id."'");
                    $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid='".$id."'");
                    			while($row1=mysqli_fetch_array($res))
								{     
                                    // print_r($row1);    
                ?>
    <div class="col-md-4" style="margin-top:35px;">
        <a href="detail_page?courseid=<?php echo $row1[0];?>" style="margin:0px;cursor: pointer;">
            <div class="card box">
                <?php
                            if($row1[7]=='0')
                            {
                                ?>
                <div class="video-card"> Free </div>
                <?php
                            }
                            else
                            {
                                ?>
                <div class="video-card"> New </div>
                <?php
                            }
                           
                            ?>

                <img class="thumb12" src="tutor_site\<?php echo $row1[5];?>" alt="">

        </a>

        <div class="card-body" style="box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);border-radius: 0px 0px 5px 5px;">
            <div style="margin-left: -9px;">
                <span class="course-type"><?php echo $row1[17];?></span>
                <span class="course-type"><?php echo $row1[15];?></span>
                <!-- <span class="course-type"><?php echo $row1[7];?></span> -->
            </div>
            <h4 class="card-title"><?php echo $row1[4];?></h4>
            <div>
                <div style="display:inline-block;font-size:14px;padding-left:5px;">
                <?php

$selectrate=$con->query("select sum(ratecourse),count(userid) from rate where uploadcourseid like $row1[0]");

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
            $countr=$con->query("SELECT COUNT(review) from review where uploadcourseid like $row1[0] GROUP BY uploadcourseid");
            $countrdata=mysqli_fetch_array($countr);
          
?>
                    (<?php echo $countrdata[0];?>)


                </div>
                <div style="display:inline-block;padding-left:29px;font-size:13px;"><i
                        class="ti-bar-chart"></i>&nbsp;<?php echo $row1[9]?></div>
            </div>
            <p class="card-text"><?php echo $row1[19]." ".$row1[20];?></p>
            <!-- <p class="card-text"> for description=$row1[6]; -->

            </p>
            <?php
                            if($row1[7]=='0')
                            {
                                ?>
            <h5 style="color:black;">Free</h5>
                <?php
                            }
                            else{
                                ?>
                <h5 style="color:black;">&#8377;<?php echo $row1[7];?>
                    &nbsp;&nbsp;<del>&#8377;<?php echo $row1[8];?></del>
                </h5>
                <?php
                            }
                            ?>

        </div>
        <!-- <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                <div class="views">Oct 20, 12:45PM
                </div>
                <div class="stats">
                    <i class="far fa-eye"></i> 1347
                    <i class="far fa-comment"></i> 12
                </div>

            </div> -->
    </div>
</div>



<?php
                    
                    }
                ?>


</div>
<?php
}
?>


<!-- ===================================subcategory search dat====================================== -->
<?php
if($_REQUEST['wht']=='searchdata')
{
   
?>

<div class="row">
    <?php
                    $id=$_SESSION['filtersubcid'];
                    
					// $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.categoryid=s.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid ='".$id."' and cu.coursename like '$_REQUEST[ii]%' ");
                    $res=$con->query("select *from courses_upload where subcategoryid ='".$id."' and coursename like '$_REQUEST[sid]%'");
								while($row1=mysqli_fetch_array($res))
								{     
                                    // print_r($row1);    
                ?>
                
    <div class="col-md-4">
    <a href="" style="margin:0px;cursor: pointer;">
            <div class="card box">
                <?php
                            if($row1[7]=='0')
                            {
                                ?>
                <div class="video-card"> Free </div>
                <?php
                            }
                            else
                            {
                                ?>
                <div class="video-card"> New </div>
                <?php
                            }
                           
                            ?>

                <img class="thumb12" src="tutor_site\<?php echo $row1[5];?>" alt="">

        </a>

        <div class="card-body" style="box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);border-radius: 0px 0px 5px 5px;">
            <div style="margin-left: -9px;">
                <span class="course-type"><?php echo $row1[17];?></span>
                <span class="course-type"><?php echo $row1[15];?></span>
                <!-- <span class="course-type"><?php echo $row1[7];?></span> -->
            </div>
            <h4 class="card-title"><?php echo $row1[4];?></h4>
            <div>
                <div style="display:inline-block;font-size:14px;padding-left:5px;">
                <?php

$selectrate=$con->query("select sum(ratecourse),count(userid) from rate where uploadcourseid like $row1[0]");

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
            $countr=$con->query("SELECT COUNT(review) from review where uploadcourseid like $row1[0] GROUP BY uploadcourseid");
            $countrdata=mysqli_fetch_array($countr);
          
?>
                    (<?php echo $countrdata[0];?>)


                </div>
                <div style="display:inline-block;padding-left:29px;font-size:13px;"><i
                        class="ti-bar-chart"></i>&nbsp;<?php echo $row1[9]?></div>
            </div>
            <p class="card-text"><?php echo $row1[19]." ".$row1[20];?></p>
            <p class="card-text"> <?php echo $row1[6];?>

            </p>
            <?php
                            if($row1[7]=='0')
                            {
                                ?>
            <h5 style="color:black;">Free</h5>
                <?php
                            }
                            else{
                                ?>
                <h5 style="color:black;">&#8377;<?php echo $row1[7];?>
                    &nbsp;&nbsp;<del>&#8377;<?php echo $row1[8];?></del>
                </h5>
                <?php
                            }
                            ?>

        </div>
        <!-- <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                <div class="views">Oct 20, 12:45PM
                </div>
                <div class="stats">
                    <i class="far fa-eye"></i> 1347
                    <i class="far fa-comment"></i> 12
                </div>

            </div> -->
    </div>
</div>



<?php
                    
                    }
                ?>


</div>
<?php
}
?>
<!-- =======================================================End of subcategory search data============================ -->

<!-- =============================================subcategory course rating ================================================ -->



<?php 
if($_REQUEST['wht']=='rate')
{
?>

<div class="row">
    <?php
                    $id=$_SESSION['filtersubcid'];
                    
					$res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid='".$id."'");
								while($row1=mysqli_fetch_array($res))
								{     
                                    // print_r($row1);    
                                    $avgrate=$con->query("select sum(ratecourse),count(userid) from rate where uploadcourseid like $row1[0]");
                                    $avgrate1=mysqli_fetch_array($avgrate);
                                    $avg=round($avgrate1[0]/$avgrate1[1],1);
                                    // echo $avgrate1[0];
                                    // echo $avgrate1[1];
                                    // echo $avg;
                                    if($avg>=$_REQUEST['ii'])
                                    {

                                   
                ?>
    <div class="col-md-4" style="margin-top:35px;">
    <a href="" style="margin:0px;cursor: pointer;">
            <div class="card box">
                <?php
                            if($row1[7]=='0')
                            {
                                ?>
                <div class="video-card"> Free </div>
                <?php
                            }
                            else
                            {
                                ?>
                <div class="video-card"> New </div>
                <?php
                            }
                           
                            ?>

                <img class="thumb12" src="tutor_site\<?php echo $row1[5];?>" alt="">

        </a>

        <div class="card-body" style="box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);border-radius: 0px 0px 5px 5px;">
            <div style="margin-left: -9px;">
                <span class="course-type"><?php echo $row1[17];?></span>
                <span class="course-type"><?php echo $row1[15];?></span>
                <!-- <span class="course-type"><?php echo $row1[7];?></span> -->
            </div>
            <h4 class="card-title"><?php echo $row1[4];?></h4>
            <div>
                <div style="display:inline-block;font-size:14px;padding-left:5px;">
                <?php

$selectrate=$con->query("select sum(ratecourse),count(userid) from rate where uploadcourseid like $row1[0]");

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
            $countr=$con->query("SELECT COUNT(review) from review where uploadcourseid like $row1[0] GROUP BY uploadcourseid");
            $countrdata=mysqli_fetch_array($countr);
          
?>
                    (<?php echo $countrdata[0];?>)


                </div>
                <div style="display:inline-block;padding-left:29px;font-size:13px;"><i
                        class="ti-bar-chart"></i>&nbsp;<?php echo $row1[9]?></div>
            </div>
            <p class="card-text"><?php echo $row1[19]." ".$row1[20];?></p>
            <!-- <p class="card-text"> for description=$row1[6]; -->

            </p>
            <?php
                            if($row1[7]=='0')
                            {
                                ?>
            <h5 style="color:black;">Free</h5>
                <?php
                            }
                            else{
                                ?>
                <h5 style="color:black;">&#8377;<?php echo $row1[7];?>
                    &nbsp;&nbsp;<del>&#8377;<?php echo $row1[8];?></del>
                </h5>
                <?php
                            }
                            ?>

        </div>
        <!-- <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                <div class="views">Oct 20, 12:45PM
                </div>
                <div class="stats">
                    <i class="far fa-eye"></i> 1347
                    <i class="far fa-comment"></i> 12
                </div>

            </div> -->
    </div>
</div>



<?php
 }
                    
                    }
                ?>


</div>
<?php
}
?>



<!-- =============================================End subcategory course rating ================================================ -->


<!-- ======================================================sub category level========================================== -->


<?php
if($_REQUEST['wht']=='clevel')
{
    $_SESSION['clevelid']=$_REQUEST['sid'];
?>

<div class="row">

    <?php
                    $id=$_SESSION['filtersubcid'];
                    

                    $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid='".$id."'and cu.level like '$_REQUEST[sid]'");
                    while($row1=mysqli_fetch_array($res))
								{     
                                    
                                    // print_r($row1);    
                ?>
                
    <div class="col-md-4" style="margin-top:35px;">
        <a href="" style="margin:0px;cursor: pointer;">
            <div class="card box">
                <?php
                            if($row1[7]=='0')
                            {
                                ?>
                <div class="video-card"> Free </div>
                <?php
                            }
                            else
                            {
                                ?>
                <div class="video-card"> New </div>
                <?php
                            }
                           
                            ?>

                <img class="thumb12" src="tutor_site\<?php echo $row1[5];?>" alt="">

        </a>

        <div class="card-body" style="box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);border-radius: 0px 0px 5px 5px;">
            <div style="margin-left: -9px;">
                <span class="course-type"><?php echo $row1[17];?></span>
                <span class="course-type"><?php echo $row1[15];?></span>
                <!-- <span class="course-type"><?php echo $row1[7];?></span> -->
            </div>
            <h4 class="card-title"><?php echo $row1[4];?></h4>
            <div>
                <div style="display:inline-block;font-size:14px;padding-left:5px;">
                <?php

$selectrate=$con->query("select sum(ratecourse),count(userid) from rate where uploadcourseid like $row1[0]");

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
            $countr=$con->query("SELECT COUNT(review) from review where uploadcourseid like $row1[0] GROUP BY uploadcourseid");
            $countrdata=mysqli_fetch_array($countr);
          
?>
                    (<?php echo $countrdata[0];?>)


                </div>
                <div style="display:inline-block;padding-left:29px;font-size:13px;"><i
                        class="ti-bar-chart"></i>&nbsp;<?php echo $row1[9]?></div>
            </div>
            <p class="card-text"><?php echo $row1[19]." ".$row1[20];?></p>
            <!-- <p class="card-text"> for description=$row1[6]; -->

            </p>
            <?php
                            if($row1[7]=='0')
                            {
                                ?>
            <h5 style="color:black;">Free</h5>
                <?php
                            }
                            else{
                                ?>
                <h5 style="color:black;">&#8377;<?php echo $row1[7];?>
                    &nbsp;&nbsp;<del>&#8377;<?php echo $row1[8];?></del>
                </h5>
                <?php
                            }
                            ?>

        </div>
        <!-- <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                <div class="views">Oct 20, 12:45PM
                </div>
                <div class="stats">
                    <i class="far fa-eye"></i> 1347
                    <i class="far fa-comment"></i> 12
                </div>

            </div> -->
    </div>
</div>



<?php
                    
                    }
                ?>


</div>
<?php
}
?>



<!-- ======================================================End sub category level========================================== -->


<!-- =====================================paid/free================================================= -->
<?php
if($_REQUEST['wht']=='price')
{
   
?>

<div class="row">
    <?php
                    $id=$_SESSION['filtersubcid'];
                    // $check=$con->query("select * from courses_upload where categoryid ='".$id."'");
                    // $row=mysqli_fetch_array($check);
                    // echo $_REQUEST['ii'];
                        if($_REQUEST['sid']=='free')
                        {
                           
                            $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid='".$id."' and cu.price=0");
                           
                        }
                        else{
                            
                            $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid='".$id."' and cu.price>0");
                        }
                    while($row1=mysqli_fetch_array($res))
								{     
                                    // print_r($row1);    
                ?>
    <div class="col-md-4" style="margin-top:35px;">
    <a href="" style="margin:0px;cursor: pointer;">
            <div class="card box">
                <?php
                            if($row1[7]=='0')
                            {
                                ?>
                <div class="video-card"> Free </div>
                <?php
                            }
                            else
                            {
                                ?>
                <div class="video-card"> New </div>
                <?php
                            }
                           
                            ?>

                <img class="thumb12" src="tutor_site\<?php echo $row1[5];?>" alt="">

        </a>

        <div class="card-body" style="box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);border-radius: 0px 0px 5px 5px;">
            <div style="margin-left: -9px;">
                <span class="course-type"><?php echo $row1[17];?></span>
                <span class="course-type"><?php echo $row1[15];?></span>
                <!-- <span class="course-type"><?php echo $row1[7];?></span> -->
            </div>
            <h4 class="card-title"><?php echo $row1[4];?></h4>
            <div>
                <div style="display:inline-block;font-size:14px;padding-left:5px;">
                <?php

$selectrate=$con->query("select sum(ratecourse),count(userid) from rate where uploadcourseid like $row1[0]");

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
            $countr=$con->query("SELECT COUNT(review) from review where uploadcourseid like $row1[0] GROUP BY uploadcourseid");
            $countrdata=mysqli_fetch_array($countr);
          
?>
                    (<?php echo $countrdata[0];?>)


                </div>
                <div style="display:inline-block;padding-left:29px;font-size:13px;"><i
                        class="ti-bar-chart"></i>&nbsp;<?php echo $row1[9]?></div>
            </div>
            <p class="card-text"><?php echo $row1[19]." ".$row1[20];?></p>
            <!-- <p class="card-text"> for description=$row1[6]; -->

            </p>
            <?php
                            if($row1[7]=='0')
                            {
                                ?>
            <h5 style="color:black;">Free</h5>
                <?php
                            }
                            else{
                                ?>
                <h5 style="color:black;">&#8377;<?php echo $row1[7];?>
                    &nbsp;&nbsp;<del>&#8377;<?php echo $row1[8];?></del>
                </h5>
                <?php
                            }
                            ?>

        </div>
        <!-- <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                <div class="views">Oct 20, 12:45PM
                </div>
                <div class="stats">
                    <i class="far fa-eye"></i> 1347
                    <i class="far fa-comment"></i> 12
                </div>

            </div> -->
    </div>
</div>



<?php
                    
                    }
                ?>


</div>
<?php
}
?>
<!-- =====================================End paid/free================================================= -->

<!-- ======================================================start of combo sorting======================================== -->
<?php
if($_REQUEST['wht']=='clevel')
{
    
    ?>
    <div class="row">
    <?php
                    $id=$_SESSION['filtersubcid'];
					if($_REQUEST['sid']=='0')
                    {
                     $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid='".$id."' ORDER BY coursename");
                    }
                    else if($_REQUEST['sid']=='1')
                    {
                        $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid='".$id."' ORDER BY price desc");
                    }
                    else 
                    {
                        $res=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.subcategoryid=s.subcategoryid and cu.subcategoryid='".$id."' ORDER BY uploadcourseid desc"); 
                    }
								while($row1=mysqli_fetch_array($res))
								{     
                                    // print_r($row1);    
                ?>
    <div class="col-md-4" style="margin-top:35px;">
        <a href="detail_page?courseid=<?php echo $row1[0];?>" style="margin:0px;cursor: pointer;">
            <div class="card box">
                <?php
                            if($row1[7]=='0')
                            {
                                ?>
                <div class="video-card"> Free </div>
                <?php
                            }
                            else
                            {
                                ?>
                <div class="video-card"> New </div>
                <?php
                            }
                           
                            ?>

                <img class="thumb12" src="tutor_site\<?php echo $row1[5];?>" alt="">

        </a>

        <div class="card-body" style="box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);border-radius: 0px 0px 5px 5px;">
            <div style="margin-left: -9px;">
                <span class="course-type"><?php echo $row1[17];?></span>
                <span class="course-type"><?php echo $row1[15];?></span>
                <!-- <span class="course-type"><?php echo $row1[7];?></span> -->
            </div>
            <h4 class="card-title"><?php echo $row1[4];?></h4>
            <div>
                <div style="display:inline-block;font-size:14px;padding-left:5px;">
                <?php

$selectrate=$con->query("select sum(ratecourse),count(userid) from rate where uploadcourseid like $row1[0]");

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
            $countr=$con->query("SELECT COUNT(review) from review where uploadcourseid like $row1[0] GROUP BY uploadcourseid");
            $countrdata=mysqli_fetch_array($countr);
          
?>
                    (<?php echo $countrdata[0];?>)


                </div>
                <div style="display:inline-block;padding-left:29px;font-size:13px;"><i
                        class="ti-bar-chart"></i>&nbsp;<?php echo $row1[9]?></div>
            </div>
            <p class="card-text"><?php echo $row1[19]." ".$row1[20];?></p>
            <!-- <p class="card-text"> for description=$row1[6]; -->

            </p>
            <?php
                            if($row1[7]=='0')
                            {
                                ?>
            <h5 style="color:black;">Free</h5>
                <?php
                            }
                            else{
                                ?>
                <h5 style="color:black;">&#8377;<?php echo $row1[7];?>
                    &nbsp;&nbsp;<del>&#8377;<?php echo $row1[8];?></del>
                </h5>
                <?php
                            }
                            ?>

        </div>
    </div>
</div>



<?php
                    
                    }
                ?>


</div>
<?php
}
?>

<!-- ======================================================End of combo sorting======================================== -->