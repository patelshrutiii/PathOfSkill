<?php 
require_once "connection.php";?>
<form method="post">
<input type="text" class="text1" name="txtcatid"></br>
                    <input type="text" class="text1" name="txtcatename"></br>
                    <button type="submit" class="button1" name="btnupdate">update</button>
                </form>
<?php
                if(isset($_REQUEST['btnupdate']))
{
$updatecat=$con->query("update category set categoryname='$_REQUEST[txtcatename]' where categoryid=$_REQUEST[txtcatid]");
echo "record update";
}

?>