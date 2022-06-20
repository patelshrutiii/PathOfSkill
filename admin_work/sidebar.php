<?php
require_once "connection.php";
require_once "head.php";

?>
<style>


body {
    font-size: 0.9rem;
}


/*----------------toggeled sidebar----------------*/

.page-wrapper.toggled .sidebar-wrapper {
    left: 0px;
}

@media screen and (min-width: 768px) {
    .page-wrapper.toggled .page-content {
        padding-left: 300px;
    }
}

/*----------------show sidebar button----------------*/
#show-sidebar {
    position: fixed;
    left: 0;
    top: 10px;
    border-radius: 0 4px 4px 0px;
    width: 35px;
    transition-delay: 0.3s;
}

.page-wrapper.toggled #show-sidebar {
    left: -40px;
}

/*----------------sidebar-wrapper----------------*/

.sidebar-wrapper {
    width: 260px;
    height: 100%;
    max-height: 100%;
    position: fixed;
    top: 0;
    left: -300px;
    z-index: 999;
}

.sidebar-wrapper ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.sidebar-wrapper a {
    text-decoration: none;
}

/*----------------sidebar-content----------------*/

.sidebar-content {
    max-height: calc(100% - 30px);
    height: calc(100% - 30px);
    overflow-y: auto;
    position: relative;
}

.sidebar-content.desktop {
    overflow-y: hidden;
}

/*--------------------sidebar-brand----------------------*/

.sidebar-wrapper .sidebar-brand {
    padding: 10px 20px;
    display: flex;
    align-items: center;
}

.sidebar-wrapper .sidebar-brand>a {
    text-transform: uppercase;
    font-weight: bold;
    flex-grow: 1;
}

.sidebar-wrapper .sidebar-brand #close-sidebar {
    cursor: pointer;
    font-size: 20px;
}

/*--------------------sidebar-header----------------------*/

