<?php
require_once "connection.php";

?>

<!------------------------------------------------course_rate code------------------------------------------- -->

<?php
// echo $_SESSION['userid'];
// echo $_SESSION['uploadcid'];
echo "<br>";

if($_REQUEST['what']=="rr")
{
       if($_REQUEST['task']=="first")
        {
            $rt=$con->query("select ratecourse from rate where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
            $rrt=mysqli_fetch_array($rt);
            
        }
        else 
        {
            $ch=$con->query("select count(*) from rate where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
           
            $chh=mysqli_fetch_array($ch);
            if($chh[0]==0)
            {
                
                $in=$con->query("insert into rate values(0,'$_SESSION[userid]','$_SESSION[uploadcid]',$_REQUEST[id])");
                
            }
            else
            {
                
                $up=$con->query("update rate set ratecourse=$_REQUEST[id] where  userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
            }
            $rt=$con->query("select sum(ratecourse) from rate where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
            $rrt=mysqli_fetch_array($rt);
            
        }
    ?>
     <?php
                          for($c=1;$c<=5;$c++)
                          {
                              if($c<=$rrt[0])
                              {
                           ?>
                           <i class="fa fa-star" style="color:#ffc107; font-size:25px;" onclick="ratedata('rr','update',<?php echo $c;?>);"></i>
                           <?php
                              }
                              else
                              {
                            ?>
                           <i class="fa fa-star-o" style="color:#ffc107; font-size:25px;" onclick="ratedata('rr','update',<?php echo $c;?>);"></i>
                           <?php
                              }
                          }
                          
                          ?>
               
        <form method="post">
       <textarea class="form-control" name="coursereview" rows="5" placeholder="enter review"></textarea>
       
        
      
      <div class="modal-footer">
      <button type="submit" name="btnreviewcourse" class="btn btn-default" >Submit</button>
      </div>
       </form>
       <?php
    }

    ?>
<!------------------------------------------------end course_rate code------------------------------------------- -->

<!------------------------------------------------tutor_rate code----------------------------------------------------------- -->
<?php


// echo $_SESSION['userid'];
// echo $_SESSION['uploadcid'];
// echo $_SESSION['t_id'];

if($_REQUEST['what']=="rrt")
{
       if($_REQUEST['task']=="tfirst")
        {
            $rt=$con->query("select ratetutor from rate_tutor where userid like '$_SESSION[userid]' and tutorid like '$_SESSION[t_id]'");
            $rrt=mysqli_fetch_array($rt);
            
        }
        else 
        {
            $ch=$con->query("select count(*) from rate_tutor where userid like '$_SESSION[userid]' and tutorid like '$_SESSION[t_id]'");
           
            $chh=mysqli_fetch_array($ch);
            if($chh[0]==0)
            {
                
                $in=$con->query("insert into rate_tutor values(0,'$_SESSION[userid]','$_SESSION[t_id]',$_REQUEST[id])");
                
            }
            else
            {
                
                $up=$con->query("update rate_tutor set ratetutor=$_REQUEST[id] where  userid like '$_SESSION[userid]' and tutorid like '$_SESSION[t_id]'");
            }
            $rt=$con->query("select ratetutor from rate_tutor where userid like '$_SESSION[userid]' and tutorid like '$_SESSION[t_id]'");
            $rrt=mysqli_fetch_array($rt);
            
        }
    ?>
     <?php
                          for($c=1;$c<=5;$c++)
                          {
                              if($c<=$rrt[0])
                              {
                           ?>
                           <i class="fa fa-star" style="color:#ffc107; font-size:25px;" onclick="ratedata('rrt','update',<?php echo $c;?>);"></i>
                           <?php
                              }
                              else
                              {
                            ?>
                           <i class="fa fa-star-o" style="color:#ffc107; font-size:25px;" onclick="ratedata('rrt','update',<?php echo $c;?>);"></i>
                           <?php
                              }
                          }
                          
                          ?>
   
      
        <form method="post">
        <textarea class="form-control" name="tutorreview" rows="5" placeholder="enter review"></textarea>
       
        
     
      <div class="modal-footer">
      <button type="submit" name="btnreviewtutor" class="btn btn-default">Submit</button>
      </div>
       </form>
       <?php
    }

    ?>
<!------------------------------------------------end tutor_rate code------------------------------------------- -->

<!-----------------------------------------------Start Report Abuse code------------------------------------------------------>
<?php
               if(isset($_REQUEST['btnreportabuse']))
               {
                   $check=$con->query("select *from report_course where userid like '$_SESSION[userid]' and uploadcourseid like '$_SESSION[uploadcid]'");
                   $checkdata=mysqli_fetch_array($check);
                   if($checkdata[0]=='')
                   {
                    $insQA=$con->query("insert into report_course values(0,'$_SESSION[userid]','$_SESSION[t_id]','$_SESSION[uploadcid]','$_REQUEST[report]')");
                   }
                  else
                  {
                      header('location:403');
                      echo "<script>alert('sorry you can not report same course twisw');</script>";
                  }
                   
               }
    ?>
<!-----------------------------------------------End Report Abuse code------------------------------------------------------>
<!--  ================================filter function================================= -->
