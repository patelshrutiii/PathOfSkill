<?php
  require_once "connection.php";

  require_once "header.php";
  $_SESSION['page']='tutor';
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
        background: linear-gradient(rgb(11 0 0 / 42%), rgb(0 0 9 / 50%)), url(img/bg_4.jpg) no-repeat center;
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
    /* become instructor */
    .ftco-intro .img12 {
        padding: 3em;
        position: relative;
        z-index: 0;
        overflow: hidden;
    }

    .img12 {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    /* ================== */
    .instructor-data {
        margin-left: 120px;
    }

    .instructor-header {
        margin-top: 30px;
        margin-left: 37%;
    }

    .con {
        color: #000;
    }

    div.b {
        width: 100%;
        height: 600px;
        background: linear-gradient(to bottom right, #f7f7f7, #eafbff);
        -ms-transform: skewY(-15deg);
        /* IE 9 */
        transform: skewY(-15deg);
        margin-top: 100px;
    }

    .tutor-mission {
        margin: 30px;
        padding: 50px;
        margin-left: 40px;
        box-shadow: 0 1px 20px 0 rgb(46 61 73 / 20%);
        background: linear-gradient(to bottom right, #9d1313, #1d1919);
        color: #fff;
        border-radius: 5px;
    }

    .tutor-overlay2 {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .6;
        /* background: linear-gradient(135deg, #003399 0%, #009999 100%); */
        background: linear-gradient(135deg, #990000 0%, #67afaf 100%);
        z-index: -1;
    }

    .tutor-link {
        width: 900px;
        background-color: #fff;
        margin-left: 222px;
        box-shadow: 0 1px 20px 0 rgb(46 61 73 / 20%);
        border-radius: 5px;
        padding: 30px;
    }

    .tutor-header {
        color: #000;
        font-size: 20px;
        margin-bottom: 30px;
    }

    .tutor-btn1 {
        /* border:1px solid; */
        box-shadow: 8px 10px 20px 0 rgb(46 61 73 / 15%);
        background-color: #017a9b;
        padding: 10px;
        border-radius: 5px;
        color: #fff;
    }
    </style>
    <!-- tutor-card -->

    <style>
    /* Carousel */
    .about-us-service-title {
        text-align: center;
    }

    .carousel5 {
        width: 100%;
        overflow-y: hidden;
        padding: 30px;
        position: relative;
        box-sizing: border-box;
    }

    .carousel5__container {
        white-space: nowrap;
        margin: 20px 0px;
        padding-bottom: 10px;
    }

    .carousel5-item {
        background-color: #caa5f1;
        width: 200px;
        height: 250px;
        border-radius: 20px;
        overflow: hidden;
        margin-right: 10px;
        display: inline-block;
        cursor: pointer;
        transition: 450ms all;
        transform-origin: center left;
        position: relative;
    }

    .carousel5-item:hover~.carousel5-item {
        transform: translate3d(50px, 0, 0);
    }

    .carousel5__container:hover .carousel5-item {
        opacity: 0.3;
    }

    .carousel5__container:hover .carousel5-item:hover {
        transform: scale(1.3);
        opacity: 1;
    }

    .carousel5-item__img {
        width: 200px;
        height: 250px;
        object-fit: cover;
    }

    .carousel5-item__details {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 100%);
        font-size: 10px;
        color: white;
        opacity: 0;
        transition: 450ms opacity;
        padding: 10px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        text-align: center;
        white-space: normal;
        display: flex;
        flex-flow: row wrap;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
    }

    .carousel5-item__details:hover {
        opacity: 1;
    }

    .carousel5-item__details--title {
        font-size: 20px;
        font-weight: 500;
    }

    .carousel5-item__details--subtitle {}

    .carousel5-item__details--icons {
        color: #caa5f1;
    }

    .carousel5::-webkit-scrollbar {
        height: 5px;
    }

    .carousel5::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .carousel5::-webkit-scrollbar-track-piece {
        max-width: 100px;
    }

    .carousel5::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        background-color: gray;
    }

    #far-left {
        left: 15%;
        transform: scale(.9) translateY(0%) translateX(-50%);
        z-index: 5;
        /* background-color: #F0F0F0; */
        background-image: linear-gradient(#99bbff, #33ffff);
    }

    #left {
        left: 30%;
        transform: scale(1) translateY(0%) translateX(-50%);
        z-index: 10;
        /* background-color: #C3C3C3; */
        background-image: linear-gradient(#0055ff, #00e6e6);
    }

    #center {
        left: 50%;
        transform: scale(1.05) translateY(0%) translateX(-50%);
        z-index: 15;
    }

    #right {
        left: 70%;
        transform: scale(1) translateY(0%) translateX(-50%);
        z-index: 10;
        /* background-color: #C3C3C3; */
        background-image: linear-gradient(#0055ff, #00e6e6);
    }

    #far-right {
        left: 80%;
        transform: scale(.9) translateY(0%) translateX(-50%);
        z-index: 5;
        /* background-color: #F0F0F0; */
        background-image: linear-gradient(#99bbff, #33ffff);
    }
    </style>

    <!-- scroll style -->
    <style>
    /* html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  background-color: #eee;
  font-family: "Raleway";
} */

    ul,
    li {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .icon {
        position: relative;
        width: 32px;
        height: 32px;
        display: block;
        fill: rgba(51, 51, 51, 0.5);
        margin-right: 20px;
        transition: all 0.2s ease-out;
    }

    .icon.active {
        fill: #E74C3C;
    }

    .icon.big {
        width: 64px;
        height: 64px;
        fill: rgba(51, 51, 51, 0.5);
    }

    #wrapper {
        width: 1000px;
        height: 400px;
        position: relative;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        background-color: #fff;
        /* box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24); */
        display: flex;
        align-items: center;
        justify-content: left;
        overflow: hidden;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    #left-side {
        height: 70%;
        width: 25%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #left-side ul li {
        padding-top: 10px;
        padding-bottom: 10px;
        display: flex;
        line-height: 34px;
        color: rgba(51, 51, 51, 0.5);
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease-out;
    }

    #left-side ul li:hover {
        color: #333333;
        transition: all 0.2s ease-out;
    }

    #left-side ul li:hover>.icon {
        fill: #333;
    }

    #left-side ul li.active {
        color: #333333;
    }

    #left-side ul li.active:hover>.icon {
        fill: #E74C3C;
    }

    #border {
        height: 288px;
        width: 1px;
        background-color: rgba(51, 51, 51, 0.2);
    }

    #border #line.one {
        width: 5px;
        height: 54px;
        background-color: #E74C3C;
        margin-left: -2px;
        margin-top: 35px;
        transition: all 0.4s ease-in-out;
    }

    #border #line.two {
        width: 5px;
        height: 54px;
        background-color: #E74C3C;
        margin-left: -2px;
        margin-top: 89px;
        transition: all 0.4s ease-in-out;
    }

    #border #line.three {
        width: 5px;
        height: 54px;
        background-color: #E74C3C;
        margin-left: -2px;
        margin-top: 143px;
        transition: all 0.4s ease-in-out;
    }

    #border #line.four {
        width: 5px;
        height: 54px;
        background-color: #E74C3C;
        margin-left: -2px;
        margin-top: 197px;
        transition: all 0.4s ease-in-out;
    }

    #right-side {
        height: 300px;
        width: 75%;
        overflow: hidden;
    }

    #right-side #first,
    #right-side #second,
    #right-side #third,
    #right-side #fourth {
        position: absolute;
        height: 300px;
        width: 75%;
        transition: all 0.6s ease-in-out;
        margin-top: -350px;
        opacity: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    #right-side #first h1,
    #right-side #second h1,
    #right-side #third h1,
    #right-side #fourth h1 {
        font-weight: 800;
        color: #333;
    }

    #right-side #first p,
    #right-side #second p,
    #right-side #third p,
    #right-side #fourth p {
        color: #333;
        font-weight: 500;
        padding-left: 30px;
        padding-right: 30px;
    }

    #right-side #first.active,
    #right-side #second.active,
    #right-side #third.active,
    #right-side #fourth.active {
        margin-top: 0px;
        opacity: 1;
        transition: all 0.6s ease-in-out;
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
        <svg class="svgb" width="3" height="3" preserveAspectRatio="none" viewBox="0 0 3 3"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0l1.5 2 1.5-2v3h-3v-3z" fill="#fff" />
        </svg>
    </section>
    <div class="container">
        <div class="row" style="margin-top:-270px;">
            <div style="margin-left: -50px;margin-bottom: 170px;font-size:50px;color:#fff;">
                <div style="
    text-shadow: 2px 2px 4px white;
