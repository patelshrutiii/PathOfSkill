<?php 
require_once "header.php";
require_once "script.php";
?>
<style>/*Nav css goes here*/
*,
*::before,
*::after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html{
    font-family: 'Roboto',sans-serif;
    font-size: 10px;
}
body{
    overflow-x: hidden;
}
a{
    text-decoration: none;
}
ul{
    list-style: none;
}
header{
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
.container{
    width: 100%;
    max-width: 117rem;
    margin: 0 auto;
    padding: 0 1.5rem;
}
.menu-icons{
    color: #eee;
    font-size: 4rem;
    position: absolute;
    top: 50%;
    right: 2rem;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 1500;
    display: none;
}
nav{
    display: flex;
    align-items: center;
    width: 100%;
    height: 8rem;
    border-bottom: 1px solid rgba(255,255,255, .1);

}
.logo{
    width: 15rem;
    height: 5rem;
    /*background-color: #eb3007;*/
    display: flex;
    border-radius: 10%;
    margin-right: 5rem;
}
.logo h2{
    margin: auto;
    font-size: 3rem;
}
.logo img{
    height: 40px;
}

.nav-list{
    display: flex;
    width: 100%;
    align-items: center;
}
.nav-list li{
    line-height: 8rem;
    position: relative;
}
.sub-menu li{
    line-height: 4rem;
}
.nav-list a{
    display: block;
    color: #eee;
    padding: 0 1.5rem;
    font-size: 1.4rem;
    text-transform: uppercase;
}

.nav-list a:hover{
    color: #eb3007;
}
.submenu{
    width: 20rem;
    display: block;
    position: absolute;
    border-top: 3px solid #eb3007;
    background-color: #191919;
    z-index: 100;
    top: 16rem;
    opacity: 0;
    visibility: hidden;
    transition: all 650ms ease;
}
.submenu::before{
    content: "";
    position: absolute;
    top: -2.5rem;
    left: 3rem;
    border: 1.2rem solid transparent;
    border-bottom-color: #eb3007;
}

.submenu .submenu::before{
    top: .9rem;
    left: -2.5rem;
    border: 1.2rem solid transparent;
    border-right-color: #eb3007; 
}

.submenu .submenu{
    border-top: none;
    border-left:3px solid #eb3007;
    top: 0;
    left: 160%;
}

.nav-list li:hover > .submenu{
    top: 8rem;
    opacity: 1;
    visibility: visible;

}
.submenu li:hover > .submenu{
    left:100%;
    top: 0;
}

@media screen and (max-width: 850px){
    .nav-list{
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        display: none;
        flex-direction: column;
        align-items: initial;
        background-color: #191919;
        z-index: 1000;
        overflow-y: scroll;
    }
    .nav-list > li{
        line-height: 6rem;

    }
    .submenu{
        position: initial;
        border: 3px solid transparent;
        border-left-color: #eb3007;
        margin-left: 1rem;
        max-height: 0;
    }
    .submenu::before{
        display: none;
    }
    .nav-list li:hover > .submenu{
        opacity: 1;
        visibility: visible;
        max-width: initial;
    }
    .menu-icons{
        display: block;
    }
    .ion-md-close{
        display: none;
    }
    nav.active .ion-md-close{
        display: block;
    }
    nav.active .ion-md-menu{
        display: none;
    }

    nav.active .nav-list{
        display: flex; 
    }

}

/*End nav css*/

/*Hero*/
.hero{
    width: 100%;
    height: 100vh;
    background: linear-gradient(to bottom, rgba(0,0,0,0.8),rgba(0,0,0,0.8)),
    url("images/bg.jpg") center no-repeat;
    background-size: cover;
}

.text{
    width: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #eee;
    text-align: center;
}

.text h1{
    font-size: 8rem;
    margin: 2rem 0;
    font-family: 'Blastimo', sans-serif;
}

.text h2{
    font-size: 1.6rem;
    text-transform: uppercase;
    font-weight: 300;
}

.text p{
    font-size: 1.6rem;
    margin-bottom: 5rem;
}

.text .btn{
    font-size: 1.6rem;
    padding-left: 3rem;
    padding-right: 3rem;
    color: #eee;
    text-transform: uppercase;
}

@media screen and (max-width: 830px){
    .text h1{
        font-size: 4rem;
    }

    .text .btn{
        font-size: 1.2rem;
    }
}

</style>
<!--Content-->
<!-- <!doctype html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Level Dropdown</title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<!--Nav markup goes here-->
    <header>
        <div class="container">
            <nav>
                <div class="menu-icons">
                    <i class="icon ion-md-menu"></i>
                    <i class="icon ion-md-close"></i>
                </div>
                <a href="index.html" class="logo">
                    <!-- <h2 style="color: black">LOGO</h2> -->
                    <img src="logo.png">
                </a>
                <ul class="nav-list">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us
                            <i class="icon ion-md-arrow-dropdown"></i>
                        </a>
                        
                        <ul class="submenu">
                            <li>
                                <a href="#">Our Purpose</a>
                            </li>
                            <li>
                                <a href="#">Our Strategy</a>
                            </li>
                            <li>
                                <a href="#">Where we operate</a>
                            </li>
                            <li>
                                <a href="#">What we do</a>
                            </li>
                            <li>
                                <a href="#">At a glance</a>
                            </li>
                            <li>
                                <a href="#">Company</a>
                            </li>
                            <li>
                                <a href="#">Cerification</a>
                            </li>
                            <li>
                                <a href="#">Clients</a>
                            </li>
                            <li>
                                <a href="#">Policy and Terms</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Products
                            <i class="icon ion-md-arrow-dropdown"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Feldspar</a>
                            </li>
                            <li>
                                <a href="#">Quartz</a>
                            </li>
                            <li>
                                <a href="#">Mica</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Our Services
                            <i class="icon ion-md-arrow-dropdown"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Sustainability
                                    <i class="icon ion-md-arrow-dropdown"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">People</a>
                                    </li>
                                    <li>
                                        <a href="#">Community</a>
                                    </li>
                                    <li>
                                        <a href="#">Environment</a>
                                    </li>
                                    <li>
                                        <a href="#">Safety and Health</a>
                                    </li>
                                    <li>
                                        <a href="#">Approach and Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">performance</a>
                                    </li>
                                    <li>
                                        <a href="#">Socia way</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mining
                                    <i class="icon ion-md-arrow-dropdown"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Our Purpose</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Strategy</a>
                                    </li>
                                    <li>
                                        <a href="#">Where we operate</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Export</a>
                            </li>
                            <li>
                                <a href="#">Packaging</a>
                            </li>
                            <li>
                                <a href="#">B2B Services</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Media
                            <i class="icon ion-md-arrow-dropdown"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">News and Events</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Gallery</a>
                            </li>
                            <li>
                                <a href="#">Tech Reports</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#">Contact Us
                            <i class="icon ion-md-arrow-dropdown"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Locate us</a>
                            </li>
                            <li>
                                <a href="#">Career
                                    <i class="icon ion-md-arrow-dropdown"></i>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">JoB</a>
                                    </li>
                                    <li>
                                        <a href="#"> Internship</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#">Become Supplier</a>
                            </li>
                            <li>
                                <a href="#">Purchase product</a>
                            </li>
                            <li>
                                <a href="#">request For report</a>
                            </li>
                            <li>
                                <a href="#">Faq</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
<!--End nav-->

<!--Hero-->
<section class="hero">
    <div class="text">
        <h2>Welcome to</h2>
        <h1>PVR Metals and Minerals</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <a href="#" class="btn">Learn more</a>
    </div>
</section>
<script src="scripts.js"></script>
</body>
</html>
