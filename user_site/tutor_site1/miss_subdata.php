<h1>hello</h1>
<?php
require_once "connection.php";

if($_REQUEST['wat']=="subcategory")
{
    //    echo "hello";
    $sel=$con->query("select * from subcategory where categoryid=$_REQUEST[id]");
    
      while($row=mysqli_fetch_array($sel))
      {
        ?>
       <option value="<?php echo $row[0];?>"><?php echo $row[2]; ?></option>
        <?php
      }
}
?>
<script src="demo.js"></script>




