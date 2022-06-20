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
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(banner/w123.jpeg);
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

    .custom-shape-divider-bottom-1625918790 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1625918790 svg {
        position: relative;
        display: block;
        width: calc(145% + 1.3px);
        height: 500px;
    }

    .custom-shape-divider-bottom-1625918790 .shape-fill {
        fill: #FFFFFF;
    }

    /* video */
    .video {
        border-radius: 20px;
        margin-top: -230px;
        /* margin-left: 80px; */
        position: relative;
        box-shadow: 0px 2px 25px -16px rgb(0 0 0 / 44%);
    }

    /* end banner */
    .trapezoid-image_trapezoidLeft__1Vu3w,
    .trapezoid-image_trapezoidRight__1NEvJ {
        -webkit-filter: drop-shadow(0 15px 10px rgba(0, 0, 0, .3));
        filter: drop-shadow(0 15px 10px rgba(0, 0, 0, .3));
        padding: 0 2rem;
    }

    .trapezoid-image_trapezoidLeft__1Vu3w img {
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
    }

    .trapezoid-image_trapezoidRight__1NEvJ img {
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 80%);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 80%);
    }
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
        <div class="custom-shape-divider-bottom-1625918790">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <rect x="1200" height="3.6"></rect>
                <rect height="3.6"></rect>
                <path d="M0,0V3.6H580.08c11,0,19.92,5.09,19.92,13.2,0-8.14,8.88-13.2,19.92-13.2H1200V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <div class="container">
        <div class="row" style="margin-top:-270px;">
            <div style="margin-left: -50px;margin-bottom: 170px;font-size:50px;color:#fff;">
                <div style="text-shadow: 2px 2px 4px white;"> <span
                        style="color: #961414;font-size:60px;font-weight:600;">C</span>areer</div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
		   <div clas="row">
				<div>
					<center>
		  			 <video controls="" controlslist="nodownload" style="width:90%;/* height:90%; */" class="video">
   	  	 				 <source src="images/video.mp4" type="audio/mp4"> 
					 </video>
					 </center> 
		         </div>		 
		   </div>
		</div> -->
    <!-- <img src="img/map.jpg" style="width:100%;"> -->
    <div class="container" style="margin-top: 70px;">

        <div>
            <h3 class="text-center mb-2">PathOfSkill's Career Service Offering</h3>

            <div class="text-center">Students who enroll in any Udacity Nanodegree Program will have access to
                Udacity's Career Services, which include Resume Reviews, Cover Letter Review, LinkedIn Review,
                and GitHub Review. See below for what each service entails.</div>

        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-md-6">
                <div class="content-block_contentBlockImg__22f7N trapezoid-image_trapezoidLeft__1Vu3w">
                    <picture class="">
                        
                            <img src="img/t2.jpg"
                            loading="lazy">
                    </picture>
                </div>
            </div>
            <div class="col-md-6" style="margin-top:10%;">
                <div class="partner-value-prop_valueText__2U2-8">
                    <h3>
                        <div>Resume Review</div>
                    </h3>
                    <div>Get a detailed resume review from an industry professional to ensure your resume
                        effectively
                        conveys your abilities and gets attention from employers.
                        <br><br>
                        <h6 class="blue">WHAT IS INCLUDED IN THE SERVICE:</h6>
                        <ul>
                            <li>One Personalized Review</li>
                            <li>Industry-tested Template</li>
                            <li>Resume Optimization Tips</li>
                        </ul>
                    </div>

                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="margin-top:10%;">
                <div class="selling-points_content__2r-Dn">
                    <h3 class="light mb-half">
                        <div>
                            <h2>LinkedIn Review</h2>
                        </div>
                    </h3>
                    <div class="selling-points_contentBody__3vBn2">Get a customized review of your LinkedIn
                        profile from an industry professional. Optimize your profile for recruiter search and
                        boost your visibility. You will also understand how to leverage LinkedIn to grow your
                        own professional network.
                        <br><br>
                        <h6 class="blue">
                            WHAT IS INCLUDED IN THE SERVICE:
                        </h6>
                        <ul>
                            <li>One Personalized Review</li>
                            <li>Tips to Grow Your Network</li>
                            <li>Receive industry tested tips to get your profile noticed</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-block_contentBlockImg__22f7N trapezoid-image_trapezoidRight__1NEvJ">
                    <picture class="">
                    <img src="img/t5.jpeg"
                            loading="lazy">
                    </picture>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="content-block_contentBlockImg__22f7N trapezoid-image_trapezoidLeft__1Vu3w">
                    <picture class="">
                    <img src="img/t6.jpeg"
                            loading="lazy">
                    </picture>
                </div>
            </div>
            <div class="col-md-6" style="margin-top:10%;">
                <div class="selling-points_content__2r-Dn">
                    <h3 class="light mb-half">
                        <div>
                            <h2>GitHub Review</h2>
                        </div>
                    </h3>
                    <div class="selling-points_contentBody__3vBn2">Your GitHub profile is an important portfolio of your
                        work. A technical professional will help you organize your profile to showcase your projects and
                        skills.
                        <br><br>
                        <h6 class="blue">WHAT IS INCLUDED IN THE SERVICE:</h6>
                        <ul>
                            <li>One Personalized Review</li>
                            <li>Polished Portfolio of Your Work</li>
                            <li>Get feedback to ensure your projects stick out</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
  require_once "script.php";
require_once "footer.php";
?>