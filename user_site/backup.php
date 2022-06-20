<!--     ===================================common banner=============================================== -->
<?php
  require_once "connection.php";
  require_once "header.php";
  // $_SESSION['page']='tutor';
?>
<?php
    require_once "script.php";
?>
<html>

<head>

    <style>
    /* banner */
    .sectionb {
        width: 100%;
    }

    section.hero {
        height: 600px;
        content: '';
        background: linear-gradient(45deg, rgba(32, 124, 229, 0) 0%, rgba(146, 95, 206, 0) 55%, #009999 100%);
        background-color: rgba(0, 0, 0, 0.5);
        background-image: url(img/bg_4.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
    }

    section.contentb {
        position: relative;
        /* height: 1500px; */
    }

    .svgb {
        position: absolute;
        top: -130px;
        left: 0;
        width: 100%;
        height: 130px;
        transform-origin: center bottom;
        transform: scaleY(1);
    }

    /* end banner */
  
    </style>

</head>


<body>

    <?php
    require_once "stickymenu.php";
       ?>
    <header class="headerb"></header>

    <section class="hero sectionb">
        <div class="overlayb"></div>
    </section>
    <section class="contentb">
        <svg class="svgb" width="3" height="3" preserveAspectRatio="none" viewBox="0 0 3 3"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0l1.5 2 1.5-2v3h-3v-3z" fill="#fff" />
        </svg>
    </section>
    <div class="container">
        <div class="row" style="margin-top:-270px;">
            <div style="margin-left: -50px;margin-bottom: 170px;font-size:50px;color:#fff;">
                <div> <span style="color:#003399;font-size:60px;font-weight:600;">In</span>structor</div>
                <div
                    style="border:2px solid;width:170px;margin-top:-15px;margin-left:3px;border-radius:30px;color:#003399;">
                </div>
            </div>
        </div>
 

<?php
  require_once "script.php";

?>

<!-- ============================end of banner common========================================== -->
<?php

include_once('getid3.php');
$filename="01 - Welcome.mp4";
$getID3 = new getID3;
$file = $getID3->analyze($filename);
echo("Duration: ".$file['playtime_string'].
" / Dimensions: ".$file['video']['resolution_x']." wide by ".$file['video']['resolution_y']." tall".
" / Filesize: ".$file['filesize']." bytes<br />");
?>