"> <span style="color: #961414;font-size:60px;font-weight:600;">I</span>nstructor</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="instructor-header">
                <h3> Why Become an Instructor? </h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div><img src="images/piggybank.png" width="80px" class="instructor-data" /> </div>
                        <div align="center" class="con"> Earn Money </div>
                        <div align="center" class="con"> Earn money every time a student purchases your course. Get paid
                            monthly
                            through PayPal or Payoneer, it’s your choice. </div>
                    </div>
                    <div class="col-md-4">
                        <div><img src="images/playbutton.png" width="80px" class="instructor-data" /> </div>
                        <div align="center" class="con"> Inspire students </div>
                        <div align="center" class="con"> Help people learn new skills, advance their careers, and
                            explore their
                            hobbies by sharing your knowledge. </div>
                    </div>
                    <div class="col-md-4">
                        <div><img src="images/likeicon.png" width="80px" class="instructor-data" /> </div>
                        <div align="center" class="con"> Join our community </div>
                        <div align="center" class="con"> Take advantage of our active community of instructors to help
                            you
                            through your course creation process.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- <h2>transform: skewY(20deg):</h2> -->
    <div class="b"></div>
    <div class="container">
        <div class="row" style="margin-top:-600px;">
            <div class="col-md-6">
                <div>
                    <span> <img src="img/t1.jpg" width="260px;" height="290px;" style="border-radius:8px;">
                    </span>
                    <span> <img src="img/t5.jpeg" width="260px;" height="290px;"
                            style="margin-top: -370px;margin-bottom:30px;background-size: cover;margin-left: 272px;border-radius:8px;">
                    </span>
                </div>
                <div>
                    <span> <img src="img/t6.jpeg" width="260px;" height="290px;"
                            style="margin-top: -9px;border-radius:8px;background-size: cover;"> </span>
                    <span> <img src="img/t8.jpeg" width="260px;" height="290px;"
                            style="margin-top: -397px;margin-left: 272px;border-radius:8px;"> </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tutor-mission">
                    <div>
                        <h3 style="color:#fff;">Who Instructors Are?</h3> <br>
                        The PathOfSkill Learning provides the tools and content to educate people about human education,
                        business, art, graphics, science, self development and many more and knowledge. Taking online
                        courses can decrease costs for learners by eliminating commutes to campus, campus fees, room and
                        board expenses.Online instruction allows learners to have a flexible schedule while taking
                        Flexibility.
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row" style="margin-top:-600px;">
            <div class="col-md-6">
                <div>
                    <span> <img src="images/teacher-9.jpg" width="260px;" height="290px;" style="border-radius:8px;" />
                    </span>
                    <span> <img src="images/teacher-6.jpg" width="260px;" height="290px;"
                            style="margin-top:-50px;margin-bottom:30px;;margin-left:10px;border-radius:8px;" /> </span>
                </div>
                <div>
                    <span> <img src="images/tutor2.jpg" width="260px;" height="290px;"
                            style="margin-top:10px;border-radius:8px;" /> </span>
                    <span> <img src="images/tutor6.jpg" width="260px;" height="290px;"
                            style="margin-top:-65px;margin-left:10px;border-radius:8px;" /> </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tutor-mission">
                    <div>
                        <h3 style="color:#fff;">Who Instructors Are?</h3> <br>
                        The Dreamlane Learning provides the tools and content to educate people about human education,
                        business, art, graphics, science, self development and many more and knowledge. Taking online
                        courses can decrease costs for learners by eliminating commutes to campus, campus fees, room and
                        board expenses.Online instruction allows learners to have a flexible schedule while taking
                        Flexibility.
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- scroll bar -->
    <div class="container">
        <div class="row">
            <div id="wrapper">
                <div id="left-side">
                    <ul>
                        <li class="choose active">
                            <div class="icon">
                                <div id="shopping-cart"> <img src="images/pointicon1.png" width="30px"
                                        style="margin-left:6px;"> </img>
                                </div>
                            </div>
                            Plan Your Course
                        </li>
                        <li class="pay">
                            <div class="icon">
                                <div id="shopping-cart"> <img src="images/videoicon.png" width="30px"
                                        style="margin-left:6px;"> </img>
                                </div>
                                <!-- <svg viewBox="0 0 32 32">
            <g filter="">
              <use xlink:href="#credit-card"></use>
            </g>
          </svg> -->
                            </div>
                            Record Your Video
                        </li>
                        <li class="wrap">
                            <div class="icon">
                                <div id="shopping-cart"> <img src="images/commenticon1.png" width="40px"> </img>
                                </div>
                                <!-- <svg viewBox="0 0 32 32">
            <g filter="">
              <use xlink:href="#gift"></use>
            </g>
          </svg> -->
                            </div>
                            Build Your Community
                        </li>
                        <li class="ship">
                            <div class="icon">
                                <div id="shopping-cart"> <img src="images/gcap1.png" width="50px"> </img>
                                </div>
                                <!-- <svg viewBox="0 0 32 32">
            <g filter="">
              <use xlink:href="#package"></use>
            </g>
          </svg> -->
                            </div>
                            Post Launch
                        </li>
                    </ul>
                </div>

                <div id="border">
                    <div id="line" class="one"></div>
                </div>

                <div id="right-side">
                    <div id="first" class="active">
                        <div class="icon big">
                            <div> <img src="images/pointicon1.png" width="60px"> </img> </div>
                            <!-- <i class="ti-user"> </i> -->
                            <!-- <svg viewBox="0 0 32 32">
          <g filter="">
            <use xlink:href="#shopping-cart"></use>
          </g>
        </svg> -->
                        </div>

                        <h1>Plan Your Course</h1>
                        <h5>Get organized</h5>

                        <p>You start with your passion and knowledge. Then choose a topic and plan your lectures in
                            Google Docs, Microsoft Excel, or your favorite notebook.You get to teach the way you want —
                            even create courses in multiple languages and inspire more users.</p>
                    </div>
                    <div id="second">
                        <div class="icon big">
                            <div> <img src="images/videoicon.png" width="60px"> </img> </div>
                            <!-- <svg viewBox="0 0 32 32">
          <g filter="">
            <use xlink:href="#credit-card"></use>
          </g>
        </svg> -->
                        </div>

                        <h1>Record Your Video</h1>
                        <h5> Lights, camera, action </h5>
                        <p>Got a smartphone or a DSLR? Add a microphone and you’re ready to record your first course
                            from your home or wherever you happen to be.
                            Camera shy? No Worries. Use screencasting software, like Camtasia, to screencast demos. </p>
                    </div>
                    <div id="third">
                        <div class="icon big">
                            <div> <img src="images/commenticon1.png" width="80px"> </img> </div>
                            <!-- <svg viewBox="0 0 32 32">
          <g filter="">
            <use xlink:href="#gift"></use>
          </g>
        </svg> -->
                        </div>

                        <h1>Build Your Community</h1>
                        <h5>Reach out</h5>

                        <p>Create quizzes, exercises, and assignments to build interactivity. Write welcome messages for
                            your Users and answer their questions.</p>

                    </div>
                    <div id="fourth">
                        <div class="icon big">
                            <div> <img src="images/gcap1.png" width="120px"> </img> </div>
                            <!-- <svg viewBox="0 0 32 32">
          <g filter="">
            <use xlink:href="#package"></use>
          </g>
        </svg> -->
                        </div>

                        <h1>Post Launch</h1>

                        <p>After Your course is live, PathOfSkill mentors will answer user questions and video reviewers
                            will grade users projects. You may be contacted for ad-hoc content maintenance as needed.
                        </p>

                    </div>
                </div>
            </div>
        </div>



        <section class="carousel5">
            <div class="carousel5__container">

                <?php
            $tinfo=$con->query("select *from tutor");
            while($tinfodata=mysqli_fetch_array($tinfo))
            {
        ?>

                <div class="carousel5-item">
                    <img class="carousel5-item__img" src="tutor_site\<?php echo $tinfodata[6];?>" alt="People">
                    <div class="carousel5-item__details">
                        <p class="carousel5-item__details--title"><?php echo $tinfodata[1]." ".$tinfodata[2]; ?></p>
                        <p class="carousel5-item__details--subtitle"><?php echo $tinfodata[8]; ?></p>
                        <p>
                            <?php echo $tinfodata[9];?>

                        </p>
                    </div>
                </div>
                <?php
        }
        ?>

            </div>
        </section>
    </div>
    <section class="ftco-intro ftco-section ftco-no-pb" style="margin-top:100px;">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <div class="img12" style="background-image: url(img/bg_4.jpg);">
                        <div class="tutor-overlay2 "></div>
                        <div class="tutor-link">
                            <div class="tutor-header">Train The Next Generation Of Tech Learners As A PathOfSkill
                                Instructor</div>
                            <p class="mb-0"><a href="tutor_site/index" class="tutor-btn1" style="color:#fff;">Become
                                    an
                                    Instructor</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once "footer.php";
