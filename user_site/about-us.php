<!DOCTYPE html>
<html lang="en">


<?php

require_once "connection.php";

require_once "header.php";
$_SESSION['page']='aboutus';
?>
<style>
.hero-wrap.hero-wrap-2 {
    height: 600px;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.hero-wrap {
    width: 100%;
    height: 100%;
    position: inherit;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
}

.hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #003399 0%, #009999 100%);
    content: '';
    opacity: .5;
    /* background: rgba(32, 124, 229, 0); */
    background: -moz-linear-gradient(45deg, rgba(32, 124, 229, 0) 0%, rgba(146, 95, 206, 0) 55%, #009999 100%);
    background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(32, 124, 229, 0)), color-stop(55%, rgba(146, 95, 206, 0)), color-stop(100%, #009999));
    /* background: -webkit-linear-gradient(
45deg
, rgba(32, 124, 229, 0) 0%, rgba(146, 95, 206, 0) 55%, #009999 100%); */
    background: -o-linear-gradient(45deg, rgba(32, 124, 229, 0) 0%, rgba(146, 95, 206, 0) 55%, #009999 100%);
    background: -ms-linear-gradient(45deg, rgba(32, 124, 229, 0) 0%, rgba(146, 95, 206, 0) 55%, #009999 100%);
    /* background: linear-gradient(
45deg
, rgba(32, 124, 229, 0) 0%, rgba(146, 95, 206, 0) 55%, #009999 100%); */
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#003399', endColorstr='#009999', GradientType=1);
}

.wave {
    position: absolute;
    bottom: 0;
    left: 0;
}

/* good */

.headline .header-wrapper {
    display: flex;
    box-shadow: 0 3px 26px #d6d6d6;
}

.headline .header-wrapper .left {
    background: #fff;
    padding: 30px 25px;
    width: 75%;
    float: left;
}

#our-story .headline .header-wrapper .right img {
    display: block;
    width: 100%;
}

/* slider vertical */

.aboutsl {
    background: linear-gradient(60deg, #420285, #08BDBD);
    margin-top: 50px;
    margin-left: 60px;
    box-shadow: 0 3px 26px #d6d6d6;
    border-radius: 5px;
    margin-right: 60px;
    padding-left: 40px;
    height: 450px;
}

.wrapper12 {

    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
}

.carousel12 {
    position: relative;
    width: 100%;
    max-width: 500px;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.carousel__item {
    display: flex;
    align-items: center;
    position: absolute;
    width: 100%;
    padding: 0 12px;
    opacity: 0;
    filter: drop-shadow(0 2px 2px #555);
    will-change: transform, opacity;
    -webkit-animation: carousel-animate-vertical 27s linear infinite;
    animation: carousel-animate-vertical 27s linear infinite;
}

.carousel__item:nth-child(1) {
    -webkit-animation-delay: calc(3s * -1);
    animation-delay: calc(3s * -1);
}

.carousel__item:nth-child(2) {
    -webkit-animation-delay: calc(3s * 0);
    animation-delay: calc(3s * 0);
}

.carousel__item:nth-child(3) {
    -webkit-animation-delay: calc(3s * 1);
    animation-delay: calc(3s * 1);
}

.carousel__item:nth-child(4) {
    -webkit-animation-delay: calc(3s * 2);
    animation-delay: calc(3s * 2);
}

.carousel__item:nth-child(5) {
    -webkit-animation-delay: calc(3s * 3);
    animation-delay: calc(3s * 3);
}



.carousel__item:last-child {
    -webkit-animation-delay: calc(-3s * 2);
    animation-delay: calc(-3s * 2);
}

.carousel__item-head {
    border-radius: 50%;
    background-color: #d7f7fc;
    width: 90px;
    height: 90px;
    padding: 14px;
    position: relative;
    margin-right: -45px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 50px;
}

.carousel__item-body {
    width: 100%;
    background-color: #fff;
    border-radius: 8px;
    padding: 16px 20px 16px 70px;
}

.title1 {
    text-transform: uppercase;
    font-size: 15px;
    margin-top: 10px;
}

@-webkit-keyframes carousel-animate-vertical {
    0% {
        transform: translateY(100%) scale(0.5);
        opacity: 0;
        visibility: hidden;
    }

    3%,
    11.1111111111% {
        transform: translateY(100%) scale(0.7);
        opacity: 0.4;
        visibility: visible;
    }

    14.1111111111%,
    22.2222222222% {
        transform: translateY(0) scale(1);
        opacity: 1;
        visibility: visible;
    }

    25.2222222222%,
    33.3333333333% {
        transform: translateY(-100%) scale(0.7);
        opacity: 0.4;
        visibility: visible;
    }

    36.3333333333% {
        transform: translateY(-100%) scale(0.5);
        opacity: 0;
        visibility: visible;
    }

    100% {
        transform: translateY(-100%) scale(0.5);
        opacity: 0;
        visibility: hidden;
    }
}

@keyframes carousel-animate-vertical {
    0% {
        transform: translateY(100%) scale(0.5);
        opacity: 0;
        visibility: hidden;
    }

    3%,
    11.1111111111% {
        transform: translateY(100%) scale(0.7);
        opacity: 0.4;
        visibility: visible;
    }

    14.1111111111%,
    22.2222222222% {
        transform: translateY(0) scale(1);
        opacity: 1;
        visibility: visible;
    }

    25.2222222222%,
    33.3333333333% {
        transform: translateY(-100%) scale(0.7);
        opacity: 0.4;
        visibility: visible;
    }

    36.3333333333% {
        transform: translateY(-100%) scale(0.5);
        opacity: 0;
        visibility: visible;
    }

    100% {
        transform: translateY(-100%) scale(0.5);
        opacity: 0;
        visibility: hidden;
    }
}

.heading-section h2 {
    font-size: 34px;
    font-weight: 600;
    line-height: 1.4;
}

.custom-shape-divider-bottom-1621331434 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1621331434 svg {
    position: relative;
    display: block;
    width: calc(300% + 1.3px);
    height: 186px;
}

.custom-shape-divider-bottom-1621331434 .shape-fill {
    fill: #FFFFFF;
}

.sectionb {
    width: 100%;
}

section.hero {
    height: 676px;
    content: '';
    background: linear-gradient(rgb(11 0 0 / 42%), rgb(0 0 9 / 50%)), url(banner/w31.jpeg) no-repeat center;
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

.custom-shape-divider-bottom-1625909641 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1625909641 svg {
    position: relative;
    display: block;
    width: calc(300% + 1.3px);
    height: 254px;
}

.custom-shape-divider-bottom-1625909641 .shape-fill {
    fill: #FFFFFF;
}
</style>
<?php
    require_once "stickymenu.php";
    ?>

<body>
    <!--    
<section class="hero-wrap hero-wrap-2" style="background-image: url('contact-banner.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end">
			 <div style="margin-left:-80px;margin-bottom: 200px;font-size:50px;color:#fff;">
				<div> <span style="color:#003399;font-size:60px;font-weight:600;"> Co</span>ntact Us </div>
				<div style="border:2px solid;width:150px;margin-top:-20px;margin-left:5px;border-radius:30px;color:#003399;"> </div>
			</div>
			
			</div>
			<svg style="margin-bottom:-1px;" class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  			<path fill="#fff" fill-opacity="1" d="M0,160L80,170.7C160,181,320,203,480,186.7C640,171,800,117,960,106.7C1120,96,1280,128,1360,144L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
			</svg>
		</div>
	</section> -->
    <!--================Home Banner Area =================-->

    <section class="hero sectionb">
        <div class="overlayb"></div>
    </section>
    <section class="contentb">
        <div class="custom-shape-divider-bottom-1625909641">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
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
    <div class="container">
        <div class="row" style="margin-top:-270px;">
            <div style="margin-left: -50px;margin-bottom: 170px;font-size:50px;color:#fff;">
                <div style="text-shadow: 2px 2px 4px white;"> <span style="color: #961414;font-size:60px;font-weight:600;">A</span>bout us</div>
            </div>
        </div>
    </div>
    </div>
    <!--================End Home Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row h_blog_item">
                <div class="col-lg-6">
                    <div class="h_blog_img">
                        <img class="img-fluid" src="img/about.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="h_blog_text">
                        <div class="h_blog_text_inner left right" style="border-color:#002347;">
                            <h4>Welcome to our Institute</h4>
                            <p>
                                Subdue whales void god which living don't midst lesser yielding over lights whose.
                                Cattle greater brought sixth fly den dry good tree isn't seed stars were.
                            </p>
                            <p>
                                Subdue whales void god which living don't midst lesser yieldi over lights whose. Cattle
                                greater brought sixth fly den dry good tree isn't seed stars were the boring.
                            </p>
                            <a class="primary-btn a3" href="index">
                                Learn More <i class="ti-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Area =================-->
    <div class="container-fluid" style="margin-top:-100px; padding-right: 136px;padding-left: 136px;">
        <div class="row">
            <div class="headline" style="margin-bottom: 60px;">
                <div class="header-wrapper">
                    <div class="left match-height" style="height: 254px;">
                        <div class="title1">
                            <h1>A Power for Good</h1>
                            <div class="share no-margin-top text-center">
                            </div>
                            <p>We believe that free education, more than anything, has the power to break through
                                boundaries
                                and transform lives.</p>
                            <p>Alison is one of the world’s largest free learning platforms for education and skills
                                training. It is a for-profit social enterprise dedicated to making it possible for
                                anyone,
                                to study anything, anywhere, at any time, for free online, at any subject level. Through
                                our
                                mission we are a catalyst for positive social change, creating opportunity, prosperity,
                                and
                                equality for everyone.</p>
                        </div>
                    </div>
                    <div class="right match-height" style="height: 254px;">
                        <img class="desktop" src="img/our.png" alt="Our Story" style="height:255px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top title-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3 text-white">Awesome Feature</h2>
                        <p>
                            Replenish man have thing gathering lights yielding shall you
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-student"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Scholarship Facility</h4>
                            <p>
                                One make creepeth, man bearing theira firmament won't great heaven
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-book"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Sell Online Course</h4>
                            <p>
                                One make creepeth, man bearing theira firmament won't great heaven
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-earth"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Global Certification</h4>
                            <p>
                                One make creepeth, man bearing theira firmament won't great heaven
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->
    <div class="container-fluid">
        <div class="row aboutsl">
            <div class="col-md-6" style="padding-right: 3rem !important;color:white;padding-top:30px;">
                <!-- <div class="col-md-6 heading-section pr-md-5 d-flex align-items-center"> -->
                <div class="w-100 mb-4 mb-md-0">
                    <span class="subheading">Welcome to PathOfSkill</span>
                    <h2 class="mb-4">We Are PathOfSkill An Online Learning Center</h2>
                    <p>The PathOfSkill Learning provides the tools and content to educate people about human
                        education, business, art, graphics, science, self development and many more and knowledge.
                        Taking online courses can decrease costs for learners by eliminating commutes to
                        campus, campus fees, room and board expenses. </p>
                    <p>Online instruction allows learners to have a flexible schedule while taking Flexibility and
                        convenience of online learning courses options allow learners to work course assignments
                        from any location.</p>

                </div>

            </div>
            <div class="col-md-6">
                <div class='wrapper12'>
                    <div class='carousel12'>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <img src="img/a7.png" style="height:55px;">

                            </div>
                            <div class='carousel__item-body'>
                                <p class='title'>Experianced Tutor</p>
                                <p>By connecting learners to the best Tutor, we provide best learning experiance.</p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <img src="img/a6.png" style="height:55px;">

                            </div>
                            <div class='carousel__item-body'>
                                <p class='title'>Question-answer with tutor</p>
                                <p>Learner is allow to ask any question related to Course.</p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <img src="img/a5.png" style="height:55px;">

                            </div>
                            <div class='carousel__item-body'>
                                <p class='title'>Highly Skilled Tutor</p>
                                <p>All the tutors are well educated and having complete degree to their respective
                                    course.</p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <img src="img/a4.png" style="height:55px;">

                            </div>
                            <div class='carousel__item-body'>
                                <p class='title'>Class & Quiz</p>
                                <p>We are going to provide quiz for all courses.</p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <img src="img/a1.png" style="height:55px;">

                            </div>
                            <div class='carousel__item-body'>
                                <p class='title'>Get Certified</p>
                                <p>We provide certificate after completion of course and can achive their goals and
                                    dreams.
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <img src="img/a3.png" style="height:55px;">

                            </div>
                            <div class='carousel__item-body'>
                                <p class='title'>Top Quality Content</p>
                                <p>Our vision at PathOfSkill is to provide best quality of courses.</p>
                            </div>
                        </div>
                        <div class='carousel__item'>
                            <div class='carousel__item-head'>
                                <img src="img/a8.png" style="height:55px;">

                            </div>
                            <div class='carousel__item-body'>
                                <p class='title'>Low course fees</p>
                                <p>Our main vision is to provide much with less.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

require_once "script.php";
require_once "footer.php";

?>