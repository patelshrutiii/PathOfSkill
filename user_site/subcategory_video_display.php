<?php

require_once "connection.php";
require_once "header.php";
require_once "stickymenu.php";
?>
<style>
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

.sort-option {
    border: 1px solid #999999;
    color: #999999;
    outline: none;
    height: 40px;
    font-size: 15px;
    font-family: gudea;
    margin-left: 6px;
    background-color: transparent;
    width: 120px;
    padding-left: 5px;
    font-weight: 400;
    border-radius: 5px;
}

/* 3no bhag */
.sidebar-box {
    margin-bottom: 30px;
    padding: 10px;
    font-size: 15px;
    width: 100%;
}

.sidebar-box h3 {
    font-size: 18px;
    margin-bottom: 15px;
    font-weight: 700;
}

label {
    display: inline-block;
    margin-bottom: 12px;
}

/* ============== */
.video-card {
    position: absolute;
    margin: 10px;
    padding: 2px;
    color: white;
    background-color: #2a77aa;
    letter-spacing: 2;
}

.thumb12 {
    width: 100%;
    height: 180px;
}
.box {
    box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);
    border-radius: 7px;
    width: 270px;
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
    margin: 6px 0 6px;
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

.custom-shape-divider-bottom-1621424114 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1621424114 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 81px;
    transform: rotateY(180deg);
}

.custom-shape-divider-bottom-1621424114 .shape-fill {
    fill: #FFFFFF;
}
</style>
<?php
$_SESSION['filtersubcid']=$_GET['subcid'];
?>

<section>
    <div class="cantent1">
        <p> ONLINE LEARNING RESOURCE CENTER </p>
        <h2 style="color:#fff;">Let's start learing</h2>
        <p> Welcome to our content library, where you'll find all the courses offered at dreamlane. <br>
            You can start learing specific course skills, languages, and more. Choose a course to get started!! </p>
        <!-- <p>Make the most out of your time at home! Discover tips and tricks for online learning.<br>
                    Get technology solutions to keep you in a growth mindset while working from home <br> or stuck at home during this pandemic.</p> -->
    </div>
    <div class="custom-shape-divider-bottom-1621424114">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                opacity=".25" class="shape-fill"></path>
            <path
                d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                opacity=".5" class="shape-fill"></path>
            <path
                d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                class="shape-fill"></path>
        </svg>
    </div>
</section>

<body onload="filtersubcatdata('filldata','view',1);">

    <div class="container-fluid">
        <div class="row" style="border-bottom:0px solid;margin-top:-6px;">
            <p class="subindex">All Commercial Courses</p>
        </div>
        <div class="row">
            <div class="col-md-4" style="border:0px solid;padding-left:80px;">
                <form method="post">
                    <input onkeyup="filtersubcatdata('searchdata','view',this.value);" type="text"
                        style="border:1px solid #d2d2d2;width:280px;height:40px;border-radius:4px;font-family:gudea;padding:10px;"
                        placeholder="Search for course"><i class="ti-search" style="margin-left:-25px;"></i>
                </form>
            </div>
            <div class="col-md-8" style="border:0px solid;padding-left:250px;">
                <form>
                    <select class="sort-option" style="cursor: pointer;float:right;" onChange="filtersubcatdata('clevel','view',this.value)">
                        <option value="0">Sort</option>
                        <option value="1">Highest Rated</option>
                        <option value="2">Newest</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="row" style="padding: 40px;">
            <div class="col-md-3" id="sidebar" style="border:0px solid;margin-top: -60px;">
                <div class="sidebar-box p-4">
                    <hr style="width:240px;margin-left:0px;">

                    <h3 class="heading-sidebar">Course Ratings</h3>
                    <form action="#" class="browse-form">
                        <label for="option-instructor-1" style="font-size:13px;"><input type="radio" onclick="filtersubcatdata('rate','view',4.5)"
                                id="option-instructor-1" name="vehicle">


                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star-half-o" style="color:#FBB540;"></i> 4.5 &amp; up</label><br>
                        <label for="option-instructor-2" style="font-size:13px;"><input type="radio"  onclick="filtersubcatdata('rate','view',4.0)"
                                id="option-instructor-2" name="vehicle">
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star-o" style="color:#FBB540;"></i> 4.0 &amp; up</label><br>
                        <label for="option-instructor-3" style="font-size:13px;"><input type="radio"  onclick="filtersubcatdata('rate','view',3.5)"
                                id="option-instructor-3" name="vehicle" value="">
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star-half-o" style="color:#FBB540;"></i>
                            <i class="fa fa-star-o" style="color:#FBB540;"></i> 3.5 &amp; up</label><br>
                        <label for="option-instructor-4" style="font-size:13px;"><input type="radio"  onclick="filtersubcatdata('rate','view',3.0)"
                                id="option-instructor-4" name="vehicle" value="">
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star" style="color:#FBB540;"></i>
                            <i class="fa fa-star-o" style="color:#FBB540;"></i>
                            <i class="fa fa-star-o" style="color:#FBB540;"></i> 3.0 &amp; up</label>

                    </form>
                </div>


                

                <div class="sidebar-box bg-white p-4">
                    <hr style="width:240px;margin-left:0px;margin-top:-60px;">

                    <h3 class="heading-sidebar">Course Level</h3>
                    <form action="#" class="browse-form">

                        <label for="option-course-type-1"><input type="radio" onclick="filtersubcatdata('clevel','view','beginner')" name="vehicle" value=""> Basic</label><br>
                        <label for="option-course-type-2"><input type="radio" onclick="filtersubcatdata('clevel','view','Intermediate')" id="option-course-type-2" name="vehicle"
                                value=""> Intermediate</label><br>
                        <label for="option-course-type-3"><input type="radio" onclick="filtersubcatdata('clevel','view','expert')" id="option-course-type-3" name="vehicle"
                                value=""> Advanced</label><br>
                    </form>
                </div>

                <div class="sidebar-box bg-white p-4">
                    <hr style="width:240px;margin-left:0px;margin-top:-60px;">

                    <h3 class="heading-sidebar">Price</h3>
                    <form action="#" class="browse-form">
                        <label for="option-software-1"><input type="radio" onclick="filtersubcatdata('price','view','paid')" name="price">&nbsp;Paid</label><br>

                        <label for="option-software-2"><input type="radio" onclick="filtersubcatdata('price','view','free')" name="price">&nbsp;Free</label><br>

                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div id="filterdata"></div>

            </div>
        </div>
    </div>
</body>

<?php
require_once "footer.php";
?> <?php
require_once "script.php";
?>