<?php
      require_once "connection.php";
      $_SESSION['page']='contactus';
    require_once "header.php";
  require_once "stickymenu.php";


  ?>
<?php
   
  if(isset($_REQUEST['cbtn']))
  {
    $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $contact=$_REQUEST['contact'];
   $subject=$_REQUEST['subject'];
   $message=$_REQUEST['message'];
   $in=$con->query("insert into contactus values('$name','$email',$contact,'$subject','$message')");
  }
  ?>

<style>
.cbtn {
    display: inline-block;
    background: #a51f1f;
    padding: 0px 48px;
    color: #ffffff;
    font-size: 13px;
    font-weight: 500;
    line-height: 50px;
    border: none;
    border-radius: 5px;
    outline: none !important;
    text-align: center;
    text-transform: uppercase;
    cursor: pointer;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.cbtn:hover {
    background: #640101;
    color: #fff;
    border: none;
}

.map {
    width: 100%;
    height: 450px;
    border: none;
    border-radius: 10px;
}

.plink,
.plink:hover,
.plink:visited,
.plink:active {
    color: #fff;
    font-size: 17px;
    text-decoration: none;
    margin: 15px 0;
}

.intro {
    position: relative;
    height: auto;
    transform: translateZ(0);
    background-image: linear-gradient(35deg, #8DD9FF, #FFDA00);
}

.intro img {
    position: relative;
    display: block;
    width: 100%;
    height: auto;
    z-index: 1;
    mix-blend-mode: multiply;
}

.intro .caption {
    position: absolute;
    bottom: 25%;
    left: 0;
    width: 100%;
    text-align: center;
    z-index: 3;
    color: white;
}

.intro .caption h1 {
    display: inline-block;
    width: 70%;
    font-size: 6vw;
    font-weight: 100;
}

.intro .overlay1 {
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.intro .overlay1 svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.copy {
    width: 100%;
    max-width: 60rem;
    height: 200%;
    margin: 0 auto;
    padding: 10vw 5vw 0 5vw;
    color: #476d80;
    font-weight: 300;
}

.copy p {
    margin-bottom: 1.5rem;
}

.copy .teaser {
    font-size: 1.6rem;
    text-align: center;
}

/* banner */
.sectionb {
    width: 100%;
}

section.hero {
    height: 585px;
    content: '';
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(banner/b3.jpg);
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

.custom-shape-divider-bottom-1625907333 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-bottom-1625907333 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 143px;
}

.custom-shape-divider-bottom-1625907333 .shape-fill {
    fill: #FFFFFF;
}
</style>

<body>


    <section class="hero sectionb">
        <div class="overlayb"></div>
    </section>
    <section class="contentb">
        <div class="custom-shape-divider-bottom-1625907333">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <div class="container">
        <div class="row" style="margin-top:-270px;">
        <div style="margin-left: -50px;margin-bottom: 170px;font-size:50px;color:#fff;">
                <div style="text-shadow: 2px 2px 4px white;"> <span style="color: #961414;font-size:60px;font-weight:600;">C</span>ontact us</div>
            </div>
        </div>
    </div>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.901299682884!2d72.82209510047862!3d21.23576213581738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f759203d60b%3A0x812052ab7006337c!2sAvalon%20The%20Commercial%20Hub!5e0!3m2!1sen!2sin!4v1614256233355!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="row" style="margin-top:60px;">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="ti-home"></i>
                            <h6>SURAT,INDIA</h6>
                            <p>Santa monica bullevard</p>
                        </div>
                        <div class="info_item">
                            <i class="ti-headphone"></i>
                            <h6><a href="#">6354697128</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="ti-email"></i>
                            <h6><a href="#">pathofskill@gmail.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter your name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                    required="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter email address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    required="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact"
                                    placeholder="Enter Contact number" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Contact number'" required="" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Enter Subject"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                    required="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="1" placeholder="Enter Message"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                    required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="cbtn" name="cbtn">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <?php
        require_once "footer.php";
    ?>
    <!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p>Something went wrong</p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
<script>
function inViewport($el) {
    var H = $(window).height(),
        r = $el[0].getBoundingClientRect(),
        t = r.top,
        b = r.bottom;
    return Math.max(0, t > 0 ? H - t : (b < H ? b : H));
}
</script>