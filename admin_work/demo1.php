<?php
require_once "connection.php";
require_once "script.php";
?>
    <select name="subid" onchange="dropdownfill('subcategory',this.value);">
     <option selected>-----select category---</option>
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
    <br><br>
<select id="subcategory">

</select>

<script src="index.js"></script>

