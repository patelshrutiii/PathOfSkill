<?php
  require_once "connection.php";
  require_once "header.php";
?>
<!--============================================help and support finish====================================== -->

<style>
/* banner */
.sectionb {
    width: 100%;
}

section.hero {
    height: 600px;
    content: '';
    background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(banner/w22.jpg);
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
.custom-shape-divider-bottom-1622204772 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-bottom-1622204772 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 187px;
}

.custom-shape-divider-bottom-1622204772 .shape-fill {
    fill: #FFFFFF;
}
/* end banner */

* {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

#how-it-works #how-it-works-main-wrap #how-it-works-inner-wrap {
    padding-top: 30px;
}

.w2 {
    margin-top: -40px;
    z-index: 10;
    position: relative;
}

.scroll {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    z-index: 20;
}

.mouse_scroll {
    width: 100%;
    margin-top: 25px;
}

.scroll-wrap {
    margin: 0 auto;
    padding-top: 7px;
    background: #b5bec0;
    border-radius: 50%;
    width: 48px;
    height: 48px;
}

.bottom,
.top {
    -webkit-animation: mouse-scroll 1s infinite;
    -moz-animation: mouse-scroll 1s infinite;
}

.m_scroll_arrows {
    display: block;
    transform: rotate(45deg);
    border-right: 2px solid #fff;
    border-bottom: 2px solid #fff;
    margin: 0 auto;
    width: 16px;
    height: 16px;
}

.bottom {
    -webkit-animation-delay: .2s;
    -moz-animation-delay: .2s;
    -webkit-animation-direction: alternate;
    margin-top: -6px;
}

.bottom,
.top {
    -webkit-animation: mouse-scroll 1s infinite;
    -moz-animation: mouse-scroll 1s infinite;
}

.wrapper {
    max-width: 1150px;
    padding: 10px 20px 0;
}

.full-width-wrapper,
.wrapper {
    margin: 0 auto;
    position: relative;
}

#how-it-works #how-it-works-main-wrap {
    background: url(https://cdn01.alison-static.net/public/html/site/img/how-it-works-background.png) center top no-repeat;
    margin-top: -40px;
    z-index: 10;
    position: relative;
}

#how-it-works #how-it-works-main-wrap #how-it-works-inner-wrap {
    padding-top: 30px;
}

.block:nth-child(1),
.block:nth-child(2) {
    margin-top: 50px;
}

.block:nth-child(2) {
    margin-top: 126px;
}

.block:nth-child(3) {
    margin-top: 132px;
}

.block:nth-child(4) {
    margin-top: 123px;
}

.block:nth-child(5) {
    margin-top: 53px;
}

.block:nth-child(6) {
    margin-top: 104px;
    margin-bottom: 50px;
}

.block:nth-child(even),
.block:nth-child(odd) {
    float: left;
}

.block:nth-child(even) {
    float: right;
}

.block {
    width: 47%;
    min-height: 100px;
    box-shadow: 0 0 10px #d8d8d8;
    background-color: #f4f7f8;
    z-index: 10;
    border-radius: 5px;
    margin-left: 0;
}

.hovicon {
    font-size: 20px;
    line-height: 45px;
    width: 45px;
    height: 45px;
    margin: 10px -15px -20px -23px;
    border-radius: 50%;
    text-align: center;
    position: relative;
    text-decoration: none;
    z-index: 1;
    color: #fff;
    background: #fdc100;
    transition: background .2s, color .2s;
}

.hovicon:hover {
    border: 2px solid black;
    background: green;
    transition: background .2s, color .2s;
}

.block-content {
    width: 92%;
}

.block-content {
    position: relative;
    top: -20px;
    left: 35px;
    width: 83%;
    color: #2d3942;
}

p {
    font: 400 .875em Roboto, helvetica neue, Helvetica, Arial, sans-serif;
    line-height: 1.5em;
    margin: 0 0 20px;
    margin-top: 0 px !important;
    margin-bottom: 0px;
}

/* /////////////////////////////////////////////////////////////////////// */
/* 3box */
.help-box {
    box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);
    padding: 10px;
    margin: 20px;
    border-top: 4px solid #02CCBA;
    border-radius: 5px;
}

.help-box1 {
    box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);
    padding: 10px;
    margin: 20px;
    border-top: 4px solid #41C6EB;
    border-radius: 5px;
    color: grey;
}

.help-box3 {
    box-shadow: 5px 5px 25px 0 rgb(46 61 73 / 20%);
    padding: 10px;
    margin: 20px;
    border-top: 4px solid #FFE300;
    border-radius: 5px;
}
.help-box:hover,
.help-box1:hover,
.help-box3:hover
 {
    background: #383838;
    color: white;
}
</style>

<body>
    <?php
    require_once "stickymenu.php";
       ?>
    <header class="headerb"></header>

    <section class="hero sectionb">
        <div class="overlayb"></div>
    </section>
    <section class="contentb">
    <div class="custom-shape-divider-bottom-1622204772">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" class="shape-fill"></path>
    </svg>