.sidebar-wrapper .sidebar-header {
    padding: 20px;
    overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic {
    float: left;
    width: 60px;
    padding: 2px;
    border-radius: 12px;
    margin-right: 15px;
    overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic img {
    object-fit: cover;
    /* height: 100%; */
    width: 100%;
}

.sidebar-wrapper .sidebar-header .user-info {
    float: left;
}

.sidebar-wrapper .sidebar-header .user-info>span {
    display: block;
}

.sidebar-wrapper .sidebar-header .user-info .user-role {
    font-size: 12px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status {
    font-size: 11px;
    margin-top: 4px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status i {
    font-size: 8px;
    margin-right: 4px;
    color: #5cb85c;
}

/*-----------------------sidebar-search------------------------*/

.sidebar-wrapper .sidebar-search>div {
    padding: 10px 20px;
}

/*----------------------sidebar-menu-------------------------*/

.sidebar-wrapper .sidebar-menu {
    padding-bottom: 10px;
}

.sidebar-wrapper .sidebar-menu .header-menu span {
    font-weight: bold;
    font-size: 14px;
    padding: 15px 20px 5px 20px;
    display: inline-block;
}

.sidebar-wrapper .sidebar-menu ul li a {
    display: inline-block;
    width: 100%;
    text-decoration: none;
    position: relative;
    padding: 8px 30px 8px 20px;
}

.sidebar-wrapper .sidebar-menu ul li a i {
    margin-right: 10px;
    font-size: 14px;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border-radius: 4px;
}

.sidebar-wrapper .sidebar-menu ul li a:hover>i::before {
    display: inline-block;
    animation: swing ease-in-out 0.5s 1 alternate;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
    padding: 5px 0;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
    padding-left: 25px;
    font-size: 13px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
    content: "\f111";
    font-family: "Font Awesome 5 Free";
    font-weight: 400;
    font-style: normal;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-right: 10px;
    font-size: 8px;
}

.sidebar-wrapper .sidebar-menu ul li a span.label,
.sidebar-wrapper .sidebar-menu ul li a span.badge {
    float: right;
    margin-top: 8px;
    margin-left: 5px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
    float: right;
    margin-top: 0px;
}

.sidebar-wrapper .sidebar-menu .sidebar-submenu {
    display: none;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a:after {
    transform: rotate(90deg);
    right: 17px;
}

/*--------------------------side-footer------------------------------*/

.sidebar-footer {
    position: absolute;
    width: 100%;
    bottom: 0;
    display: flex;
}

.sidebar-footer>a {
    flex-grow: 1;
    text-align: center;
    height: 30px;
    line-height: 30px;
    position: relative;
}

.sidebar-footer>a .notification {
    position: absolute;
    top: 0;
}

.badge-sonar {
    display: inline-block;
    background: #980303;
    border-radius: 50%;
    height: 8px;
    width: 8px;
    position: absolute;
    top: 0;
}

.badge-sonar:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    border: 2px solid #980303;
    opacity: 0;
    border-radius: 50%;
    width: 100%;
    height: 100%;
    animation: sonar 1.5s infinite;
}

/*------scroll bar---------------------*/

::-webkit-scrollbar {
    width: 5px;
    height: 7px;
}

::-webkit-scrollbar-button {
    width: 0px;
    height: 0px;
}

::-webkit-scrollbar-thumb {
    background: #525965;
    border: 0px none #ffffff;
    border-radius: 0px;
}

::-webkit-scrollbar-thumb:hover {
    background: #525965;
}

::-webkit-scrollbar-thumb:active {
    background: #525965;
}

::-webkit-scrollbar-track {
    background: transparent;
    border: 0px none #ffffff;
    border-radius: 50px;
}

::-webkit-scrollbar-track:hover {
    background: transparent;
}

::-webkit-scrollbar-track:active {
    background: transparent;
}

::-webkit-scrollbar-corner {
    background: transparent;
}


/*-----------------------------chiller-theme-------------------------------------------------*/

.chiller-theme .sidebar-wrapper {
    background: #31353D;
}

.chiller-theme .sidebar-wrapper .sidebar-header,
.chiller-theme .sidebar-wrapper .sidebar-search,
.chiller-theme .sidebar-wrapper .sidebar-menu {
    border-top: 1px solid #3a3f48;
}

.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    border-color: transparent;
    box-shadow: none;
}

.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
.chiller-theme .sidebar-wrapper .sidebar-brand>a,
.chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
.chiller-theme .sidebar-footer>a {
    color: #818896;
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover>a,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info,
.chiller-theme .sidebar-wrapper .sidebar-brand>a:hover,
.chiller-theme .sidebar-footer>a:hover i {
    color: #b8bfce;
}

.page-wrapper.chiller-theme.toggled #close-sidebar {
    color: #bdbdbd;
}

.page-wrapper.chiller-theme.toggled #close-sidebar:hover {
    color: #ffffff;
}

.chiller-theme .sidebar-wrapper ul li:hover a i,
.chiller-theme .sidebar-wrapper .sidebar-dropdown .sidebar-submenu li a:hover:before,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu:focus+span,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active a i {
    color: #16c7ff;
    text-shadow: 0px 0px 10px rgba(22, 199, 255, 0.5);
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li a i,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    background: #3a3f48;
}

.chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
    color: #6c7b88;
}

.chiller-theme .sidebar-footer {
    background: #3a3f48;
    box-shadow: 0px -1px 5px #282c33;
    border-top: 1px solid #464a52;
}

.chiller-theme .sidebar-footer>a:first-child {
    border-left: none;
}

.chiller-theme .sidebar-footer>a:last-child {
    border-right: none;
}
</style>
<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>

    <nav id="sidebar" class="sidebar-wrapper">
        <div class="nav-header" style="background:none !important;background-color:none !important;
    /* z-index: 9999; */
    box-shadow: 0 0 0 rgb(0 0 0 / 15%);
    width: 226px;">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/online-cource.png" alt=""> </b>
                    <!-- <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span> -->
                    <span class="brand-title" style="filter: drop-shadow(2px 1px 10px black);">
                        <img src="images/online-cource.png" alt="" style="height: 95px;
    width: 113px;
    margin-top: -19px;
    margin-left: 35px;
    /* filter: drop-shadow(2px 1px 1px white); */
    filter: drop-shadow(-1px 1px 0px white);">
                    </span>
                </a>
            </div>
        </div>

        <div class="sidebar-content" style="margin-top: 108px; padding-bottom:100px;">
            <div class="sidebar-brand">
               
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>

            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="sidebar-dropdown" onclick="finddata('dashboard','view',1); findbox('dashboard');">
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                            <!-- <span class="badge badge-pill badge-warning">New</span> -->
                        </a>
                    </li>
                    <li class="sidebar-dropdown" onclick="finddata('category','view',1); findbox('category');">
                        <a href="#">
                        <i class="fa fa-tasks"></i>
                            <span>Manage Category</span>
                            <!-- <span class="badge badge-pill badge-danger">3</span> -->
                        </a>

                    </li>
                    <li class="sidebar-dropdown" onclick="finddata('subcategory','view',1); findbox('subcategory');">
                        <a href="#">
                            <i class="fa fa-clone"></i>
                            <span>Manage Sub-category</span>
                        </a>

                    </li>
                    <li class="sidebar-dropdown" onclick="finddata('payment','view',1); findbox('payment');">
                        <a href="#">
                            <i class="fa fa-paypal"></i>
                            <span>Payment</span>
                        </a>

                    </li>
                    <li class="sidebar-dropdown" onclick="finddata('reportissue','view',1); findbox('reportissue');">
                        <a href="#">
                            <i class="fa fa-list-alt"></i>
                            <span>Report issue</span>
                        </a>

                    </li>
                    <li class="header-menu">
                        <span>Bank & Transactions</span>
                    </li>
                    <li class="sidebar-dropdown" onclick="finddata('bank','view',1); findbox('bank');">
                        <a href="#">
                            <i class="fa fa-university"></i>
                            <span>Bank</span>
                        </a>

                    </li>
                    <li class="sidebar-dropdown" onclick="finddata('transactions','view',1); findbox('transactions');">
                        <a href="#">
                            <i class="fa fa-clone"></i>
                            <span>Transactions</span>
                        </a>

                    </li>
                    <li class="header-menu">
                        <span>View</span>
                    </li>
                    <li onclick="finddata('tutors','view',1); findbox('tutors');">
                        <a href="#">
                            <i class="fa fa-street-view"></i>
                            <span>View tutors</span>
                            <!-- <span class="badge badge-pill badge-primary">Beta</span> -->
                        </a>
                    </li>
                    <li onclick="finddata('users','view',1); findbox('users');">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>View users</span>
                        </a>
                    </li>
                    <li onclick="finddata('courses','view',1); findbox('courses');">
                        <a href="#">
                            <i class="fa fa-toggle-right"></i>
                            <span>View courses</span>
                        </a>
                    </li>
                    <li onclick="finddata('visitors','view',1); findbox('visitors');">
                        <a href="#">
                            <i class="fa fa-toggle-right"></i>
                            <span>View visitors</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->

    </nav>
    <!-- sidebar-wrapper  -->
    </div>
<?php
require_once "script.php";
?>
<script>
$(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
        $(this)
        .parent()
        .hasClass("active")
    ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
            .parent()
            .removeClass("active");
    } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
            .next(".sidebar-submenu")
            .slideDown(200);
        $(this)
            .parent()
            .addClass("active");
    }
});

$("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
});
</script>