?>
</body>

</html>


<script>
let headerElem = document.querySelector('.headerb'),
    heroElem = document.querySelector('.hero'),
    svgElem = document.querySelector('.svgb')

let headerHeight = parseFloat(getComputedStyle(headerElem, null).height),
    heroHeight = parseFloat(getComputedStyle(heroElem, null).height),
    svgHeight = parseFloat(getComputedStyle(svgElem, null).height)

let scrollHeight = heroHeight - headerHeight,
    prevScroll = null

const setHeight = function() {

    let scrollTop = window.scrollY

    if (prevScroll !== scrollTop && scrollTop <= scrollHeight) {

        prevScroll = scrollTop

        let newHeight = ((scrollHeight - scrollTop) / heroHeight) * svgHeight

        svgElem.style.transform = `scaleY(${ newHeight / 100 })`

    }

    requestAnimationFrame(setHeight)

}

requestAnimationFrame(setHeight)
</script>
<script>
(function() {
    'use strict';
    var options = ['far-left', 'left', 'center', 'right', 'far-right'];
    var cards = document.querySelectorAll('.carousel-card');
    addCardListeners();

    function addCardListeners() {
        for (var i = 0; i < cards.length; i++) {
            var card = cards[i];
            card.addEventListener('click', cardEventListener);

        }
    }

    function cardEventListener(e) {
        var parent = getParents(e.target, '.carousel-card')[0];
        var parentIndex = options.indexOf(parent.id);

        cards.forEach(function(card) {
            var index = options.indexOf(card.id);
            if (parentIndex > 2) {
                var previousIndex = index - 1 < 0 ? cards.length - 1 : index - 1;
                card.id = options[previousIndex];
            } else if (parentIndex < 2) {
                var nextIndex = index + 1 > cards.length - 1 ? 0 : index + 1;
                card.id = options[nextIndex];
            }
        });
    }
    //   tutor-card-script
    function getParents(elem, selector) {
        // Element.matches() polyfill
        if (!Element.prototype.matches) {
            Element.prototype.matches =
                Element.prototype.matchesSelector ||
                Element.prototype.mozMatchesSelector ||
                Element.prototype.msMatchesSelector ||
                Element.prototype.oMatchesSelector ||
                Element.prototype.webkitMatchesSelector ||
                function(s) {
                    var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                        i = matches.length;
                    while (--i >= 0 && matches.item(i) !== this) {}
                    return i > -1;
                };
        }

        // Setup parents array
        var parents = [];

        // Get matching parent elements
        for (; elem && elem !== document; elem = elem.parentNode) {

            // Add matching parents to array
            if (selector) {
                if (elem.matches(selector)) {
                    parents.push(elem);
                }
            } else {
                parents.push(elem);
            }
        }

        return parents;
    };
})();
</script>

