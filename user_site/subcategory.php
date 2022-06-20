<?php
require_once "connection.php";
?>
<?php
require_once "header.php";
?>

<?php
require_once "stickymenu.php";
?>

<style>
body {
    padding: 2rem 0rem;
}
/* filter selection class of sort */
.subindex {
    font-weight: 600;
    line-height: 1.2;
    width: 88%;
    font-family: gudea;
    padding-bottom: 10px;
    letter-spacing: -.02rem;
    font-size: 1.5rem;
    margin-left: 80px;
    border-bottom: 1px solid #d2d2d2;
}
.box {
    box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);
    border-radius: 7px;
    width:300px;
}

.card-img {
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}

.card-title {
    margin-bottom: 0.3rem;
    margin-top: 5px;
}

p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: .5px;
    margin: 6px 0 0px;
}

.cat {
    display: inline-block;
}

.fa-users {
    margin-left: 1rem;
}

.card-footer {
    font-size: 0.8rem;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 11px 15px 10px 15px;
}

section {
    position: relative;
    width: 100%;
    height: 480px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 100px;
    box-sizing: border-box;
    background: linear-gradient(rgb(3 3 3 / 24%), rgb(75 74 74)), url(img/bg11.jpg);
    background-size: cover;
    background-position: 50%;
}

.custom-shape-divider-bottom-1620221336 .shape-fill {
    fill: #FFFFFF;
}

.cantent1 {
    width: 100%;
    text-align: center;
    color: #fff;
}
.custom-shape-divider-bottom-1621424391 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1621424391 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 102px;
}

.custom-shape-divider-bottom-1621424391 .shape-fill {
    fill: #FFFFFF;
}
</style>
<section>
    <div class="cantent1">
        <p> ONLINE LEARNING RESOURCE CENTER </p>
        <h2 style="color:#fff;">Let's start learing</h2>
        <p> Welcome to our content library, where you'll find all the courses offered at dreamlane. <br>
            You can start learing specific course skills, languages, and more. Choose a course to get started!! </p>
        <!-- <p>Make the most out of your time at home! Discover tips and tricks for online learning.<br>
                    Get technology solutions to keep you in a growth mindset while working from home <br> or stuck at home during this pandemic.</p> -->
    </div>
    <div class="custom-shape-divider-bottom-1621424391">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
</section>

<?php
    $id=$_GET['courseid'];


    //uploadcid session  and t_id is for use in follow and like course and rate and review purpose in detail_page
            $_SESSION['uploadcid']=$id;
            $selecttid=$con->query("select *from courses_upload where uploadcourseid like '$_SESSION[uploadcid]'");
            $selectdata=mysqli_fetch_array($selecttid);
            $_SESSION['t_id']=$selectdata[1];

    //end content of uploadcid session  and t_id is for use in follow and like course and rate and review purpose in detail_page


       $check=$con->query("select c.*,s.*,n.*,a.* from category c,subcategory s,courses_upload n,course_video_addition a where n.uploadcourseid=a.uploadcourseid and n.categoryid=c.categoryid and n.subcategoryid=s.subcategoryid and c.categoryid=s.categoryid and a.uploadcourseid ='".$id."'");
    
             
            
    ?>

<div class="container">
    <?php
    $check1=$con->query("select * from courses_upload where uploadcourseid ='".$id."'");
    $row3=mysqli_fetch_array($check1)
    ?>
<div class="row" style="border-bottom:0px solid;margin-top:-6px;">
            <p class="subindex">All available videos of <?php echo $row3[4]; ?> Course</p>
        </div>
    <div class="row" style="padding: 40px;">
       
        <?php
         while($row=mysqli_fetch_array($check))
         {

            // print_r($row);
        ?>
        <div class="col-md-4">
            <a href="detail_page.php?uploadcourseid=<?php echo $row[5];?>" style="margin:0px;">
                <div class="card box">
                    <video id="bgvid" playsinline autoplay muted loop class="vi1" style="width:100%">

                        <source src="tutor_site\<?php echo $row[22];?>" type="video/mp4" autoplay="true">
                    </video>
            </a>
            <!-- <div class="card-img-overlay">
                        <a href="#" class="btn btn-light btn-sm">Cooking</a>
                    </div> -->
            <div class="card-body">
                <span class="course-type"><?php echo $row[1];?></span>
                <span class="course-type"><?php echo $row[4];?></span>
                <span class="course-type"><?php echo $row[9];?></span>
                <h4 style="padding-left:5px;">Estimated time: &nbsp;<?php echo $row[15];?></h4>
                <div style="display:inline-block;padding-left:29px;font-size:13px;"><i class="ti-bar-chart"></i>&nbsp;<?php echo $row[14]?></div>
                <p class="card-text"> <?php echo $row[11];?>
                </p>
                <p class="card-text"> <?php echo $row[23];?>
                </p>
                <!-- <a href="#" class="btn btn-info">Read Recipe</a> -->
            </div>
            <!-- <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                <div class="views">Oct 20, 12:45PM
                </div>
                <div class="stats">
                    <i class="far fa-eye"></i> 1347
                    <i class="far fa-comment"></i> 12
                </div>

            </div> -->
        </div>

    </div>
    <?php
        }
        ?>
    <!-- </div> -->
</div>
</div>

</body>
<?php
require_once "footer.php";
?>
<?php
require_once "script.php";
?>