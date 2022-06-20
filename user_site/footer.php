<?php
require_once "connection.php";
require_once "header.php";
// $_SESSION['page']='tutor';
?>
<?php
  require_once "script.php";
?>

<style>
.a1 {
    color: #ffffff !important;
    background-color: #7f0404 !important;
}

.a1:hover {
    color: #ffffff !important;
    background-color: #e40707 !important;
}

.a3 {
    color: #ffffff !important;
    background-color: #e40707 !important;
}

.a3:hover {
    color: #ffffff !important;
    background-color: #7f0404 !important;
}

.a2 {
    color: #e40707 !important;

}

.a2:hover {
    color: #7f0404 !important;

}
</style>
<body oncontextmenu="return false;">
<img src="img/cfooterfinal.jpg" style=" width: 100%;">
<footer class="footer-area section_gap" style="line-height: 35px;
    word-spacing: 0.2px;
    letter-spacing: 0.2px;
    height:600px;
    color: #f9f8f8;    background: #0c0c0c;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>Get in touch</h4>
                <a href="mailto:pathofskill@gmail.com" style="color:#fff;text-decoration:none;"><div><i class=" fa fa-envelope-o icon-footer "
                        style="color:#f20404; margin-right:10px;"></i>pathofskill@gmail.com</div></a>
                <div><i class=" fa fa-volume-control-phone  icon-footer " style="color:#f20404; margin-right:10px;"></i>
                <!-- tel html nu built in function che je call karanu facility provide kre -->
                <a href="tel:6354697128" style="color:#fff;text-decoration:none;">
                    +91 6354697128</a></div>
                <div><i class="fa fa-address-book-o icon-footer " style="color:#f20404; margin-right:10px;"></i>
                    253,mohandeep society,ambatalavadi,<br>katargam,surat-395004</div>

            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="career">Career</a></li>
                    <li><a href="help_support">Help & Support</a></li>
                    <li><a href="about-us">About us</a></li>
                    <li><a href="contact">Contact us</a></li>
                    <!-- <li><a href="blog.php">Blog</a></li> -->
                </ul>
            </div>


            <div class="col-lg-4 col-md-6 single-footer-widget">
                <h4>Newsletter</h4>
                <p>Our main goal is to ready a good expert. You can trust us. we only send promo offers,Our main goal is
                    to ready a good expert. You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form method="post" class="form-inline">
                        <input class="form-control" style="background: #f2f0f0;color:black;" name="email"
                            placeholder="Your Email Address" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Your Email Address'" required="" type="email">
                        <button type="submit" name="subscribe" class="click-btn btn btn-default a3"
                            style="background: #fd1010;color: #0c0c0c;">
                            <span>subscribe</span>
                        </button>
                        <?php
            
                ?>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>See where we are</h4>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.901299682884!2d72.82209510047862!3d21.23576213581738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f759203d60b%3A0x812052ab7006337c!2sAvalon%20The%20Commercial%20Hub!5e0!3m2!1sen!2sin!4v1614256233355!5m2!1sen!2sin"
                        width="300" height="300" style="border: 2px solid red;border-radius: 15px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>

            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            
            <div class="col-lg-8 col-sm-12 footer-social"
                style="margin-left: 1%;margin-top: -10%;    text-align: left;">
                <a class="a1" href="mailto:pathofskill@gmail.com" style="background: #7f0404;"><i class="ti-google"></i></a>
                <a class="a1" href="https://www.facebook.com/Pathofskill-111522734316982/" style="background: #7f0404;"><i class="ti-facebook"></i></a>
                <a class="a1" href="https://www.instagram.com/pathofskill/" style="background: #7f0404;"><i class="ti-instagram"></i></a>
                <!-- <a class="a1" href="#" style="background: #7f0404;"><i class="ti-linkedin"></i></a> -->
                <!-- api purchase kreli hoi and je number aapelo hoi ena per chat thashe. -->
                <a href="https://wa.me/+919265609414" target="_blank"
    style="display: table; font-family: gudea; text-decoration: none;float:right;margin-right:60px; color: #fff; font-size: 0.9em; padding: 1em 2em 1em 3.5em; border-radius: 2em; font-weight: bold; background: #25d366 url('https://tochat.be/click-to-chat-directory/css/whatsapp.svg') no-repeat 1.5em center; background-size: 1.6em;">Whatsapp</a>
            </div>
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white" style="margin-left: 30% !important;">
                Copyright ©<script>
                document.write(new Date().getFullYear());
                </script>2021 All rights reserved by <b class="a2" style="color:#f20404;">pathofskill</b>.
            </p>
        </div>
    </div>
</footer>
</body>