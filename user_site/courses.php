<?php
require_once "header.php";
?>
<?php
require_once "connection.php";
?>
<?php
require_once "stickymenu.php";
?>
<style>
.sectionb {
    width: 100%;
}

section.hero {
    height: 600px;
    content: '';
    background: linear-gradient(rgb(11 0 0 / 42%), rgb(0 0 9 / 50%)), url(banner/image_5.jpg) no-repeat center;
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
.custom-shape-divider-bottom-1625908497 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1625908497 svg {
    position: relative;
    display: block;
    width: calc(142% + 1.3px);
    height: 204px;
}

.custom-shape-divider-bottom-1625908497 .shape-fill {
    fill: #FFFFFF;
}
.single_course .course_content p {
    margin: 0;
    font-size: 16px;
}
.single_course .price {
    color: #f8fcff !important;
    background: #504e9d !important;
}
.single_course:hover .price {
    background: #002347 !important;
    color: #efefef !important;
}
.acou:hover{
    color: #002347 !important;
    font-weight: 600 !important;
}
a.primary-btn2:hover,
.primary-btn:hover {
    background: #002347;
    text-decoration: none;
    font-size: 15px;
}
</style>

<body>

    <!--================Home Banner Area =================-->
    <section class="hero sectionb">
        <div class="overlayb"></div>
    </section>
    <section class="contentb">
    <div class="custom-shape-divider-bottom-1625908497">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M649.97 0L550.03 0 599.91 54.12 649.97 0z" class="shape-fill"></path>
    </svg>
</div>
    </section>
    <div class="container">
        <div class="row" style="margin-top:-270px;">
        <div style="margin-left: -50px;margin-bottom: 170px;font-size:50px;color:#fff;">
                <div style="text-shadow: 2px 2px 4px white;"> <span style="color: #961414;font-size:60px;font-weight:600;">R</span>ecent courses</div>
            </div>
        </div>
    </div>
    <!-- <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>About Us</h2>
                            <div class="page_link">
                                <a href="index.html">Home</a>
                                <a href="about-us.html">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-shape-divider-bottom-1621331434">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section> -->
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Our Popular Courses</h2>
                        <p>
                            Replenish man have thing gathering lights yielding shall you
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">
                        <?php
            $selectcourse=$con->query("SELECT * FROM `courses_upload` ORDER BY `courses_upload`.`uploadcourseid` DESC");
            while($data=mysqli_fetch_array($selectcourse))
            {
            ?>

                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" style="height:230px;width:322px;"
                                    src="tutor_site\<?php echo $data[5];?>" alt="" />
                            </div>
                            <?php
                $cat=$con->query("select *from category where categoryid like '$data[2]'");
                $catdata=mysqli_fetch_array($cat);
                ?>
                            <div class="course_content">
                                <?php
                                if($data[7]=='0')
                                {
                                    ?>
                                    <span class="price">Free</span>
                                <?php
                                }
                                else{
                                    ?>
                                    <span class="price">&#8377;<?php echo $data[7]; ?></span>
                                    <?php
                                }
                                ?>
                                
                                <span class="tag mb-4 d-inline-block"><?php echo $catdata[1]; ?></span>
                                <h4 class="mb-3">
                                    <!-- <a href="subcategory.php?courseid=<?php echo $row[0];?>"> -->
                                    <a
                                        href="detail_page.php?courseid=<?php echo $data[0];?>"><?php echo $data[4]; ?></a>
                                </h4>
                                <!-- <p style="color:black;">
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p> -->
                                <div
                                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                    <?php
                          $tutdetail=$con->query("select * from tutor where tutorid like '$data[1]'");
                          $tutdetaildata=mysqli_fetch_array($tutdetail);
                          ?>
                                    <div class="authr_meta">
                                        <img src="tutor_site/<?php echo $tutdetaildata[6]?>" ;
                                            style="height:50px;width:55px !important;border-radius:50%;margin-left:-20px;"
                                            alt="" />
                                        <span class="d-inline-block ml-2"><?php echo $tutdetaildata[1];?></span>
                                    </div>
                                    <div class="mt-lg-0 mt-3">
                                        <span class="meta_info mr-4">
                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                        </span>
                                        <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->



</body>

</html>
<?php
require_once "footer.php";
?>
<?php
require_once "script.php";
?>