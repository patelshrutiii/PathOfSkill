<?php
require_once "connection.php";
if(isset($_REQUEST['btnsubmit']))
{
    $nm=$_REQUEST['txtname'];
    $newname=$_REQUEST['txtname'].".".pathinfo($_FILES[upphoto][name],PATHINFO_EXTENSION);
    $ex=pathinfo($_FILES[upphoto][name],PATHINFO_EXTENSION);
    $s=$_FILES[upphoto][size]/1024/1024;
    echo $s;
      if($ex=="jpg"||$ex=="png"||$ex=="jpeg"||$ex=="mp4")
      {
           if($s<5)
           {
               $setpath=dirname(__FILE__)."/courseimage/".$newname;
               $path="courseimage/".$newname;
              move_uploaded_file($_FILES[upphoto][tmp_name],$setpath);
              $in=$con->query("insert into demo values(0,'$nm','$path')");
           }
           else{
               echo "file size is large";
           }
      }
      else{
          echo "invalid file type";
      }
    
}
$im=$con->query("select * from demo");
$row=mysqli_fetch_array($im);
?>
  <img src="<?php echo $row[2];?>">

<html>
<center>
<form method="post" enctype="multipart/form-data">
     enter name:<input type="text" name="txtname"><br><br>
     profile:&nbsp;&nbsp;&nbsp;<input type="file" name="upphoto"><br><br>
     <input type="submit" name="btnsubmit" value="upload">
</form>
</center>
</html>