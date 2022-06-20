<style>
.snip1241 {
  font-family: 'Raleway', Arial, sans-serif;
  text-align: center;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
}
.snip1241 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.snip1241 li {
  display: inline-block;
  list-style: outside none none;
  margin: 0.5em 1em;
  padding: 0;
}
.snip1241 a {
  padding: 0.5em 0.8em;
    color: rgb(139 7 7);
  position: relative;
  text-decoration: none;
}
.snip1241 a:before,
.snip1241 a:after {
  height: 14px;
  width: 14px;
  position: absolute;
  content: '';
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
  opacity: 0;
}
.snip1241 a:before {
  right: 0;
  top: 0;
  border-right: 3px solid  #801725;
  border-top: 3px solid  #801725;
  -webkit-transform: translate(-100%, 50%);
  transform: translate(-100%, 50%);
}
.snip1241 a:after {
  left: 0;
  bottom: 0;
  border-left: 3px solid  #cc0000;
  border-bottom: 3px solid   #cc0000;
  -webkit-transform: translate(100%, -50%);
  transform: translate(100%, -50%);
}
.snip1241 a:hover,
.snip1241 .current a {
  color: #080808;
}
.snip1241 a:hover:before,
.snip1241 .current a:before,
.snip1241 a:hover:after,
.snip1241 .current a:after {
  -webkit-transform: translate(0%, 0%);
  transform: translate(0%, 0%);
  opacity: 1;
}
/* Demo purposes only */

</style>
<header class="header_area">
<div class="main_menu" style="
    height: 95px;
">
        <div class="search_input" id="search_input_box" style="display: none;">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid" style="
    height: 95px;
">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html">
                    <img class="logo-2" src="online-cource.png" alt="" height="80px" width="80px" !important="" style="
    margin-top: -34px;
"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto snip1241" style="float: right;">
                        <li class="nav-item active">
                            <a class="" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="about-us.html">About</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu snip1241">
                                <li class="nav-item">
                                    <a class="" href="courses.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="course-details.html">Course Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="elements.html">Elements</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu snip1241">
                                <li class="nav-item">
                                    <a class="" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="single-blog.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="" href="contact.html">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                                                                <a href="#" class="nav-linsearch" id="search">
                                                                    <i class="ti-search"></i>
                                                                </a>
                                                                </li> -->
                    </ul>
                </div>
            </div> <!-- Brand and toggle get grouped for better mobile display -->

        </nav>
    </div>
    </header>