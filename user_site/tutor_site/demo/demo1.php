<?php
require_once "connection.php";
// require_once "head.php";
?>
<header>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</header>

<form method="post">
    <select onChange="dropdownfill('subcategory',this.value);">
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
</form>
    <br><br>

<select id="subcategory">

</select>

<script src="demo.js"></script>