<!-- scroll script -->
<script>
$(".choose").click(function() {
    $(".choose").addClass("active");
    $(".choose > .icon").addClass("active");
    $(".pay").removeClass("active");
    $(".wrap").removeClass("active");
    $(".ship").removeClass("active");
    $(".pay > .icon").removeClass("active");
    $(".wrap > .icon").removeClass("active");
    $(".ship > .icon").removeClass("active");
    $("#line").addClass("one");
    $("#line").removeClass("two");
    $("#line").removeClass("three");
    $("#line").removeClass("four");
})

$(".pay").click(function() {
    $(".pay").addClass("active");
    $(".pay > .icon").addClass("active");
    $(".choose").removeClass("active");
    $(".wrap").removeClass("active");
    $(".ship").removeClass("active");
    $(".choose > .icon").removeClass("active");
    $(".wrap > .icon").removeClass("active");
    $(".ship > .icon").removeClass("active");
    $("#line").addClass("two");
    $("#line").removeClass("one");
    $("#line").removeClass("three");
    $("#line").removeClass("four");
})

$(".wrap").click(function() {
    $(".wrap").addClass("active");
    $(".wrap > .icon").addClass("active");
    $(".pay").removeClass("active");
    $(".choose").removeClass("active");
    $(".ship").removeClass("active");
    $(".pay > .icon").removeClass("active");
    $(".choose > .icon").removeClass("active");
    $(".ship > .icon").removeClass("active");
    $("#line").addClass("three");
    $("#line").removeClass("two");
    $("#line").removeClass("one");
    $("#line").removeClass("four");
})

