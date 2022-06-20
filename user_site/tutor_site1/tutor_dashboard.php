<html lang="en">


<?php 
require_once "connection.php";
require_once "tutor_query.php";
?>
<?php require_once "head.php";
?>
<style>
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

    </style>
<body oncontextmenu="return false;"
    onload="finddata('<?php echo $_SESSION['what']; ?>','view',1); findbox('<?php echo $_SESSION['what']?>'); up('showinfo','view',1,1);">
    <?php require_once "header.php";?>

    <!-- <div id="titledata">
 </div> -->

    <?php require_once "preloader.php";?>

    <?php require_once "nav_header.php";?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php require_once "sidebar.php";?>
            </div>
            <div class="col-md-10">
                <!-- <div type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</div>      -->

                <div id="fillme">
                </div>
            </div>
            <div></div>


            <?php require_once "script.php";?>

       
        </div>

</body>

</html>