</div>
    </section>
    <div class="container">
        <div class="row" style="margin-top:-270px;">
        <div style="margin-left: -50px;margin-bottom: 170px;font-size:50px;color:#fff;">
                <div style="text-shadow: 2px 2px 4px white;"> <span style="color: #961414;font-size:60px;font-weight:600;">H</span>elp & Support</div>
            </div>
        </div>
        </div>
    </div>

    <div class="container" style="margin-top :50px;">
        <div class="row">
            <div class="col-md-4">
                <div class="help-box">
                    <img src="img/h1.png" width="70px" style="margin-left:110px;">
                    <p align="center" style="font-size: 20px;"> Support Community </p>
                    <p align="center" style="margin:30px;">Need help? Come join our <br> community! </p>
                </div>
            </div>
            <div class="col-md-4">
                <!-- <a href="faqs1.php"> -->
                <div class="help-box1">
                    <img src="img/h2.png" width="70px" style="margin-left:110px;">
                    <p align="center" style="font-size :20px;"> FAQs</p>
                    <p align="center" style="margin:28px;">Have any questions? Click on the FAQ categories below!</p>
                </div>
                <!-- </a> -->
            </div>
            <div class="col-md-4">
                <div class="help-box3">
                    <img src="img/h3.png" width="70px" style="margin-left:110px;">
                    <p align="center" style="font-size :20px;"> Carrer</p>
                    <p align="center" style="margin:26px;">Find the best resources for your tech job search </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="scroll">
                <a href="#how-it-works-main-wrap" class="cancel-scroll">
                    <div class="mouse_scroll">
                        <div class="scroll-wrap">
                            <span class="m_scroll_arrows top"></span>
                            <span class="m_scroll_arrows bottom"></span>
                        </div>
                    </div>
                </a>
            </div>
            <section id="how-it-works-main-section" class="wrapper">
                <div id="how-it-works-main-wrap" class="w2">
                    <div id="how-it-works-inner-wrap">
                        <div class="block">
                            <div class="hovicon">1</div>
                            <div class="block-content">
                                <h2>Register your free PathOfSkill account</h2>
                                <p>You can <a
                                        title="Register a free account"> register </a> your PathOfSkill account either using
                                    your
                                    email address, or through a social media account. Registering an account is
                                    completely
                                    free and gives you unlimited access to the PathOfSkill website. Once you’ve registered
                                    your
                                    .</p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="hovicon">2</div>
                            <div class="block-content">
                                <h2>Find the right course</h2>
                                <p>PathOfSkill has over 3,000 courses available, all absolutely free to complete, and new
                                    courses
                                    are added weekly. Check out our <a title="Study Areas"> study areas </a> page to help you understand
                                    the type of learning you want to pursue, or browse our <a title="Course Categories"> course categories </a>to see where your interests
                                    lie. 
                                </p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="hovicon">3</div>
                            <div class="block-content">
                                <h2>Get Enrolled</h2>
                                <p>Once you have found the course or Learning Path you want to study, all you have to do
                                    is
                                    click on the Start Now button to enroll and get learning. All PathOfSkill courses are
                                    self-paced, so you can study whenever you want, wherever you want. Manage your time,
                                    track your learning and see your knowledge grow with our practical <a title="User dashboard">
                                        learner
                                        dashboard</a>.</p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="hovicon">4</div>
                            <div class="block-content">
                                <h2>Become a Graduate</h2>
                                <p>You can take or re-take an assessment on PathOfSkill anytime you want, but we require
                                    scores
                                    of 80% or more to pass. Once you have passed all the assessments on your course, you
                                    are
                                    officially an PathOfSkill graduate!</p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="hovicon">5</div>
                            <div class="block-content">
                                <h2>Acquire your Certification</h2>
                                <p>Once you have completed your course, you can download your <a
                                        title="View your Learner Record"> learner record </a> as proof of your
                                    achievement.
                                    Should you like something more official, you can <a  title="Shop Now!"> purchase your Certificate or Diploma </a>
                                    (depending on the type of course or Learning Path you’ve completed) and we will post
                                    it
                                    to you. We offer free standard shipping worldwide. Your PathOfSkill Certification can be
                                    included with your CV/Resume to share with potential employers, or just to share
                                    your
                                    achievement with the world!</p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="hovicon">6</div>
                            <div class="block-content">
                                <h2>Empowerment</h2>
                                <p>We believe that through education, everyone has the power to change their lives, and
                                    ultimately the world, for the better. Use your new skills and knowledge to improve
                                    how
                                    you work, to get that new job, promotion or college placement, or to start a new
                                    business. Our free learning gives you the freedom to learn and the tools to succeed.
                                    So
                                    why not Empower Yourself and others today!</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
<!--============================================help and support finish====================================== -->

<?php
  require_once "footer.php";

?>