<?php
require_once "connection.php";
$perpage=5;
?>


<?php
require_once "admin_query.php";
?>
<?php
// require_once "admin_header.php";
?>


<style>
.gradient-1 {
    background-image: linear-gradient(230deg, #F83873, #565CE4) !important;
}

.gradient-2 {
    background-image: linear-gradient(230deg, #6CC953, #045086) !important;
}

.gradient-3 {
    background-image: linear-gradient(117deg, #FE6207, #E80F74) !important;
}

.gradient-4 {
    background-image: linear-gradient(230deg, #2DB2ED, #6F40CC) !important;
}

.card-body:hover i {
    animation: swing ease-in-out 0.5s 1 alternate;
}

.card .card-body {
    cursor: pointer;
    border-radius: 10px;
}

.card-body:hover {
    box-shadow: 0 10px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%) !important;
}
.reform{
    width: 70%;
    height: 45px;
    border: none;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 4px;
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%) !important;
}
</style>
<?php
$what=$_GET['what'];
$task=$_GET['task'];
$id=$_GET['id'];

$_SESSION['what'] =$what;
if($_SESSION['what']=="otpmobile")
{
  
    if($task=="6354697128" || $task == "9265609414"){
        
        $_SESSION["otp"]=$id;
         ?>
<button type="button" id="getotp" onclick="finddata('otpmobile',0,<?php echo rand(10,99).rand(10,99);?>);" name="btnotp"
    class="btnotp">SENT OTP</button>
<?php
      }
    else{
         ?>
<h4 style="color:#76838F">please try again</h4>
<form method="post">
    <div id="fillme">
        <div class="form-group form-floating-label">
            <input id="mobiledata" name="username" type="text" autofocus="" maxlength="10"
                class="reform input-border-bottom" required><br>
            <label for="username" class="placeholder">mobile number</label>
        </div>
        <div class="otpdiv">
            <button type="button" id="getotp" onclick="finddata('otpmobile',0,<?php echo rand(10,99).rand(10,99);?>);"
                name="btnotp" class="btnotp">GET OTP</button>

        </div>
    </div>
</form>

<?php
    }
}

    if($_SESSION['what']=="dashboard")
    { 
        
 ?>
<div class="content-body">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body" onclick="finddata('category','view',1); findbox('category');">
                        <h3 class="card-title text-white">Category</h3>
                        <div class="d-inline-block">
                            <?php
                        $cat=$con->query("select count(*) from category");
                        $ccat=mysqli_fetch_array($cat);
                        ?>
                            <h2 class="text-white"><?php echo $ccat[0];?></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-tasks"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body" onclick="finddata('subcategory','view',1); findbox('subcategory');">
                        <h3 class="card-title text-white">Sub-category</h3>
                        <div class="d-inline-block">
                            <?php
                        $scat=$con->query("select count(*) from subcategory");
                        $cscat=mysqli_fetch_array($scat);
                        ?>
                            <h2 class="text-white"><?php echo $cscat[0];?></h2>

                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-clone"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Payments</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">4565</h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-paypal"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body" onclick="finddata('reportissue','view',1); findbox('reportissue');">
                        <h3 class="card-title text-white">Report</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">99%</h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-list-alt"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body" onclick="finddata('tutors','view',1); findbox('tutors');">
                        <h3 class="card-title text-white">view tutors</h3>
                        <div class="d-inline-block">
                            <?php
                        $tut=$con->query("select count(*) from tutor");
                        $ctut=mysqli_fetch_array($tut);
                        ?>
                            <h2 class="text-white"><?php echo $ctut[0];?></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-street-view"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body" onclick="finddata('users','view',1); findbox('users');">
                        <h3 class="card-title text-white">view users</h3>
                        <div class="d-inline-block">
                            <?php
                        $user=$con->query("select count(*) from user_register");
                        $cuser=mysqli_fetch_array($user);
                        ?>
                            <h2 class="text-white"><?php echo $cuser[0];?></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body" onclick="finddata('courses','view',1); findbox('courses');">
                        <h3 class="card-title text-white">view courses</h3>
                        <div class="d-inline-block">
                            <?php
                        $cou=$con->query("select count(*) from courses_upload");
                        $ccou=mysqli_fetch_array($cou);
                        ?>
                            <h2 class="text-white"><?php echo $ccou[0];?></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-toggle-right"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body" onclick="finddata('bank','view',1); findbox('bank');">
                        <h3 class="card-title text-white">Bank</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">99%</h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-list-alt"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body" onclick="finddata('visitors','view',1); findbox('visitors');">
                        <h3 class="card-title text-white">visitors</h3>
                        <div class="d-inline-block">
                            <?php
                        $email=$con->query("select count(*) from email_subscribe");
                        $cemail=mysqli_fetch_array($email);
                        ?>
                            <h2 class="text-white"><?php echo $cemail[0];?></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-tasks"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body" onclick="finddata('transactions','view',1); findbox('transactions');">
                        <h3 class="card-title text-white">transactions</h3>
                        <div class="d-inline-block">
                            <?php
                        $tra=$con->query("select count(*) from transaction");
                        $ctra=mysqli_fetch_array($tra);
                        ?>
                            <h2 class="text-white"><?php echo $ctra[0];?></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-clone"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }


    if($_SESSION['what']=="category")
    {
       
       if($_REQUEST['task']=="delete")
        {
            $del=$con->query("delete from category where categoryid=$_REQUEST[id]");   
        }
        if($_REQUEST['task']=="deleteall")
        {
            $del=$con->query("delete from category");   
        }

?>
<div class="container-fluid">

    <div class="row">

        <div class="col-md-5"></div>
        <div class="col-md-6"> </div>
        <div class="col-md-1">
            <form method="post">
                <!-- <button type="submit" class="button2" onclick="finddata('category','deleteall',0);">Delete All</button> -->
                <button type="submit" class="btndeleteall" onclick="finddata('category','deleteall',0);"
                    style="vertical-align:middle"><span>Delete All</span></button>

            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5 formdiv">

            <?php
        if($_REQUEST['task']=="update")
        {
              $selectcat=$con->query("select * from category where categoryid=$_REQUEST[id]");
              $rowselect=mysqli_fetch_array($selectcat);
              $_SESSION['rid']=$rowselect[0];
            ?>

            <center>

                <div class="cathead flash-infinite"> category </div>
                <form method="post">
                    <input type="text" class="text1" name="txtcatename" value="<?php echo $rowselect[1];?>"></br>
                    <!-- <button type="submit" class="button1" name="btnupdate">update</button> -->
                    <button type="submit" class="button" name="btnupdate"
                        style="vertical-align:middle"><span>Update</span></button>

                </form>
            </center>

            <?php
            }
   
               else{
        ?>

            <center>

                <form method="post">

                    <div class="cathead animated pulse infinite" style="width:100%;"> category </div>
                    <input type="text" class="text1" name="txtcatename" placeholder="enter the category"></br>
                    <!-- <button type="submit" class="button1" name="btninsert">insert</button> -->
                    <button type="submit" class="button" name="btninsert"
                        style="vertical-align:middle"><span>Insert</span></button>

                </form>
            </center>
            <?php
                if($_SESSION['er']==1)
                {
                    ?>
            <div class="row" style="display:flex;margin-top: 14px;">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <img src="images/sad.gif" style="width: 78px;/* margin-top: 20px; *//* margin-left: 140px; */">
                </div>
                <div class="col-md-5">
                    <p class="e">Sorry,but the record you want to insert is already their.</p>
                </div>
            </div>
            <?php
                    unset($_SESSION['er']);
                }
                }
            
                ?>
        </div>

        <div class="col-md-5">
            <?php 
         if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
         {

         }
         else{
             $_SESSION['cur']=$_REQUEST['id'];
         }
         if($_SESSION['category']!=0)
         {
             $res=($perpage*$_SESSION['cur'])-$perpage;
             $page=ceil($_SESSION['category']/$perpage);
             
             if($_SESSION['cur']==$page)
             {
                 $end=$_SESSION['category'];
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
                else if($_SESSION['category']==0)
                {
                    echo "<span>not record found</span>";
                }
                else{
                    echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                           <span>to</span>
                           <span>".($end)."</span>";
                }?></p>

            <table class="table1 table-striped table-hover" cellpadding="80">
                <tr class="tr1">
                    <th>category name</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>

                <?php
                $c=0;
                if($_REQUEST['task']=="search")
                {
                    $check=$con->query("select * from category where categoryname like '$_REQUEST[id]%'");
                }
                else{
                    $check=$con->query("select * from category order by categoryid desc limit $res,$perpage");
                }
                    
                    while($row=mysqli_fetch_array($check))
                    {
                        $c++;
                        ?>
                <tr>
                    <td><?php echo $row[1];?></td>
                    <td><i class="fa fa-pencil-square-o" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('category','update',<?php echo $row[0];?>);"></i>
                    </td>
                    <td><i class="fa fa-trash" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('category','delete',<?php echo $row[0];?>);"></i></td>
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


    //report

    if($_SESSION['what']=="reportissue")
    {
       
       if($_REQUEST['task']=="delete")
        {
            $del=$con->query("delete from report_issue where reportissueid=$_REQUEST[id]");   
        }
        if($_REQUEST['task']=="deleteall")
        {
            $del=$con->query("delete from report_issue");   
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
                <button type="submit" class="button" onclick="finddata('reportissue','deleteall',0);"
                    style="vertical-align:middle"><span>Delete All</span></button>



            </form>
        </div>
    </div>
    <div class="row">

        <div class="col-md-5 formdiv">

            <?php
        if($_REQUEST['task']=="update")
        {
              $selectcat=$con->query("select * from report_issue where reportissueid=$_REQUEST[id]");
              $rowselect=mysqli_fetch_array($selectcat);
              $_SESSION['rid']=$rowselect[0];
            ?>

            <center>

                <div class="cathead flash-infinite"> Report Issue </div>
                <form method="post">
                    <input type="text" class="text1" name="txtreportdesc" value="<?php echo $rowselect[1];?>"></br>
                    <!-- <button type="submit" class="button1" name="btnupdatereport">update</button> -->
                    <button type="submit" class="button" name="btnupdatereport"
                        style="vertical-align:middle"><span>Update</span></button>

                </form>
            </center>

            <?php
            }
   
               else{
        ?>

            <center>

                <form method="post">

                    <div class="cathead animated pulse infinite" style="width:100%;"> Report </div>
                    <input type="text" class="text1" name="txtreportdesc" placeholder="enter description"></br>
                    <button type="submit" class="button" name="btninsertreport"
                        style="vertical-align:middle"><span>Insert</span></button>

                    <!-- <button type="submit" class="button1" name="btninsertreport">insert</button> -->

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

        <div class="col-md-5">
            <?php 
         if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
         {

         }
         else{
             $_SESSION['cur']=$_REQUEST['id'];
         }
         if($_SESSION['reportissue']!=0)
         {
             $res=($perpage*$_SESSION['cur'])-$perpage;
             $page=ceil($_SESSION['reportissue']/$perpage);
             
             if($_SESSION['cur']==$page)
             {
                 $end=$_SESSION['reportissue'];
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
                else if($_SESSION['reportissue']==0)
                {
                    echo "<span>not record found</span>";
                }
                else{
                    echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                           <span>to</span>
                           <span>".($end)."</span>";
                }?></p>

            <table class="table1 table-striped table-hover" cellpadding="80">
                <tr class="tr1">
                    <th>Description</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>

                <?php
                $c=0;
                if($_REQUEST['task']=="search")
                {
                    $check=$con->query("select * from report_issue where description like '$_REQUEST[id]%'");
                }
                else{
                    $check=$con->query("select * from report_issue order by reportissueid desc limit $res,$perpage");
                }
                    
                    while($row=mysqli_fetch_array($check))
                    {
                        $c++;
                        ?>
                <tr>
                    <td><?php echo $row[1];?></td>
                    <td><i class="fa fa-pencil-square-o" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('reportissue','update',<?php echo $row[0];?>);"></i>
                    </td>
                    <td><i class="fa fa-trash" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('reportissue','delete',<?php echo $row[0];?>);"></i></td>
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


    
    // sub-category 
    if($_SESSION['what']=="subcategory")
    {
       
       if($_REQUEST['task']=="delete")
        {
            $del=$con->query("delete from subcategory where subcategoryid=$_REQUEST[id]");   
        }
        if($_REQUEST['task']=="deleteall")
        {
            $del=$con->query("delete from subcategory");   
        }

?>
<div class="container-fluid">

    <div class="row">

        <div class="col-md-5"></div>
        <div class="col-md-6"> </div>
        <div class="col-md-1">
            <form method="post">
                <!-- <button type="submit" class="button2" onclick="finddata('subcategory','deleteall',0);">Delete All</button> -->
                <button type="submit" class="btndeleteall" style="vertical-align:middle"
                    onclick="finddata('subcategory','deleteall',0);"><span>Delete All</span></button>

            </form>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">

     
     
        <div class="col-md-5 formdiv2">

            <?php
        if($_REQUEST['task']=="update")
        {
              $selectcat=$con->query("select * from subcategory where subcategoryid=$_REQUEST[id]");
              $rowselect=mysqli_fetch_array($selectcat);
              $_SESSION['rid']=$rowselect[0];
            ?>

            <center>
                <div class="cathead flash-infinite">Sub category </div>
                <form method="post">


                    <select class="select1" name="subid" style="margin-top:12px;">
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
                    <input type="text" class="text1" name="txtsubcatename" value="<?php echo $rowselect[1];?>"></br>

                    <button type="submit" class="button" name="btnsubcatupdate"
                        style="vertical-align:middle; margin-top: 30px;"><span>Update</span></button>


                    <!-- <button type="submit" class="button1" name="btnsubcatupdate">update</button> -->
                </form>
            </center>

            <?php
            }
   
               else{
        ?>

            <center>

                <form method="post">

                    <div class="cathead animated pulse infinite" style="width:100%;">Sub category </div>


                    <!-- combo category    -->
                    <select class="select1" name="subid" style="margin-top:12px;">
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
                    <input type="text" class="text1" name="txtsubcatename" placeholder="enter the sub category"></br>

                    <button type="submit" class="button" name="btnsubcatinsert"
                        style="vertical-align:middle;margin-top: 20px;"><span>insert</span></button>

                    <!-- <button type="submit" class="button1" name="btnsubcatinsert">insert</button> -->
                </form>
            </center>
            <?php
                if($_SESSION['er']==1)
                {
                    ?>
            <div class="row" style="display:flex;margin-top: 14px;">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <img src="images/sad.gif" style="width: 78px;/* margin-top: 20px; *//* margin-left: 140px; */">
                </div>
                <div class="col-md-5">
                    <p class="e">Sorry,but the record you want to insert is already their.</p>
                </div>
            </div>
            <?php
                    unset($_SESSION['er']);
                }
                }
            
                ?>
        </div>

        <div class="col-md-5">
            <?php 
         if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
         {

         }
         else{
             $_SESSION['cur']=$_REQUEST['id'];
         }
         if($_SESSION['subcategory']!=0)
         {
             $res=($perpage*$_SESSION['cur'])-$perpage;
             $page=ceil($_SESSION['subcategory']/$perpage);
             
             if($_SESSION['cur']==$page)
             {
                 $end=$_SESSION['subcategory'];
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
                else if($_SESSION['category']==0)
                {
                    echo "<span>not record found</span>";
                }
                else{
                    echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                           <span>to</span>
                           <span>".($end)."</span>";
                }?></p>

            <table class="table1 table-striped table-hover" cellpadding="80">
                <tr class="tr1">
                    <th>Sub-category</th>
                    <th>Category</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>

                <?php
                $c=0;
                if($_REQUEST['task']=="search")
                {
                    $check=$con->query("select * from subcategory where subcategoryname like '$_REQUEST[id]%'");
                }
                else{
                    $check=$con->query("select * from subcategory order by subcategoryid desc limit $res,$perpage");
                }
                    
                    while($row=mysqli_fetch_array($check))
                    {
                        $c++;
                        ?>
                <tr>
                    <td><?php
                $r=$con->query("select * from category where categoryid like $row[1]");
                $r1=mysqli_fetch_array($r);
                ?>
                        <?php echo $row[2]; ?></td>
                    <td><?php echo $r1[1]; ?></td>
                    <td><i class="fa fa-pencil-square-o" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('subcategory','update',<?php echo $row[0];?>);"></i>
                    </td>
                    <td><i class="fa fa-trash" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('subcategory','delete',<?php echo $row[0];?>);"></i></td>
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


// <!-- view tutors -->
if($_SESSION['what']=="tutors")
{
   
//    if($_REQUEST['task']=="delete")
//     {
//         $del=$con->query("delete from report_issue where reportissueid=$_REQUEST[id]");   
//     }
//     if($_REQUEST['task']=="deleteall")
//     {
//         $del=$con->query("delete from report_issue");   
//     }

?>
<div class="container" style="margin-left:20%;">


    <div class="row" style="padding-left:45%;">
        <center>
            <h1>TUTORS</h1>
        </center>
    </div>
    <div class="row">

        <?php 
     if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
     {

     }
     else{
        //  $_SESSION['cur']=$_REQUEST['id'];
     }
    //  if($_SESSION['reportissue']!=0)
    //  {
    //      $res=($perpage*$_SESSION['cur'])-$perpage;
    //      $page=ceil($_SESSION['reportissue']/$perpage);
         
    //      if($_SESSION['cur']==$page)
    //      {
    //          $end=$_SESSION['reportissue'];
    //     }
    //     else
    //     {
    //         $end=$res+$perpage;
    //     }
    //  }

    ?>
        <p class="p-15">
            <?php
        // if($_REQUEST['task']=="search")
        // {
        //     echo "<span class='norecord text-sccess'>fonded recordes</span>";
        // }
        //     else if($_SESSION['tutors']==0)
        //     {
        //         echo "<span>not record found</span>";
        //     }
        //     else{
        //         echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
        //                <span>to</span>
        //                <span>".($end)."</span>";
            // }
            ?></p>

        <!-- <table class="table1 table-striped table-hover" cellpadding="80"> -->


        <?php
            $c=0;
            if($_REQUEST['task']=="search")
            {
                $check=$con->query("select * from tutor where fname like '$_REQUEST[id]%'");
            }
            else{
                $check=$con->query("select * from tutor order by fname desc");
            }
                
                while($row=mysqli_fetch_array($check))
                {
                    
                    ?>
        <div class="col-md-3">
            <figure class="snip0067 red">

                <img src="../user_site/tutor_site/<?php echo $row[6]?>" alt="sample8" style="height: 320px;width: 100%;"
                    ; />

                <figcaption>
                    <h2><?php echo $row[1]?><span>&nbsp;<?php echo $row[2]?></span></h2>
                    <p><?php echo $row[3]?></p>
                    <p><?php echo $row[7]?></p>
                    <p><?php echo $row[10]?></p>
                    <div class="icons"><a href="#"><i class="fa fa-thumbs-up"></i></a><a href="#"><i
                                class="ion-email-unread"></i></a><a href="#"><i class="ion-ios-star"></i></a></div>
                </figcaption>
                <div class="position">
                <div>
                <?php echo $row[8]?>&nbsp;<?php echo $row[9]?>&nbsp;&nbsp;<?php echo $row[11]?></div>
                <div><i class="fa fa-trash" style="cursor:pointer; font-size: 25px;padding-left: 15px;"></i></div>
                </div>
            </figure>
        </div>
        <?php
                }
          ?>
    </div>
</div>
<?php
}  




// bank
if($_SESSION['what']=="bank")
    {
       
       if($_REQUEST['task']=="delete")
        {
            $del=$con->query("delete from bank where bankid=$_REQUEST[id]");   
        }
        if($_REQUEST['task']=="deleteall")
        {
            $del=$con->query("delete from bank");   
        }

?>
<div class="container-fluid">

    <div class="row">

        <div class="col-md-11"></div>
        <div class="col-md-1">
            <form method="post">
                <!-- <button type="submit" class="button2" onclick="finddata('category','deleteall',0);">Delete All</button> -->
                <button type="submit" class="btndeleteall" onclick="finddata('bank','deleteall',0);"
                    style="vertical-align:middle"><span>Delete All</span></button>

            </form>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 formdiv">

            <?php
        if($_REQUEST['task']=="update")
        {
              $selectcat=$con->query("select * from bank where bankid=$_REQUEST[id]");
              $rowselect=mysqli_fetch_array($selectcat);
              $_SESSION['rid']=$rowselect[0];
            ?>

            <center>

                <div class="cathead flash-infinite"> bank </div>
                <form method="post">
                    <input type="text" class="text1" name="txtbankname" value="<?php echo $rowselect[1];?>"></br>
                    <!-- <button type="submit" class="button1" name="btnupdate">update</button> -->
                    <button type="submit" class="button" name="btnbankupdate"
                        style="vertical-align:middle"><span>Update</span></button>

                </form>
            </center>

            <?php
            }
   
               else{
        ?>

            <center>

                <form method="post">

                    <div class="cathead animated pulse infinite" style="width:100%;"> Bank </div>
                    <input type="text" class="text1" name="txtbankname" placeholder="enter the Bank name"></br>
                    <!-- <button type="submit" class="button1" name="btninsert">insert</button> -->
                    <button type="submit" class="button" name="btnbankinsert"
                        style="vertical-align:middle"><span>Insert</span></button>

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

        <div class="col-md-5">
            <?php 
         if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
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
                <tr class="tr1">
                    <th>Bank Name</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>

                <?php
                $c=0;
                if($_REQUEST['task']=="search")
                {
                    $check=$con->query("select * from bank where bankname like '$_REQUEST[id]%'");
                }
                else{
                    $check=$con->query("select * from bank order by bankid desc limit $res,$perpage");
                }
                    
                    while($row=mysqli_fetch_array($check))
                    {
                        $c++;
                        ?>
                <tr>
                    <td><?php echo $row[1];?></td>
                    <td><i class="fa fa-pencil-square-o" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('bank','update',<?php echo $row[0];?>);"></i>
                    </td>
                    <td><i class="fa fa-trash" style="color:#8343F6; font-weight:500;"
                            onclick="finddata('bank','delete',<?php echo $row[0];?>);"></i></td>
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



// <!-- view users -->

if($_REQUEST['what']=='users')
{
    if($_REQUEST['task']=="delete")
    {
        // echo $_REQUEST['id'];
        $del=$con->query("delete from user_register where userid like '$_REQUEST[id]'");   
    }
    if($_REQUEST['task']=="deleteall")
    {
        $del=$con->query("delete from user_register");   
    }
    ?>
<div class="row">
    <div class="col-md-11"></div>
    <div class="col-md-1">
        <form method="post">
            <button type="submit" class="btndeleteall" onclick="finddata('users','deleteall',0);"
                style="vertical-align:middle"><span>Delete All</span></button>

        </form>
    </div>
</div>
<?php
     if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
     {

     }
     else{
         $_SESSION['cur']=$_REQUEST['id'];
     }
     if($_SESSION['users']!=0)
     {
         $res=($perpage*$_SESSION['cur'])-$perpage;
         $page=ceil($_SESSION['users']/$perpage);
         
         if($_SESSION['cur']==$page)
         {
             $end=$_SESSION['users'];
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
            else if($_SESSION['users']==0)
            {
                echo "<span>not record found</span>";
            }
            else{
                echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                       <span>to</span>
                       <span>".($end)."</span>";
            }?></p>


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
        <table class="table3 table-striped table-hover" cellpadding="80">
            <tr class="tr1">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>LastLoginDate</th>

                <th>delete</th>
            </tr>

            <?php
            $c=0;
            if($_REQUEST['task']=="search")
            {
                   $check=$con->query("select * from user_register where fname like '$_REQUEST[id]%'");

            }

            else{
                
                $check=$con->query("select * from user_register order by fname desc limit $res,$perpage");
             }
                
                while($row=mysqli_fetch_array($check))
                {
                    // print_r($row);
                    $c++;
                    ?>
            <tr>

                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[6]; ?></td>
                <td><?php echo $row[7]; ?></td>


                <td><i class="fa fa-trash" style="color:#106994; font-weight:500;"
                onclick="finddata('users','delete','<?php echo $row[0];?>');"></i></td>
            </tr>
            <?php
                }
                if($_REQUEST['task']!="search")
                {
                ?>
        </table>
    </div>
    <div class="col-md-1"></div>

</div>
<div class="row">
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
            <!-- aa khali first pagination padshe first box -->
            <?php
                             }
                             else
                             {
                                 
                            ?>

            <li class="page-item" onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
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
<!-- </div> -->
<?php 
                }
            }
    ?>

<!-- visitors -->
<div class="container" style="margin-left:200px;">
    <?php 
    if($_REQUEST['what']=='visitors')
    {
        if($_REQUEST['task']=="delete")
        {
            $del=$con->query("delete from email_subscribe where subscribeid=$_REQUEST[id]");   
        }
        if($_REQUEST['task']=="deleteall")
        {
            $del=$con->query("delete from email_subscribe");   
        }
        ?>
    <div class="row">
        <div class="col-md-11"></div>
        <div class="col-md-1">
            <form method="post">
                <button type="submit" class="btndeleteall" onclick="finddata('visitors','deleteall',0);"
                    style="vertical-align:middle"><span>Delete All</span></button>

            </form>
        </div>
    </div>
    <?php
         if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
         {
    
         }
         else{
             $_SESSION['cur']=$_REQUEST['id'];
         }
         if($_SESSION['visitors']!=0)
         {
             $res=($perpage*$_SESSION['cur'])-$perpage;
             $page=ceil($_SESSION['visitors']/$perpage);
             
             if($_SESSION['cur']==$page)
             {
                 $end=$_SESSION['visitors'];
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
                else if($_SESSION['visitors']==0)
                {
                    echo "<span>not record found</span>";
                }
                else{
                    echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                           <span>to</span>
                           <span>".($end)."</span>";
                }?></p>


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <table class="table3 table-striped table-hover" cellpadding="80">
                <tr class="tr1">
                    <th>Visitorss</th>

                    <th>delete</th>
                </tr>

                <?php
                $c=0;
                if($_REQUEST['task']=="search")
                {
                       $check=$con->query("select * from email_subscribe where emailid like '$_REQUEST[id]%'");
    
                }
    
                else{
                    
                    $check=$con->query("select * from email_subscribe order by emailid desc limit $res,$perpage");
                 }
                    
                    while($row=mysqli_fetch_array($check))
                    {
                        // print_r($row);
                        $c++;
                        ?>
                <tr>

                    <td><?php echo $row[1]; ?></td>


                    <td><i class="fa fa-trash" style="color:#106994; font-weight:500;"
                            onclick="finddata('visitors','delete',<?php echo $row[0];?>);"></i></td>
                </tr>
                <?php
                    }
                    if($_REQUEST['task']!="search")
                    {
                    ?>
            </table>
        </div>
    </div>
    <div class="row">
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
                <!-- aa khali first pagination padshe first box -->
                <?php
                                 }
                                 else
                                 {
                                     
                                ?>

                <li class="page-item" onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
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
    <!-- </div> -->
    <?php 
                    }
                }
        ?>
</div>

<!--------------------------------- tansactions ----------------------------->
<div class="container" style="margin-left:200px;">
    <?php 
    if($_REQUEST['what']=='transactions')
    {
        if($_REQUEST['task']=="delete")
        {
            $del=$con->query("delete from transaction where transactionid=$_REQUEST[id]");   
        }
        if($_REQUEST['task']=="deleteall")
        {
            $del=$con->query("delete from transaction");   
        }
        ?>
    <div class="row">
        <div class="col-md-11"></div>
        <div class="col-md-1">
            <form method="post">
                <button type="submit" class="btndeleteall" onclick="finddata('transactions','deleteall',0);"
                    style="vertical-align:middle"><span>Delete All</span></button>

            </form>
        </div>
    </div>
    <?php
         if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
         {
    
         }
         else{
             $_SESSION['cur']=$_REQUEST['id'];
         }
         if($_SESSION['transactions']!=0)
         {
             $res=($perpage*$_SESSION['cur'])-$perpage;
             $page=ceil($_SESSION['transactions']/$perpage);
             
             if($_SESSION['cur']==$page)
             {
                 $end=$_SESSION['transactions'];
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
                else if($_SESSION['transactions']==0)
                {
                    echo "<span>not record found</span>";
                }
                else{
                    echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
                           <span>to</span>
                           <span>".($end)."</span>";
                }?></p>


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <table class="table3 table-striped table-hover" cellpadding="80">
                <tr class="tr1">
                    <th>Amount</th>
                    <th>Course</th>
                    <th>Bank</th>
                    <th>IFSC code</th>
                    <th>REF code</th>
                    <th>Current date</th>
                    <th>delete</th>
                </tr>

                <?php
                $c=0;
                if($_REQUEST['task']=="search")
                {
                       $check=$con->query("select t.*,cu.*,b.* from transaction t,bank b,courses_upload cu where t.uploadcourseid=cu.uploadcourseid and t.bankid=b.bankid and cu.coursename like '$_REQUEST[id]%'");
    
                }
    
                else{
                    
                    $check=$con->query("select t.*,cu.*,b.* from transaction t,bank b,courses_upload cu where t.uploadcourseid=cu.uploadcourseid and t.bankid=b.bankid order by currentdate desc limit $res,$perpage");
                 }
                    
                    while($row=mysqli_fetch_array($check))
                    {
                        // print_r($row);
                        $c++;
                        ?>
                <tr>

                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[11]; ?></td>
                    <td><?php echo $row[21]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>

                    <td><i class="fa fa-trash" style="color:#106994; font-weight:500;"
                            onclick="finddata('transactions','delete',<?php echo $row[0];?>);"></i></td>
                </tr>
                <?php
                    }
                    if($_REQUEST['task']!="search")
                    {
                    ?>
            </table>
        </div>
    </div>
    <div class="row">
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
                <!-- aa khali first pagination padshe first box -->
                <?php
                                 }
                                 else
                                 {
                                     
                                ?>

                <li class="page-item" onclick="finddata('<?php echo $_SESSION['what'];?>','paging',<?php echo $i;?>);"
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
    <!-- </div> -->
    <?php 
                    }
                }
        ?>
</div>


<!-- view courses -->
<?php
if($_SESSION['what']=="courses")
{
   
//    if($_REQUEST['task']=="delete")
//     {
//         $del=$con->query("delete from report_issue where reportissueid=$_REQUEST[id]");   
//     }
//     if($_REQUEST['task']=="deleteall")
//     {
//         $del=$con->query("delete from report_issue");   
//     }

?>
<div class="container" style="margin-left:20%;">


    <div class="row" style="padding-left:45%;">
        <center>
            <h1>Courses</h1>
        </center>
    </div>
    <div class="row">

        <?php 
     if($_REQUEST['task']=="delete" || $_REQUEST['task']=="update" || $_REQUEST['task']=="search")
     {

     }
     else{
        //  $_SESSION['cur']=$_REQUEST['id'];
     }
    //  if($_SESSION['reportissue']!=0)
    //  {
    //      $res=($perpage*$_SESSION['cur'])-$perpage;
    //      $page=ceil($_SESSION['reportissue']/$perpage);
         
    //      if($_SESSION['cur']==$page)
    //      {
    //          $end=$_SESSION['reportissue'];
    //     }
    //     else
    //     {
    //         $end=$res+$perpage;
    //     }
    //  }

    ?>
        <p class="p-15">
            <?php
        // if($_REQUEST['task']=="search")
        // {
        //     echo "<span class='norecord text-sccess'>fonded recordes</span>";
        // }
        //     else if($_SESSION['tutors']==0)
        //     {
        //         echo "<span>not record found</span>";
        //     }
        //     else{
        //         echo "<span>display record from</span><span style='color:#8342F6;'>".($res+1)."</span>
        //                <span>to</span>
        //                <span>".($end)."</span>";
            // }
            ?></p>

        <!-- <table class="table1 table-striped table-hover" cellpadding="80"> -->


        <?php
            $c=0;
            if($_REQUEST['task']=="search")
            {
                $check=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.categoryid=s.categoryid and cu.subcategoryid=s.subcategoryid and cu.coursename like '$_REQUEST[id]%'");
            }
            else{
                $check=$con->query("select cu.*,s.*,c.*,t.* from subcategory s,category c,courses_upload cu,tutor t where t.tutorid=cu.tutorid and s.categoryid=c.categoryid and cu.categoryid=c.categoryid and cu.categoryid=s.categoryid and cu.subcategoryid=s.subcategoryid order by cu.coursename desc");
            }
                
                while($row=mysqli_fetch_array($check))
                {
                    
                    ?>
        <div class="col-md-3">
            <div class="column">

                <div class="post-module">

                    <div class="thumbnail">
                        <div class="date bg-primary">


                            <div class="day fa fa-thumbs-up"
                                style="padding-top: 2px;font-size: 22px; padding-left: 2px"></div>

                        </div><img src="../user_site/tutor_site/<?php echo $row[5];?>" />
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                        <div class="category fa fa-rupee bg-primary" style="font-size:15px;">&nbsp;<?php echo $row[7];?>
                        </div>
                        <p class="title" style="font-size:20px;"><?php echo $row[4];?></p>
                        <h2 class="sub_title text-primary">Tutor:<?php echo $row[19]." ". $row[20];?></h2>
                        <!-- <div style="font-size:15px;">Rates:<?php echo $row[7];?>  </div>-->
                        <div style="display:inline-block;font-size:14px;padding-left:5px;">
                            <i class="fa fa-star-o" style="color:#FBB540;"></i>
                            <i class="fa fa-star-o" style="color:#FBB540;"></i>
                            <i class="fa fa-star-o" style="color:#FBB540;"></i>
                            <i class="fa fa-star-o" style="color:#FBB540;"></i>
                            <i class="fa fa-star-o" style="color:#FBB540;"></i>
                            (0)
                        </div>

                        <div style="font-size:15px;"><i class="ti-bar-chart"></i><?php echo $row[9];?></div>
                        <div class="post-meta" style="font-size:15px;color:#333333;"><span class="timestamp"><span
                                    class="comments">
                                    Estimated time:<?php echo $row[10];?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }
          ?>
    </div>
</div>
<?php
}  
?>


<!-- =========================================payment================================================================ -->
<?php
if($_SESSION['what']=="payment")
{
   
   if($_REQUEST['task']=="approve")
    {

        echo "<script> alert('$_REQUEST[id]');</script>";
        echo "<script> alert('$_REQUEST[count]');</script>";
        // $del=$con->query("insert into tutor_payment values(0,'$_SESSION[tutor_id]','$_REQUEST[id]',$_REQUEST[count],0)");     
        $del=$con->query("update tutor_payment set status=1 where  tutorid like '$_REQUEST[t_id]' uploadcourseid='$_REQUEST[c_id]'");     
    }
    if($_REQUEST['task']=="deleteall")
    {
        $del=$con->query("delete from courses_upload");   
    }

?>
<!-- <div class="container"> -->
<!-- <div class="row"> -->

<!-- <div class="col-md-12 formdiv2"> -->
<div class="">

    <?php
            if($_REQUEST['task']=="update")
            {
            // $selectcat=$con->query("select * from courses_upload where uploadcourseid=$_REQUEST[id]");
            // $rowselect=mysqli_fetch_array($selectcat);
            // $_SESSION['rid']=$rowselect[0];
            // ?>

 
    <?php
                        }

                        else{
                    ?>

    <center>

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
<!-- <table class="table1 table-striped table-hover" cellpadding="80">
            <tr>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Coursename</th>
                <th>CourseProfile</th>
                <th>Price</th>
                <th>Total purchase</th>
                <th>Total amount</th>
                <th>Your amount</th>
                <th>Pathofskill  tax</th>
               
            </tr> -->

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
                $check=$con->query("select * from courses_upload where tutorid like '$id' limit $res,$perpage");
                // $check=$con->query("select * from courses_upload  order by subcategoryid desc limit $res,$perpage");
               
                // $check=$con->query("SELECT b.*,cu.* from bill b,courses_upload cu  WHERE b.uploadcourseid=cu.uploadcourseid and tutorid like '$id' limit $res,$perpage");

             }?>
<div class="container">


    <div class="row" style="margin-top:30px;">
        <?php       
                while($row=mysqli_fetch_array($check))
                {
                    // echo $id;
                    // print_r($row);
                $check1=$con->query("SELECT count(*) from bill b,courses_upload cu  WHERE b.uploadcourseid=cu.uploadcourseid and tutorid like '$id' and b.uploadcourseid like '$row[0]'");
                    $row1=mysqli_fetch_array($check1);
                    $c++;
                    // print_r($row);
                    ?>


        <div class="col-md-3">
            <div class="column">

                <div class="post-module">

                    <div class="thumbnail">
                        <!-- <div class="date bg-primary">
                            <div class="day fa fa-thumbs-up" style="padding-top: 2px;font-size: 22px; padding-left: 2px"></div>
                        </div> -->
                        <img src="<?php echo $row[5];?>" />
                    </div>
                    <?php 
                  $ta=($row[7]*$row1[0]);

                 $ya=$ta/2;

                ?>
                    <!-- Post Content-->
                    <div class="post-content">
                        <div class="category fa fa-rupee bg1box" style="font-size:15px;">&nbsp;<?php echo $row[7];?>
                        </div>
                        <p class="title" style="font-size:20px;"><?php echo $row[4];?></p>
                        <div style="font-size:15px;">Total purchases : <?php echo $row1[0];?></div>
                        <form method="post">

                        <input type="hidden" name="t_id" value="<?php echo $row[1];?>">
                        <input type="hidden" name="c_id" value="<?php echo $row[0];?>">
                        </form>

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
<!-- 
                        <button type="button"  onclick="up1('payment','approve',<?php echo $row[0];?>,<?php echo $ya;?>);" style="    padding: 4px 7px 4px 7px;
    border: none;
    border-bottom: 3px solid #152188;
    border-radius: 3px;
    background-color: #178791;
    color: #fff;
    float: right;
    cursor: pointer;
    outline: none;">Approve</button> -->
    <form meth="post">
       <button type="button" name="approvebtn" style="    padding: 4px 7px 4px 7px;
    border: none;
    border-bottom: 3px solid #152188;
    border-radius: 3px;
    background-color: #178791;
    color: #fff;
    float: right;
    cursor: pointer;
    outline: none;">Approve</button>
                     
                        <!-- <a href=""
                            onclick="up1('payment','request',<?php echo $row[0];?>,<?php echo $ya;?>);">Request</a> -->
                    </div>
                </div>
            </div>
        </div>




        <?php
                } 
                ?>
    </div>
</div>
<?php
                if($_REQUEST['task']!="search")
                {
                ?>


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
if(isset($_REQUEST['approvebtn']))
{
    echo "<script>alert('hello')</script>";
    $up=$con->query("update tutor_payment set status=1 where tutorid like '$_REQUEST[t_id]'");
}
?>



