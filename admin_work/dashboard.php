
<html lang="en">
<?php 
require_once "connection.php";
require_once "admin_query.php";
?>
<?php require_once "head.php";
?>
<body onload="finddata('<?php echo $_SESSION['what']; ?>','view',1); findbox('<?php echo $_SESSION['what']?>')">
<?php require_once "header.php";?>
<!-- <div style="margin-left:300px; margin-top:50px;"  onclick="finddata('category','view',1);"  >
        <div class="b3">
            
            <div class="d1" style="background-color:red;">
                
                <div class="b2">
                
            
                
                </div>
                <h1 style="padding-left:45px">category</h1>
                <i class="fa fa-user"></i>

            </div>
            
        </div>
        
</div> -->
<div id="titledata">
 </div>
 <div id="fillme">
 </div>
  
    <?php require_once "preloader.php";?>
    
        <?php require_once "nav_header.php";?>
      
        <?php require_once "sidebar.php";?>
        
    <?php require_once "script.php";?>
  
</body>

</html>