$(".ship").click(function() {
    $(".ship").addClass("active");
    $(".ship > .icon").addClass("active");
    $(".pay").removeClass("active");
    $(".wrap").removeClass("active");
    $(".choose").removeClass("active");
    $(".pay > .icon").removeClass("active");
    $(".wrap > .icon").removeClass("active");
    $(".choose > .icon").removeClass("active");
    $("#line").addClass("four");
    $("#line").removeClass("two");
    $("#line").removeClass("three");
    $("#line").removeClass("one");
})

$(".choose").click(function() {
    $("#first").addClass("active");
    $("#second").removeClass("active");
    $("#third").removeClass("active");
    $("#fourth").removeClass("active");
})

$(".pay").click(function() {
    $("#first").removeClass("active");
    $("#second").addClass("active");
    $("#third").removeClass("active");
    $("#fourth").removeClass("active");
})

$(".wrap").click(function() {
    $("#first").removeClass("active");
    $("#second").removeClass("active");
    $("#third").addClass("active");
    $("#fourth").removeClass("active");
})

$(".ship").click(function() {
    $("#first").removeClass("active");
    $("#second").removeClass("active");
    $("#third").removeClass("active");
    $("#fourth").addClass("active");
})

// banner
</script>
<?php
  require_once "script.php";

?>