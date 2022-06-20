<?php
require_once "connection.php";
$perpage=5;
?>


<?php
require_once "tutor_query.php";
?>
<style>
.fa {
    color: #8e8383;
}

/* width */
::-webkit-scrollbar {
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
/* bank detail */
.cathead12{
    margin-top: 40px;
    font-size: 40px;
    padding: 17px;
    width: 100%;
    text-align: center;
    color: #FFFFFF;
    box-shadow: 0 0 20px 0 rgb(46 61 73 / 15%);
    border-radius: 0.25rem 0.25rem 0 0;
    background: -webkit-gradient(linear, left top, right bottom, from(#13528B), to(#02CCBA));
}
.courseselect1{
width: 100%;
    padding: 14px;
    margin-bottom: 13px;
    border: none;
}
.btnadd{
    margin: auto;
    border: none;
    height: 36px;
    font-size: 17px;
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 157px;
    color: white;
    border-radius: 4px;
    background-color: #04BFB5;
    box-shadow: 12px 15px 20px rgb(0 0 0 / 10%);
}
.trpay{
    height: 60px;
    border-radius: 10px;
    color: #ffffff;
    background-image: linear-gradient( 
180deg
 , #13528B, #02CCBA);
}
/* ================= */
.modal-dialog {}

.modal-content {}

.modal-header {
    padding: 16px 16px;
    color: #FFF;
    border-bottom: 2px dashed #337AB7;
}

.header-profile {
    padding: 30px;
    margin-left: 50px;
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

.snip1272 {
    border: none;
    background-color: #03C8B8;
    border-radius: 5px;
    color: #ffffff;
    cursor: pointer;
    padding: 2px 22px 0px 23px;
    display: inline-block;
    margin: 15px 30px;
    text-transform: uppercase;
    line-height: 35px;
    font-weight: 600;
    outline: none;
    position: relative;
    font-size: 17px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}

.snip1272:after {
    content: "";
    position: absolute;
    height: 100%;
    left: 50%;
    right: 50%;
    border-radius: inherit;
    background-color: rgba(255, 255, 255, 0.15);
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}

.snip1272:before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    -webkit-transform: translateY(5px);
    transform: translateY(5px);
    background-color: inherit;
    border-radius: 10px;
    z-index: -1;
    box-shadow: inset 0 -6px 10px rgba(0, 0, 0, 0.75);
}

.snip1272:hover:after,
.snip1272.hover:after {
    left: 0;
    right: 0;
}
</style>
<?php
$what=$_GET['what'];
$task=$_GET['task'];
$id=$_GET['id'];

$_SESSION['what'] =$what;
$tutor=$_SESSION['tutor_id'];
// echo $_SESSION['tutor_id'];
    if($_SESSION['what']=="dashboard")
    { 
      $pro=$con->query("select * from tutor where tutorid='$tutor'");  
      $pro1=mysqli_fetch_array($pro);
 ?>
<div class="container">

    <div class="row" style="margin-top:60px;">

        <!-- tutor card1 -->
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-5">
            <div class="wrapper">
                <div class="left">
                    <img class="img5" src="<?php echo $pro1[6]; ?>" alt="user" width="100">

                    <div type="button" class="" data-toggle="modal" data-target="#myModal">
                        <img src="images/edit2.png" style="width:50px;margin-top: -35px;cursor:pointer;">
                    </div>

                    <br><br><br>
                    <h4 style="color:white;"><?php echo $pro1[1]." ".$pro1[2];?></h4>
                    <br><br>
                    <!-- <h4 style="color:white;"><b>Last Login:</b></h4> -->
                    <h5 style="color:white;"><?php echo $pro1[11];?></h5>
                    <!-- <h5 style="color:white;"></h5> -->
                </div>
                <div class="right">
                    <div class="">
                        <h3>Personal Information</h3>
                        <div class="info_data">
                            <div>
                                <h4>Email</h4>
                                <p><?php echo $pro1[3];?></p>
                            </div>
                            <div>
                                <h4>Phone</h4>
                                <p><?php echo $pro1[7];?></p>
                            </div>
                        </div>
                    </div>

                    <div class="projects">
                        <h3>Other Information</h3>
                        <div class="projects_data">
                            <div class="data">
                                <h4>Bio</h4>
                                <p><?php echo $pro1[10];?></p>
                            </div>
                            <div class="data">
                                <h4>Skill</h4>
                                <p><?php echo $pro1[8];?></p>
                                <h4>Skill Level</h4>
                                <p><?php echo $pro1[9];?></p>
                            </div>
                        </div>
                    </div>

                    <button class="snip1272" name="editp" data-toggle="modal" data-target="#myModal1">Edit
                        profile</button>
                </div>
            </div>
        </div><!-- space between col-md -->
        <div class="col-md-1"></div>

        <!-- tutor video-right side -->
        <div class="col-md-5">
            <?php
   $t=$con->query("select *from tutor where tutorid like '$_SESSION[tutor_id]'")
?>
            <!-- <h2 class="tname"><?php echo $pro1[1];?></h2> -->
            <!-- <div class="row">
                <div class="col-md-4">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <?php
       $cunt=$con->query("SELECT COUNT(userid) FROM review_tutor");
       $cuntdata=mysqli_fetch_array($cunt);
     
       
    ?>
                <div class="col-md-5">
                    <h5>Total Reviews<?php echo $cuntdata[0];?><h5>

                </div>

                <hr style="border: 6px solid;
    width: 100%;
    border-style: solid;
    border-color: #11598E #0000ff #04C5B7;
    border-radius: 5px;">
            </div> -->


            <?php
   
   $in=$con->query("select u.*,rvt.* from user_register u ,review_tutor rvt where u.userid=rvt.userid and rvt.tutorid like '$_SESSION[tutor_id]' ");
   
    //    print_r($indata);
       ?> <p style="
       font-size: 16px;
       font-weight: 600;
       color: #16365E;">Rates and Reviews of tutor</p>
            <div style=" height: 200px;overflow-y: scroll;overflow-x: hidden;background:white;padding: 18px;">
                <?php
            while($indata=mysqli_fetch_array($in))
   { 
       ?>


                <div class="row">
                    <!-- <div class="col-md-1"></div> -->
                    <?php
            $rt=$con->query("select ratetutor from rate_tutor where userid like '$indata[0]' and tutorid like '$_SESSION[tutor_id]' and uploadcourseid");
            $rrt=mysqli_fetch_array($rt);
            ?>
                    <div class="col-md-12">
                        <div style="display: flex;">
                            <div style="color: white;
    margin-top: 0px;
    margin-right: 10px;
    background: #535353;
    height: 50px;
    text-align: center;
    font-size: 30px;
    font-weight: 500;
    width: 50px;
    border-radius: 40px;">
                                <?php
                      $n = $indata[1];
                      $var=substr($n,0,1);
                      echo $var;
                      
                       ?>
                            </div>
                            <h4> <?php echo $indata[1]; ?><h4>

                        </div>
                        <div style="    margin-left: 61px;
    margin-top: -30px;
    font-size: 20px;">

                            <?php
                          for($c=1;$c<=5;$c++)
                          {
                              if($c<=$rrt[0])
                              {
                           ?>
                            <i class="fa fa-star"></i>
                            <?php
                              }
                              else
                              {
                            ?>
                            <i class="fa fa-star-o"></i>
                            <?php
                              }
                          }
                          
         ?>

                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>


                            <div class="col-md-10" style="margin-left: -10px;">
                                <h5><?php echo $indata[12];?><h5>
                            </div>
                        </div>


                    </div>

                </div>

                <br>

                <?php
                }
   

                ?>
            </div>
            <p style="margin-top:5px;
    font-size: 16px;
    font-weight: 600;
    color: #16365E;">Rates and Reviews of Course</p>
            <!-- ============================================================================================================================================= -->

            <?php
   
   $in=$con->query("select t.*,rv.*,rt.*,cu.* from courses_upload cu,tutor t ,review rv,rate rt where cu.uploadcourseid=rv.uploadcourseid and cu.uploadcourseid=rt.uploadcourseid and cu.tutorid like '$_SESSION[tutor_id]' ");
  
    
       ?>
            <div style="height: 230px;overflow-y: scroll;overflow-x: hidden;background:white;padding: 18px;">
                <?php
     while($indata=mysqli_fetch_array($in))
   {
    //    print_r($indata);
       ?>
                <div style="display: flex;">
                    <img src="<?php echo $indata[29]; ?>" style="height: 60px;width: 60px;border-radius: 40px;">
                    <h4 style="margin-left: 11px;margin-right: auto;"> <?php echo $indata[1]; ?><h4>

                </div>

                <div class="row">
                    <?php
            $rt=$con->query("select ratecourse from rate where userid like '$indata[0]' and tutorid like '$_SESSION[tutor_id]' and uploadcourseid=$indata[17];");
            $rrt=mysqli_fetch_array($rt);
            print_r($rrt);
            ?>
                    <div class="col-md-12">
                        <div style=" margin-left: 70px;margin-top: -36px;font-size: 20px;">
                            <?php
                          for($c=1;$c<=5;$c++)
                          {
                              if($c<=$rrt[0])
                              {
                           ?>
                            <i class="fa fa-star"></i>
                            <?php
                              }
                              else
                              {
                            ?>
                            <i class="fa fa-star-o"></i>
                            <?php
                              }
                          }
                          
         ?>


                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>


                            <div class="col-md-10">
                                <h5><?php echo $indata[18];?><h5>
                            </div>
                        </div>


                        <hr>
                        <?php
                }
   

                ?>
                        <!-- ========================================================================================================================================= -->
                    </div>



                    <!-- loop start -->
                    <!-- loop end -->
                </div>
            </div>


        </div>

    </div>

    <?php
}
if($_SESSION['what']=="course")
{
   
   if($_REQUEST['task']=="delete")
    {
        $del=$con->query("delete from courses_upload where uploadcourseid=$_REQUEST[id]");     
    }
    if($_REQUEST['task']=="deleteall")
    {
        $del=$con->query("delete from courses_upload");   
    }

?>
    <!-- <div class="container"> -->
    <!-- <div class="row"> -->

    <!-- <div class="col-md-12 formdiv2"> -->
    <div class="formdiv2">

        <?php
            if($_REQUEST['task']=="update")
            {
            $selectcat=$con->query("select * from courses_upload where uploadcourseid=$_REQUEST[id]");
            $rowselect=mysqli_fetch_array($selectcat);
            $_SESSION['rid']=$rowselect[0];
            ?>

        <center>
            <form method="post" enctype="multipart/form-data" class="formcreatecourse">
                <div>
                    <select class="courseselect" name="catid" onChange="dropdownfill('subcategory',this.value);">
                        <option selected>select category</option>
                        <?php
                            $row1=$con->query("select * from category");
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
                    <!-- combo subcategory    -->
                    <select id="subcategory" name="subid" class="courseselect">
                        <option selected>select Subcategory</option>
                    </select>
                </div>
                <div>
                    <input type="text" class="text1" name="txtcoursename" placeholder="enter course name"
                        value="<?php echo $rowselect[4];?>">
                </div>
                <div>
                    <input type="file" placeholder="profile pic" name="upphoto">
                </div>
                <div>
                    <input type="text" placeholder="enter ccourse feature" name="txtcoursefeature"
                        value="<?php echo $rowselect[6];?>">
                </div>
                <div>
                    <input type="text" placeholder="enter price" name="txtprice" value="<?php echo $rowselect[7];?>">
                </div>
                <div>
                    <input type="text" placeholder="enter reguler price" name="txtrprice"
                        value="<?php echo $rowselect[8];?>">
                </div>
                <div>
                    <select name="slevel" class="courseselect">
                        <option>Beginner</option>
                        <option>Intermediate</option>
                        <option>Expert</option>
                    </select>
                </div>
                <div>
                    <input type="text" placeholder="enter total length" name="txtlength"
                        value="<?php echo $rowselect[10];?>">
                </div>
                <div>
                    <input type="text" placeholder="enter releted notes" name="txtnote"
                        value="<?php echo $rowselect[11];?>">
                </div>
                <div>
                    <button type="submit" class="button1" name="btncourseupdate">Update</button>
                </div>

                <!-- <button type="submit" class="button1" name="btnsubcatinsert1">insert2</button> -->
            </form>
        </center>

        <?php
                        }

                        else{
                    ?>

        <center>
            <div class="cathead">Create Course </div>
            <form method="post" enctype="multipart/form-data" class="formcreatecourse">
                <div>
                    <select class="courseselect" name="catid" onChange="dropdownfill('subcategory',this.value);">
                        <option selected>select category</option>
                        <?php
                    $row1=$con->query("select * from category");
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
                    <!-- combo subcategory    -->
                    <select id="subcategory" name="subid" class="courseselect">
                        <option selected>select Subcategory</option>
                    </select>
                </div>
                <div>
                    <input type="text" class="text1" name="txtcoursename" placeholder="enter course name">
                </div>
                <div>
                    <input type="file" placeholder="profile pic" name="upphoto">
                </div>
                <div>
                    <input type="text" placeholder="enter ccourse feature" name="txtcoursefeature">
                </div>
                <div>
                    <input type="text" placeholder="enter price" name="txtprice">
                </div>
                <div>
                    <input type="text" placeholder="enter reguler price" name="txtrprice">
                </div>
                <div>
                    <select name="slevel" class="courseselect">
                        <option>Beginner</option>
                        <option>Intermediate</option>
                        <option>Expert</option>
                    </select>
                </div>
                <div>
                    <input type="text" placeholder="enter total length" name="txtlength">
                </div>
                <div>
                    <input type="text" placeholder="enter releted notes" name="txtnote">
                </div>
                <div>
                    <button type="submit" class="button1" name="btnsubcatinsert">Create</button>
                </div>

                <!-- <button type="submit" class="button1" name="btnsubcatinsert1">insert2</button> -->
            </form>

        </center>
        <?php
            if($_SESSION['er']==1)
            {
                echo "already existed";
                unset($_SESSION['er']);
            }
}
        
            ?>
    </div>

    <!-- <div class="col-md-12" style="margin-left: 128px;"> -->
    <?php 
     if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
     {

     }
     else{
         $_SESSION['cur']=$_REQUEST['id'];
     }
     if($_SESSION['course']!=0)
     {
         $res=($perpage*$_SESSION['cur'])-$perpage;
         $page=ceil($_SESSION['course']/$perpage);
         
         if($_SESSION['cur']==$page)
         {
             $end=$_SESSION['course'];
        }
        else
        {
            $end=$res+$perpage;
        }
     }

    ?>
    <!-- <form class="example" style="width:500px;">
                    <input type="text" id="searchdata" placeholder="course" onkeyup="finddata('course','search',this.value)">
                    <i class="anticon anticon-delete text-danger" ondbclick="finddata('course','deleteall',0)"></i>
    </form> -->
    <p class="p-15">
        <?php
        if($_REQUEST['task']=="search")
        {
            echo "<span class='norecord text-sccess'>fonded recordes</span>";
        }
            else if($_SESSION['course']==0)
            {
                echo "<span>not record found</span>";
            }
            else{
                echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                       <span>to</span>
                       <span>".($end)."</span>";
            }?></p>

    <!-- <div class="row"> -->
    <div class="row">
        <div class="col-md-11"></div>
        <div class="col-md-1">
            <form method="post">
                <button type="submit" class="button2" onclick="finddata('course','deleteall',0);">Delete
                    All</button>
            </form>
        </div>
        <!-- <div class="col-md-1"> </div> -->
    </div>
    <table class="table1 table-striped table-hover" cellpadding="80">
        <tr class="tr5">
            <th>Category</th>
            <th>Subcategory</th>
            <th>Coursename</th>
            <th>CourseProfile</th>
            <th>Price</th>
            <th>update</th>
            <th>delete</th>
        </tr>

        <?php
            $c=0;
            if($_REQUEST['task']=="search")
            {
                // $check=$con->query("select u.uploadcourseid,c.categoryname,s.subcategoryname,u.coursename,u.courseprofileimage,u.price from category c,subcategory s,courses_upload u WHERE c.categoryid=u.categoryid and s.subcategoryid=u.subcategoryid and c.categoryid=s.categoryid and uploadcourseid like '$_REQUEST[id]%'");
                // $check=$con->query("select * from courses_upload where coursename like '$_REQUEST[id]%'");
                $check=$con->query("SELECT u.uploadcourseid,c.categoryname,s.subcategoryname,u.coursename,u.courseprofileimage,u.price from category c,subcategory s,courses_upload u WHERE c.categoryid=u.categoryid and s.subcategoryid=u.subcategoryid and c.categoryid=s.categoryid and coursename like '$_REQUEST[id]%'");

            }

            else{
                $id=$_SESSION['tutor_id'];
                // $check=$con->query("select * from courses_upload where tutorid like '$id' limit $res,$perpage");
                // $check=$con->query("select * from courses_upload  order by subcategoryid desc limit $res,$perpage");
                $check=$con->query("SELECT u.uploadcourseid,c.categoryname,s.subcategoryname,u.coursename,u.courseprofileimage,u.price from category c,subcategory s,courses_upload u WHERE c.categoryid=u.categoryid and s.subcategoryid=u.subcategoryid and c.categoryid=s.categoryid and tutorid like '$id' limit $res,$perpage");
             }
                
                while($row=mysqli_fetch_array($check))
                {
                    $c++;
                    ?>
        <tr class="tr6">

            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><img src="<?php echo $row['4']; ?>" width="100" height="80"></td>
            <td><?php echo $row[5]; ?></td>

            <td><i class="fa fa-pencil-square-o" style="color:#106994; font-weight:500;"
                    onclick="finddata('course','update',<?php echo $row[0];?>);"></i>
            </td>
            <td><i class="fa fa-trash" style="color:#106994; font-weight:500;"
                    onclick="finddata('course','delete',<?php echo $row[0];?>);"></i></td>
        </tr>
        <?php
                }
                if($_REQUEST['task']!="search")
                {
                ?>
    </table>

    <div class="col-md-2"></div>
    <div class="col-md-10" style="margin-top:30px;">
        <ul class="pagination pagination-lg justify-content-center">

            <?php
                        if($_SESSION['cur']>5)
                        {
                            ?>
            <li class="fa fa-angle-double-left page-item page-link"
                onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']-1;?>)"
                style="display:inline-block;"></li>
            <?php
                        }
                        if($page<=5)
                        {
                            $st=1;
                            $ed=$page;
                        }
                        else
                        {
                            if($_SESSION['cur']<=5) 
                            {
                                $st=1;
                                $ed=5;
                            }       
                            else
                            {
                                $st=$_SESSION['cur']-4;
                                $ed=$_SESSION['cur'];
                            }
                        }
                        ?>
            <?php
                         for($i=$st;$i<=$ed;$i++)
                         {
                             if($_SESSION['cur']==$i)
                             {
                                  
                                 ?>
            <li class="page-item" onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
            </li>

            <?php
                             }
                             else
                             {
                                 
                            ?>

            <li class="page-item" onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
            </li>

            <?php
                             }
                             ?>
            <?php
                         }
                         if($page>5 && $_SESSION['cur']<$page)
                         {
                             ?>
            <li class="fa fa-angle-double-right page-item page-link"
                onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']+1;?>)"
                style="display:inline-block;"></li>
            <?php
                         }
                         
                         ?>

        </ul>
    </div>
</div>

<?php 
                }
    ?>

<?php
}    



  ?>


<?php
    $c=1;
// echo $_REQUEST[id];
// echo $_REQUEST[task];
if($_SESSION['what']=="uploadvideo"){
    $_SESSION['c']=2;
    ?>
<!-- <div class="container">
        <div class="row">
            <div class="col-md-12 formdiv2"> -->
<div class="formdiv2">

    <div class="cathead">Upload Video</div>

    <form method="post" action="" class="formcreatecourse">
        <!-- <div  class="header-video"> <h3> Upload Video </h3> </div> -->
        <select name="cname" class="courseselect"
            onchange="up('upload','first',this.value,'<?php echo $_SESSION['c']; ?>');">
            <option selected disabled>Select Course Name</option>
            <?php $data=$con->query("select * from courses_upload where tutorid like '$_SESSION[tutor_id]'");
                                while($row=mysqli_fetch_array($data)){
                                ?>
            <option value="<?php echo $row[0];?>"><?php echo $row[4];?></option>
            <?php
                                    }
                                ?>
        </select>
    </form>

</div>

<?php
}
?>

<?php
if($_SESSION['what']=="upload"){
    if($_REQUEST['task']=="first")
    {
    
    $_SESSION['coursevideoupload']=$_REQUEST['id'];
   
    }
    if($_SESSION['c']<=12){
        
         echo 'enter '.($_SESSION['c']-1).'video';
        
        ?>
<div class="formdiv2">

    <div class="cathead">Upload Video</div>
    <form method="post" enctype="multipart/form-data" class="formcreatecourse">
        <div>
            <input type="text" name="vname" placeholder="Enter Video name" class="video-name">
            <input type="file" name="coursevideo" class="input-file" />
        </div>
        <div class="txtarea">
            <textarea class="video-dec" placeholder="Description" name="desc"></textarea>
            <textarea class="video-dec" placeholder="Notes" name="videonotes"></textarea>
        </div>


        <div
            onclick="up('upload','sec','<?php echo $_SESSION['coursevideoupload']; ?>','<?php echo $_SESSION['c']++;?>');">
            <button type="submit" name="uploadvideo" class="button1" style="margin-left: 38%;">

                Upload</button>
        </div>

    </form>
</div>
<div class="container-fluid">
    <div class="row r1">

        <?php
                   
                    $id=$_SESSION['tutor_id'];
                    $check=$con->query("select * from course_video_addition where tutorid like '$id' and uploadcourseid like '$_SESSION[coursevideoupload]' ");
                    while($row=mysqli_fetch_array($check))
                    {
                        $c++;
                ?>
        <div class="col-md-3">
            <video controls class="videodesplay">
                <source src="<?php echo $row[4];?>" type="video/mp4" autoplay="false">
            </video>
            <button type="" class="button3" name="btnshowinfo">show</button>
        </div>
        <?php
                    }
                    
                ?>

    </div>
</div>

<?php
    }
    else{
        echo "limit exceed";
    }
    ?>

<?php
}
?>

<!-- ---------------------------------------------------Start video model display code------------------------------------------ -->
<?php

 ?>
<!-- ----------------------------------------------------End video model display code------------------------------------------ -->

<!-- ---------------------------------------------------code of Q/A------------------------------------------------- -->
<?php
   if($_SESSION['what']=="q/a")
    {
        $totQ=$con->query("SELECT COUNT(questionid) FROM course_question where tutorid like '$_SESSION[tutor_id]'");
        $totQdata=mysqli_fetch_array($totQ);
        $totA=$con->query("SELECT COUNT(answerid) FROM course_answer where tutorid like '$_SESSION[tutor_id]'");
        $totAdata=mysqli_fetch_array($totA);
        ?>
<div class="divQA">
    <div class="row">

        <div class="col-md-8" style="text-transform: capitalize;
    font-size: 33px;
    color: #585963;">Quetions:</div>


        <div class="col-md-3">

            <h4 style="color: #beaeae;"> Total Question Asked: <?php echo $totQdata[0]; ?></h4>
            <h4 style="color: #beaeae;">Total Answer Given: <?php echo $totAdata[0]; ?></h4>
        </div>
    </div>

    <div class="container Qdiv">


        <?php
        
        $selectQ=$con->query("select u.*,cq.* from user_register u, course_question cq where 
        cq.tutorid like '$_SESSION[tutor_id]' and u.userid like cq.userid");
        while($selectQdata=mysqli_fetch_array($selectQ))
        {
        
        $selectA=$con->query("select *from course_answer where questionid like '$selectQdata[9]'");
        $selectAdata=mysqli_fetch_array($selectA);
        if($selectAdata[0]==0)
        {
            // print_r($selectQdata);
            ?>

        <div class="questiondiv">

            <div style="display: flex;margin-left: -25px;
">
                <div style="color: white;
    margin-top: -10px;
    margin-right: 10px;
    background: #484851;
    height: 40px;
    width: 40px;
    text-align: center;
    font-size: 25px;
    border-radius: 40px;">
                    <?php
                      $n = $selectQdata[1];
                      $var=substr($n,0,1);
                      echo $var;
                      
                       ?>
                </div>

                <h4 style="text-transform: capitalize;font-weight: 600;">
                    <?php echo $selectQdata[1]." ".$selectQdata[2]; ?><h4>


            </div>

            Q. <?php echo $selectQdata[13];?>?
        </div>

        <form method="post">
            <div>
                <input type="hidden" name="Qu_id" value="<?php echo $selectQdata[0];?>">
                <input type="hidden" name="Quploadc_id" value="<?php echo $selectQdata[11];?>">
                <input type="hidden" name="Q_id" value="<?php echo $selectQdata[9];?>">
                <div style="    display: flex;
    border: none;
    border-bottom: double;">
                    <input type="text" class="txtQ" name="txtans" size="70" placeholder="Put Your Answer Hear!">
                    <button class="Qbtn" type="submit" name="Ansbtn">submit</button>
                </div>
            </div>
        </form>

        <?php
        
        }
        else
        {

        }?>
        <br>
        <?php
        }
        ?>
    </div>
</div>
<?php

        
    }

?>

<!-- ---------------------------------------------------End code of Q/A------------------------------------------------- -->
<!-- -----------------------------------star display of like and followers code------------------------------------------- -->
<?php
if($_SESSION['what']=="likefollow")
{
    ?>

<div class="tab">
    <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'Followers')">Followers</button>
    <button class="tablinks" onclick="openCity(event, 'like')">Like</button>
    <button class="tablinks" onclick="openCity(event, 'courses like')">Courses Like</button>

</div>


<!-- =---------------------------------------------------star tabview div followers---------------------------------------- -->
<div id="Followers" class="tabcontent">
    <?php

          $followers=$con->query("SELECT COUNT(userid) FROM follow_tutor");
          $followersdata=mysqli_fetch_array($followers);
    ?>
    <div style="font-size:20px;color:black">Total Followers: <?php echo $followersdata[0];?></div>

    <!-- -------------foolowers info table--------- -->
    <?php
            if($_SESSION['what']=="likefollow")
            {
            
               if($_REQUEST['task']=="delete")
                {
                    $del=$con->query("delete from follow_tutor where followid=$_REQUEST[id]");   
                }

        ?>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div id="fillme2">
                    <!-- </div>
            </div>
            <div class="col-md-8"> -->
                    <?php 
            if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
            {

            }
            else{
                    $_SESSION['cur']=$_REQUEST['id'];
                }
                if($_SESSION['followtutor']!=0)
                {
                    $res=($perpage*$_SESSION['cur'])-$perpage;
                    $page=ceil($_SESSION['followtutor']/$perpage);
                    
                    if($_SESSION['cur']==$page)
                    {
                        $end=$_SESSION['followtutor'];
                    }
                    else
                    {
                        $end=$res+$perpage;
                    }
                }

                ?>
                    <p class="p-15">
                        <?php
                    if($_REQUEST['task']=="search")
                    {
                        echo "<span class='norecord text-sccess'>fonded recordes</span>";
                    }
                        else if($_SESSION['followtutor']==0)
                        {
                            echo "<span>not record found</span>";
                        }
                        else{
                            echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                                <span>to</span>
                                <span>".($end)."</span>";
                        }?></p>

                    <table class="table1 table-striped table-hover" cellpadding="80">
                        <tr class="tr5">
                            <th>Fname</th>
                            <th>Lname</th>
                            <th>Email</th>
                            <!-- <th>delete</th> -->
                        </tr>

                        <?php
                        $c=0;
                        if($_REQUEST['task']=="search")
                        {
                            // $check=$con->query("select * from follow_tutor where description like '$_REQUEST[id]%'");
                            $check=$con->query("select f.*,u.* from follow_tutor f,user_register u 
                            where f.userid=u.userid
                            and u.fname like '$_REQUEST[id]%' ");
                        }
                        else{
                            $check=$con->query("select f.*,u.* from follow_tutor f,user_register u 
                            where f.userid=u.userid
                            and tutorid like '$_SESSION[tutor_id]'
                             order by followid desc");  
                            }
                            
                            while($row=mysqli_fetch_array($check))
                            {
                                $c++;
                                ?>
                        <tr class="tr6">
                            <td><?php echo $row[4];?></td>
                            <td><?php echo $row[5];?></td>
                            <td><?php echo $row[6];?></td>
                            <!-- <td><i class="fa fa-trash" style="color:#8343F6; font-weight:500;"
                                    onclick="finddata('followtutor','delete',<?php echo $row[0];?>);"></i></td> -->
                        </tr>
                        <?php
                            }
                            if($_REQUEST['task']!="search")
                            {
                            ?>
                    </table>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6" style="margin-top:30px;">
                            <ul class="pagination pagination-lg justify-content-center">

                                <?php
                                    if($_SESSION['cur']>5)
                                    {
                                        ?>
                                <li class="fa fa-angle-double-left page-item page-link"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']-1;?>)"
                                    style="display:inline-block;"></li>
                                <?php
                                    }
                                    if($page<=5)
                                    {
                                        $st=1;
                                        $ed=$page;
                                    }
                                    else
                                    {
                                        if($_SESSION['cur']<=5) 
                                        {
                                            $st=1;
                                            $ed=5;
                                        }       
                                        else
                                        {
                                            $st=$_SESSION['cur']-4;
                                            $ed=$_SESSION['cur'];
                                        }
                                    }
                                    ?>
                                <?php
                                    for($i=$st;$i<=$ed;$i++)
                                    {
                                        if($_SESSION['cur']==$i)
                                        {
                                            
                                            ?>
                                <li class="page-item"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                                    style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
                                </li>
                                <?php
                                        }
                                        else
                                        {
                                            
                                        ?>

                                <li class="page-item"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                                    style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
                                </li>
                                <?php
                                        }
                                        ?>
                                <?php
                                    }
                                    if($page>5 && $_SESSION['cur']<$page)
                                    {
                                        ?>
                                <li class="fa fa-angle-double-right page-item page-link"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']+1;?>)"
                                    style="display:inline-block;"></li>
                                <?php
                                    }
                                    
                                    ?>

                            </ul>
                        </div>
                    </div>
                </div>
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
<!-----------------------------------------------------End tabview div followers---------------------------------------- -->


<!------------------------------------------------------star tabview div like---------------------------------------- -->
<div id="like" class="tabcontent">
    <?php

          $followers=$con->query("SELECT COUNT(userid) FROM like_tutor");
          $followersdata=mysqli_fetch_array($followers);
    ?>
    <div style="font-size:20px;color:black">Total Likes: <?php echo $followersdata[0];?></div>
    <!-- --------------------------display like info of tutor---------------- -->
    <?php
            if($_SESSION['what']=="likefollow")
            {
            
               if($_REQUEST['task']=="delete")
                {
                    $del=$con->query("delete from like_tutor where tutorlikeid=$_REQUEST[id]");   
                }

        ?>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div id="fillme2">
                    <!-- </div>
            </div>
            <div class="col-md-8"> -->
                    <?php 
            if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
            {

            }
            else{
                    $_SESSION['cur']=$_REQUEST['id'];
                }
                if($_SESSION['liketutor']!=0)
                {
                    $res=($perpage*$_SESSION['cur'])-$perpage;
                    $page=ceil($_SESSION['liketutor']/$perpage);
                    
                    if($_SESSION['cur']==$page)
                    {
                        $end=$_SESSION['liketutor'];
                    }
                    else
                    {
                        $end=$res+$perpage;
                    }
                }

                ?>
                    <p class="p-15">
                        <?php
                    if($_REQUEST['task']=="search")
                    {
                        echo "<span class='norecord text-sccess'>fonded recordes</span>";
                    }
                        else if($_SESSION['liketutor']==0)
                        {
                            echo "<span>not record found</span>";
                        }
                        else{
                            echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                                <span>to</span>
                                <span>".($end)."</span>";
                        }?></p>

                    <table class="table1 table-striped table-hover" cellpadding="80">
                        <tr class="tr5">
                            <th>Fname</th>
                            <th>Lname</th>
                            <th>Email</th>
                            <!-- <th>delete</th> -->
                        </tr>

                        <?php
                        $c=0;
                        if($_REQUEST['task']=="search")
                        {
                           
                        }
                        else{
                            
                            $check=$con->query("select lt.*,u.* from like_tutor lt,user_register u 
                            where lt.userid=u.userid
                            and tutorid like '$_SESSION[tutor_id]'
                             order by tutorlikeid desc");
                        }
                            while($row=mysqli_fetch_array($check))
                            {
                                $c++;
                                ?>
                        <tr class="tr6">
                            <td><?php echo $row[4];?></td>
                            <td><?php echo $row[5];?></td>
                            <td><?php echo $row[6];?></td>
                            <!-- <td><i class="fa fa-trash" style="color:#8343F6; font-weight:500;"
                                    onclick="finddata('liketutor','delete',<?php echo $row[0];?>);"></i></td> -->
                        </tr>
                        <?php
                            }
                            if($_REQUEST['task']!="search")
                            {
                            ?>
                    </table>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6" style="margin-top:30px;">
                            <ul class="pagination pagination-lg justify-content-center">

                                <?php
                                    if($_SESSION['cur']>5)
                                    {
                                        ?>
                                <li class="fa fa-angle-double-left page-item page-link"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']-1;?>)"
                                    style="display:inline-block;"></li>
                                <?php
                                    }
                                    if($page<=5)
                                    {
                                        $st=1;
                                        $ed=$page;
                                    }
                                    else
                                    {
                                        if($_SESSION['cur']<=5) 
                                        {
                                            $st=1;
                                            $ed=5;
                                        }       
                                        else
                                        {
                                            $st=$_SESSION['cur']-4;
                                            $ed=$_SESSION['cur'];
                                        }
                                    }
                                    ?>
                                <?php
                                    for($i=$st;$i<=$ed;$i++)
                                    {
                                        if($_SESSION['cur']==$i)
                                        {
                                            
                                            ?>
                                <li class="page-item"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                                    style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
                                </li>
                                <?php
                                        }
                                        else
                                        {
                                            
                                        ?>

                                <li class="page-item"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                                    style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
                                </li>
                                <?php
                                        }
                                        ?>
                                <?php
                                    }
                                    if($page>5 && $_SESSION['cur']<$page)
                                    {
                                        ?>
                                <li class="fa fa-angle-double-right page-item page-link"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']+1;?>)"
                                    style="display:inline-block;"></li>
                                <?php
                                    }
                                    
                                    ?>

                            </ul>
                        </div>
                    </div>
                </div>
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
<!-- ---------------------------------------------End tabview div like---------------------------------------- -->


<!-- ---------------------------------------------star tabview div like_course---------------------------------------- -->
<div id="courses like" class="tabcontent">
    <?php

          $followers=$con->query("SELECT COUNT(userid) FROM like_course");
          $followersdata=mysqli_fetch_array($followers);
    ?>
    <div style="font-size:20px;color:black">Total CourseLike : <?php echo $followersdata[0];?></div>


    <?php
            if($_SESSION['what']=="likefollow")
            {
            
               if($_REQUEST['task']=="delete")
                {
                    $del=$con->query("delete from like_tutor where tutorlikeid=$_REQUEST[id]");   
                }

        ?>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div id="fillme2">
                    <!-- </div>
            </div>
            <div class="col-md-9"> -->
                    <?php 
            if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
            {

            }
            else{
                    $_SESSION['cur']=$_REQUEST['id'];
                }
                if($_SESSION['likecourse']!=0)
                {
                    $res=($perpage*$_SESSION['cur'])-$perpage;
                    $page=ceil($_SESSION['likecourse']/$perpage);
                    
                    if($_SESSION['cur']==$page)
                    {
                        $end=$_SESSION['likecourse'];
                    }
                    else
                    {
                        $end=$res+$perpage;
                    }
                }

                ?>
                    <p class="p-15">
                        <?php
                    if($_REQUEST['task']=="search")
                    {
                        echo "<span class='norecord text-sccess'>fonded recordes</span>";
                    }
                        else if($_SESSION['likecourse']==0)
                        {
                            echo "<span>not record found</span>";
                        }
                        else{
                            echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                                <span>to</span>
                                <span>".($end)."</span>";
                        }?></p>

                    <table class="table1 table-striped table-hover" cellpadding="80">
                        <tr class="tr5">
                            <th>Fname</th>
                            <th>Lname</th>
                            <th>Email</th>
                            <th>CourseName</th>
                            <!-- <th>delete</th> -->
                        </tr>

                        <?php
                        $c=0;
                        if($_REQUEST['task']=="search")
                        {
                           
                        }
                        else{
                           
                            $check=$con->query("select lc.*,u.*,cu.* from like_course lc,user_register u,courses_upload cu 
                            where lc.userid=u.userid
                            and cu.uploadcourseid=lc.uploadcourseid
                            and cu.tutorid like '$_SESSION[tutor_id]'
                             order by likeid desc");
                        }
                            while($row=mysqli_fetch_array($check))
                            {
                                // print_r($row);
                                $c++;
                                ?>
                        <tr class="tr6">
                            <td><?php echo $row[4];?></td>
                            <td><?php echo $row[5];?></td>
                            <td><?php echo $row[6];?></td>
                            <td><?php echo $row[16];?></td>
                            <!-- <td><i class="fa fa-trash" style="color:#8343F6; font-weight:500;"
                                    onclick="finddata('likecourse','delete',<?php echo $row[0];?>);"></i></td> -->
                        </tr>
                        <?php
                            }
                            if($_REQUEST['task']!="search")
                            {
                            ?>
                    </table>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6" style="margin-top:30px;">
                            <ul class="pagination pagination-lg justify-content-center">

                                <?php
                                    if($_SESSION['cur']>5)
                                    {
                                        ?>
                                <li class="fa fa-angle-double-left page-item page-link"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']-1;?>)"
                                    style="display:inline-block;"></li>
                                <?php
                                    }
                                    if($page<=5)
                                    {
                                        $st=1;
                                        $ed=$page;
                                    }
                                    else
                                    {
                                        if($_SESSION['cur']<=5) 
                                        {
                                            $st=1;
                                            $ed=5;
                                        }       
                                        else
                                        {
                                            $st=$_SESSION['cur']-4;
                                            $ed=$_SESSION['cur'];
                                        }
                                    }
                                    ?>
                                <?php
                                    for($i=$st;$i<=$ed;$i++)
                                    {
                                        if($_SESSION['cur']==$i)
                                        {
                                            
                                            ?>
                                <li class="page-item"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                                    style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
                                </li>
                                <?php
                                        }
                                        else
                                        {
                                            
                                        ?>

                                <li class="page-item"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                                    style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
                                </li>
                                <?php
                                        }
                                        ?>
                                <?php
                                    }
                                    if($page>5 && $_SESSION['cur']<$page)
                                    {
                                        ?>
                                <li class="fa fa-angle-double-right page-item page-link"
                                    onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']+1;?>)"
                                    style="display:inline-block;"></li>
                                <?php
                                    }
                                    
                                    ?>

                            </ul>
                        </div>
                    </div>
                </div>
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

<!-- ---------------------------------------------End tabview div like_course---------------------------------------- -->


<?php

}
?>


<!-- -----------------------------------End display of like and followers code------------------------------------------- -->


<!-- ------------------------------------------Start report issue display code---------------------------------------- -->
<?php
if($_SESSION['what']=="report") 
              { 
                  ?>
<div class="row">
    <div class="container" style=" width: 70%;margin-top: 45px;">
        <table class="table1 table-striped table-hover" cellpadding="80">
            <tr class="tr5">
                <th>Full Name</th>
                <th>Description</th>

            </tr>
            <?php
                       
                $creview=$con->query("select u.*,rc.* from user_register u , report_course rc where 
                u.userid=rc.userid and rc.tutorid like '$_SESSION[tutor_id]'");
                while($creviewdata=mysqli_fetch_array($creview))
                {
                    // print_r($creviewdata);
                    ?>
            <tr class="tr6">
                <td><?php echo $creviewdata[1]." ".$creviewdata[2]; ?></td>
                <td><?php echo $creviewdata[13]; ?></td>
            </tr>

            <?php
                
               
             
              }
        ?>



        </table>
    </div>
</div>
<?php
}
?>


<!-- --------------------------------------------End report issue display code------------------------------------------- -->

<!-- =========================================payment================================================================ -->
<?php
if($_SESSION['what']=="payment")
{
   if($_REQUEST['task']=="request")
    {
        
        $del=$con->query("insert into tutor_payment values(0,'$_SESSION[tutor_id]','$_REQUEST[id]',$_REQUEST[count],0)");     
    }
?>



<?php
        $id=$_SESSION['tutor_id'];
       
       $check=$con->query("select * from courses_upload  where tutorid like '$id' and price>0  and uploadcourseid not in(select uploadcourseid from tutor_payment)");
//    $check=$con->query("select * from courses_upload cu,tutor_payment tp where tp.tutorid=cu.tutorid  and cu.uploadcourseid=tp.uploadcourseid  and cu.tutorid like 'shruti2001' and tp.status=0 group by tp.uploadcourseid");
               

?>
<div class="container">
    <div class="row" style="margin-top:30px;">
        <?php       
                while($row=mysqli_fetch_array($check))
                {
                
                $check1=$con->query("SELECT count(*) from bill b,courses_upload cu  WHERE b.uploadcourseid=cu.uploadcourseid and tutorid like '$id' and b.uploadcourseid like '$row[0]'");
                    $row1=mysqli_fetch_array($check1);
        ?>


        <div class="col-md-3">
            <div class="column">

                <div class="post-module">

                    <div class="thumbnail">

                        <img src="<?php echo $row[5];?>" />
                    </div>
                    <?php 
                  $ta=($row[7]*$row1[0]);

                 $ya=$ta/2;

                ?>
                    <div class="post-content">
                        <div class="category fa fa-rupee bg1box" style="font-size:15px;">
                            &nbsp;<?php echo $row[7];?>
                        </div>
                        <p class="title" style="font-size:20px;"><?php echo $row[4];?></p>
                        <div style="font-size:15px;">Total purchases : <?php echo $row1[0];?></div>

                        <table border="1px solid grey" style="    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
    border-color: #d2d2d2;">
                            <tr>
                                <td class="td5">Total amount</td>
                                <td class="td5">Your amount</td>
                                <td class="td5">Tax of PathOfSkill</td>
                            </tr>
                            <tr>

                                <td class="td5"><?php echo $ta; ?></td>
                                <td class="td5"><?php echo $ya; ?></td>
                                <td class="td5"><?php echo $ya; ?></td>
                            </tr>
                        </table>

                        <button type="button" name="efp"
                            onclick="up1('payment','request',<?php echo $row[0];?>,<?php echo $ya;?>);" style="    padding: 4px 7px 4px 7px;
    border: none;
    border-bottom: 3px solid #152188;
    border-radius: 3px;
    background-color: #178791;
    color: #fff;
    float: right;
    cursor: pointer;
    outline: none;">Request for pay</button>

                    </div>
                </div>
            </div>
        </div>




        <?php
        }
                } 
                
            
       ?>

        <!-- ===========================================================End Payment===================================== -->









        <!-- -----------------------------------------------------------Start edit profile---------------------------------------- -->

        <?php
require_once "script.php";
?>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="images/edit3.png" style="width:100px;margin-left: 40%;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <!-- text box ma name aavshe ne 2nd ma image -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your name</label>
                            <input type="text" class="form-control">

                        </div>

                        <input type="file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <?php
                //   $sel=$con->query("select *from tutor where tutorid like '$_SESSION[tutor_id]'");
                //   $seldata=mysqli_fethch_array($sel);
                ?>
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="images/edit3.png" style="width:100px;margin-left: 40%;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>

                    <div class="modal-body">
                        <!-- text box ma name aavshe ne 2nd ma image -->


                        <form method="post" name="tutoreditprofile" class="header-profile" style="margin-top:-30px;">
                            <div>
                                <div>
                                    <label>First Name :</label>
                                    <input type="text" name="fname" class="input-data"
                                        value="<?php echo $seldata[1];?>">
                                </div>
                                <div>
                                    <label>Last Name :</label>
                                    <input type="text" name="lname" class="input-data"
                                        value="<?php echo $seldata[2];?>">
                                </div>
                                <div>
                                    <label>Email :</label>
                                    <input type="text" name="email" class="input-data-email"
                                        value="<?php echo $seldata[3];?>">
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
                                        value="<?php echo $seldata[10];?>">
                                </div>
                                <div>
                                    <label>Skill :</label>
                                    <!-- <input type="password" name=""> -->
                                    <select name="skill" class="input-data-email">
                                        <option>Dancing</option>
                                        <option>Singing</option>
                                        <option>Cooking</option>
                                        <option>Programing</option>
                                        <option>Painting</option>
                                        <option>Speaking</option>
                                        <option>Yoga</option>
                                    </select>
                                </div>
                                <div>
                                    <label>Skill Level :</label>
                                    <!-- <input type="password" name=""> -->
                                    <select name="skillevel" class="input-data">
                                        <option selected="">Beginner</option>
                                        <option>begginer</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div>
                                <div>
                                    <label>Bio :</label>
                                    <input type="text" name="bio" class="input-data-email" value="Learner and Tutor">
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
                            </div>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

<!-- ---------------------------------------------------------Start bank details------------------------------- -->
<?php
if($_SESSION['what']=="bank")
    {
       
        if($_REQUEST['task']=="primary")
        {
            $tbank=$con->query("select * from tutor_bankdetail where tutorid like '$_SESSION[tutor_id]'");
            while($tbankdata=mysqli_fetch_array($tbank))
            {
                if($tbankdata[1]==$_REQUEST['id'])
                {
                    $uptbank=$con->query("update tutor_bankdetail set primarystatus=1 where tutorid like '$_SESSION[tutor_id]'
                    and bankid like $tbankdata[1]");
                }
                else
                {
                    $uptbank=$con->query("update tutor_bankdetail set primarystatus=0 where tutorid like '$_SESSION[tutor_id]'
                    and bankid like $tbankdata[1]"); 
                }
            }
        }


       if($_REQUEST['task']=="delete")
        {
            $del=$con->query("delete from tutor_bankdetail where tutorbankid=$_REQUEST[id]");   
        }
        if($_REQUEST['task']=="update")
        {
               $upbank=$con->query("update tutor_bankdetail set bankid=$_REQUEST[bankid],ifsccode='$_REQUEST[txtifsc]',accountnumber='$_REQUEST[txtano]' where tutorbankid=$_REQUEST[id]");
        }

?>
<div class="container">

    <div class="row">
    

        <div class="col-md-5"></div>
        <div class="col-md-6"> </div>
        <div class="col-md-1">
            <form method="post">
                <!-- <button type="submit" class="button2" onclick="finddata('reportissue','deleteall',0);">Delete
                    All</button> -->
                    <button type="submit" class="button" onclick="finddata('bank','deleteall',0);" style="vertical-align:middle"><span>Delete All</span></button>


                    
            </form>
        </div>
    </div>
    <div class="row">

        <div class="col-md-5 formdiv">

            <?php
        if($_REQUEST['task']=="update")
        {
              $selectcat=$con->query("select * from tutor_bankdetail where tutorbankid=$_REQUEST[id]");
              $rowselect=mysqli_fetch_array($selectcat);
              $_SESSION['rid']=$rowselect[0];
            ?>

            <center>

                <div class="cathead12 flash-infinite">Update bank detail</div>
                <form method="post" style="padding: 28px 21px 11px 21px;    box-shadow: 0 0 20px 0 rgb(46 61 73 / 15%);">
                <div>
                    <select class="courseselect1" name="bankid">
                        <option selected>select bank</option>
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
                    <input type="text" class="courseselect1" name="txtifsc" pattern="^[A-Z]{4}0[A-Z0-9]{6}$" value="<?php echo $rowselect[3];?>" placeholder="Enter IFSC code">
                </div>
                
                <div>
                    <input type="text" class="courseselect1" pattern="^[0-9]{9,18}" value="<?php echo $rowselect[4];?>" placeholder="Enter account number" name="txtano">
                </div>
               
                <div>
                    <button type="submit" class="btnadd" name="btnbank">UPDATE DETAILS</button>
                </div>


                </form>
            </center>

            <?php
            }
   
               else{
        ?>

            <center>
            <div class="cathead12" >Bank Deatils </div>
                <form method="post" style="padding: 28px 21px 11px 21px;    box-shadow: 0 0 20px 0 rgb(46 61 73 / 15%);">

                <div>
                    <select class="courseselect1" name="bankid">
                        <option selected>select bank</option>
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
                    <input type="text" class="courseselect1" name="txtifsc" pattern="^[A-Z]{4}0[A-Z0-9]{6}$" placeholder="Enter IFSC code">
                </div>
                
                <div>
                    <input type="text" class="courseselect1" pattern="^[0-9]{9,18}" placeholder="Enter account number" name="txtano">
                </div>
               
                <div>
                    <button type="submit" class="btnadd" name="btnbank">ADD DETAILS</button>
                </div>


                </form>
            </center>
            <?php
                if($_SESSION['er']==1)
                {
                    echo "already existed";
                    unset($_SESSION['er']);
                }
                }
            
                ?>
        </div>

        <div class="col-md-7">
            <?php 
         if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search" || $_REQUEST['task']=="primary")
         {

         }
         else{
             $_SESSION['cur']=$_REQUEST['id'];
         }
         if($_SESSION['bank']!=0)
         {
             $res=($perpage*$_SESSION['cur'])-$perpage;
             $page=ceil($_SESSION['bank']/$perpage);
             
             if($_SESSION['cur']==$page)
             {
                 $end=$_SESSION['bank'];
            }
            else
            {
                $end=$res+$perpage;
            }
         }

        ?>
            <p class="p-15">
                <?php
            if($_REQUEST['task']=="search")
            {
                echo "<span class='norecord text-sccess'>fonded recordes</span>";
            }
                else if($_SESSION['bank']==0)
                {
                    echo "<span>not record found</span>";
                }
                else{
                    echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                           <span>to</span>
                           <span>".($end)."</span>";
                }?></p>

            <table class="table1 table-striped table-hover" cellpadding="80">
                <tr class="trpay">
                    <th>Bank Name</th>
                    <th>IFSC code</th>
                    <th>Account No</th>
                    <th>Primary</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>

                <?php
                $c=0;
                if($_REQUEST['task']=="search")
                {
                    $check=$con->query("select * from tutor_bankdetail where description like '$_REQUEST[id]%'");
                }
                else{
                    
                    $check=$con->query("select * from tutor_bankdetail order by bankid desc limit $res,$perpage");
                }
                    
                    while($row=mysqli_fetch_array($check))
                    {
                        $c++;
                        $bname=$con->query("select * from bank where bankid=$row[1]");
                        $bnamedata=mysqli_fetch_array($bname)
                        ?>
                <tr style="    height: 60px;">
                    <td><?php echo $bnamedata[1];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <?php
                       if($row[5]==1)
                       {
                        //    echo "<script>alert('inside if');</script>";
                           ?>
                             
                            <td><i class="ti-crown" style="color: #ffb205;font-weight: 700;"
                            onclick="finddata('bank','primary',<?php echo $row[1];?>);"></i>
                    </td>
                           <?php
                           
                       }
                       else
                       {
                        // echo "<script>alert('inside else');</script>";
                           ?>
                            <td><i class="ti-crown" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('bank','primary',<?php echo $row[1];?>);"></i>
                    </td>
                           <?php
                       }

                    ?>
                    
                    <td><i class="fa fa-pencil-square-o" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('bank','update',<?php echo $row[0];?>);"></i>
                    </td>
                    <td><i class="fa fa-trash" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('bank','delete',<?php echo $row[0];?>);"></i></td>
                </tr>
                <?php
                    }
                    if($_REQUEST['task']!="search" && $_REQUEST['task']!="primary")
                    {
                    ?>
            </table>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="margin-top:30px;">
                    <ul class="pagination pagination-lg justify-content-center">

                        <?php
                            if($_SESSION['cur']>5)
                            {
                                ?>
                        <li class="fa fa-angle-double-left page-item page-link"
                            onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']-1;?>)"
                            style="display:inline-block;"></li>
                        <?php
                            }
                            if($page<=5)
                            {
                                $st=1;
                                $ed=$page;
                            }
                            else
                            {
                                if($_SESSION['cur']<=5) 
                                {
                                    $st=1;
                                    $ed=5;
                                }       
                                else
                                {
                                    $st=$_SESSION['cur']-4;
                                    $ed=$_SESSION['cur'];
                                }
                            }
                            ?>
                        <?php
                             for($i=$st;$i<=$ed;$i++)
                             {
                                 if($_SESSION['cur']==$i)
                                 {
                                      
                                     ?>
                        <li class="page-item"
                            onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                            style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
                        </li>
                        <!-- aa khali first pagination padshe first box -->
                        <?php
                                 }
                                 else
                                 {
                                     
                                ?>

                        <li class="page-item"
                            onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
                            style="display:inline-block;"><a class="page-link" href="#"><?php echo $i;?></a>
                        </li>
                        <!-- 2 to 5 sudhina pagination box ahiya padshe -->
                        <?php
                                 }
                                 ?>
                        <?php
                             }
                             if($page>5 && $_SESSION['cur']<$page)
                             {
                                 ?>
                        <li class="fa fa-angle-double-right page-item page-link"
                            onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $_SESSION['cur']+1;?>)"
                            style="display:inline-block;"></li>
                        <?php
                             }
                             
                             ?>

                    </ul>
                </div>
            </div>
        </div>
        <?php 
                    }
        ?>
    </div>
</div>
</div>
<?php
    }  

?>
<!-- ---------------------------------------------------------End bank details------------------------------- -->







       



    <script>
    function openCity(evt, cityName) {


        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";

    }
    document.getElementById("defaultOpen").click();
    </script>