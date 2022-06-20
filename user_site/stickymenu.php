<?php
require_once "header.php"
?>

<style>
.login-button {
    height: 50px;
    width: 50px;
    background-image: radial-gradient(#4a2121, #fd0808);
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    /* position: absolute; */
    /* position: fixed; */
    /* z-index: +1; */
    /* top: 18px;
    right: 0.5%; */
    padding-top: 18px;
    /* border: 1px solid; */
    border-radius: 5px;
}

.loginlink {
    color: #ffffff !important;
    background-color: #830909 !important;
}

.main2 {
    position: absolute;
    /* top: -8px; */
    left: 0;
    right: 0;
    background: linear-gradient(0deg, rgba(32, 124, 229, 0) 0%, rgba(146, 95, 206, 0) 0%, #080808 100%);
    z-index: 999;
    /* background: linear-gradient( 
0deg
 , rgba(32, 124, 229, 0) 0%, rgba(146, 95, 206, 0) 14%, #080808 120%); */
}

.login-button1 {
    height: 50px;
    width: 50px;
    background-image: radial-gradient(#4a2121, #fd0808);
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    position: fixed;
    margin-top: -50px;
    right: 0.5%;
    padding-top: 18px;
    /* border: 1px solid; */
    border-radius: 5px;
}

#navbar {
    background-color: #000;
    opacity: 0.7;
    position: fixed;
    z-index: 9999;
    top: -10px;
    width: 100%;
    /* margin-top: 0px; */

    display: block;
    transition: top 0.3s;
}

#navbar .a5 {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    /* padding: 10px; */
    margin-top: -2%;
    text-decoration: none;
    font-size: 15px;

}

#navbar .a5:hover {
    /* background-color: #ddd;
  color: black; */
}

.snip1226 {
    font-family: 'Raleway', Arial, sans-serif;
    text-align: center;
    text-transform: uppercase;
    font-weight: 500;
}

.snip1226 * {
    box-sizing: border-box;
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
}

.snip1226 .li1 {
    display: inline-block;
    list-style: outside none none;
    /* margin: 0 1.5em; */
    margin-left: 40px;
    overflow: hidden;
}

.snip1226 .a5 {
    padding: 0.3em 0;
    color: rgba(255, 255, 255);
    position: relative;
    display: inline-block;
    letter-spacing: 1px;
    margin: 0;
    border: none;
    text-decoration: none;
}

.snip1226 .a6 {
    padding: 0.3em 0;
    color: rgba(255, 255, 255);
    position: relative;
    display: inline-block;
    letter-spacing: 1px;
    margin: 0;
    border: none;
    text-decoration: none;
}

.snip1226 .a5:before,
.snip1226 .a5:after {
    position: absolute;
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
}

.snip1226 .a5:before {
    bottom: 100%;
    display: block;
    height: 3px;
    width: 100%;
    content: "";
    background-color: #c30808;
}

.snip1226 .a5:after {
    padding: 0.3em 0;
    position: absolute;
    bottom: 100%;
    left: 0;
    content: attr(data-hover);
    color: white;
    white-space: nowrap;
}

.snip1226 .li1:hover .a5,
.snip1226 .current .a5 {
    transform: translateY(100%);

}
</style>

<style>
.navi ul ul {
    /* width: 20rem; */

    width: 240px;
    /* display: none; */
    /* display:block; */
    visibility: hidden;
    position: absolute;
    border-top: 3px solid #ffffff;
    background-color: #fff;
    /* z-index: 100; */
    /* top: 16rem; */
    opacity: 0;
    /* visibility: hidden; */
    /* padding:0px; */
    /* padding-left:-10px; */
    transition: all 650ms ease;
}

.navbar ul>ul {
    /* position:relative;
  z-index:_1 */
}

.navi ul ul li {
    width: 100%;
    padding: 0px 6px 8px 0px;
    font-size: 13px;
    color: #8c8787;
    list-style-type: none;
    position: relative;
}

.navi ul ul::before {

    content: "";

    position: absolute;
    top: -1.8rem;
    left: 3rem;
    border: 0.8rem solid transparent;
    /* border-bottom-color: #009999; */
    left: 34px;
    border-bottom-color: #ffffff;
}

.navi ul ul ul::before {
    top: 0;
    left: -1.8rem;
    border: 0.8rem solid transparent;
    /* height:100px; */
    /* border-right-color: #009999;  */
    border-right-color: #ffffff
        /* margin-top:50%; */
}

.navi ul ul ul {
    border-top: none;
    border-left: 3px solid #ffffff;
    top: 0%;

    /* margin-top:100px; */
    /* height:100px; */
    left: 105%;
}

.navi ul li:hover>ul {
    text-align: left;
    list-style-type: none;
    top: 4rem;
    opacity: 1;
    display: block;
    visibility: visible;
    /* padding-left:-10px; */



}

.navi .navbar-nav .dropdown-content ul li a {
    color: #000;
    list-style-type: none;
}

.navi .navbar-nav .dropdown-content ul li a:hover {
    color: #009999;
    list-style-type: none;
}

.navi ul li:hover>ul li:hover {
    color: #009999;
    list-style-type: none;

    /* background:#c4e9e9; */
    border: 3px #009999;
}

.navi ul ul li:hover>ul {
    /* left:19%;  */
    /* height:60px; */
    /* position: fixed; */
    top: 5%;
    list-style-type: none;
}
</style>
<form method="post">
    <div id="navbar" class="navi" style="height: 90px; top: -130px;">

        <ul class="snip1226" style="margin-top: 34px;    margin-left: 30px;">
            <div class=container-fluid>
                <div class="row">
                    <div class=col-md-1>
                        <!-- <img src="img/online-cource.png" height=80px; width=100px; style="margin-top:-34px;"> -->

                        <span class="" style="filter: drop-shadow(2px 1px 10px #C1C3CA);">
                            <img src="img/online-cource.png" alt="" style="height: 90px;
    width: 97px;
    margin-top: -34px;
    margin-bottom: 5px;
    margin-left: 5px;
    filter: drop-shadow(3px -2px 0px white);">
                        </span>

                    </div>
                    <div class=col-md-4 style=""></div>
                    <div class=col-md-7>
                        <?php 
                if($_SESSION['page']=="home")
                {
                    ?>
                        <li class="li1"><a class="a5" href="index" style="color:red;" data-hover="Home">Home</a></li>

                        <?php
                }
                else
                {
                       ?>
                        <li class="li1"><a class="a5" href="index" data-hover="Home">Home</a></li>

                        <?php
                }
                ?>
                        <!-- <li class="li1"><a class="a5" href="index.php" data-hover="Category">Category</a></li> -->
                        <li class="li1"><a class="a6" style="color: rgba(255, 255, 255);">
                                Category</a>
                            <ul>
                                <?php
                              $category=$con->query("select * from category");
                              while($cat=mysqli_fetch_array($category)){
                        ?>
                                <li value="<?php echo $cat[0];?>">
                                    <a href="category_video_display?cid=<?php echo $cat[0];?>"><?php echo $cat[1];?></a>
                                    <ul>
                                        <?php
                                 
                                 $sub=$con->query("select c.*,s.* from category c,subcategory s where c.categoryid=s.categoryid and c.categoryname like '$cat[1]'");
                                  while($s=mysqli_fetch_array($sub)){
                                ?>
                                        <li type="none">
                                            <a href="subcategory_video_display?subcid=<?php echo $s[2];?>" style="">
                                                <?php echo $s[4];?>
                                            </a>
                                        </li>
                                        <?php
          //  }
          }//if
           ?>
                                    </ul>
                                </li>

                                <?php
           }
           ?>

                            </ul>
                        </li>
                        <?php
                        if($_SESSION['page']=="tutor")
                {
                    ?>
                        <li class="li1"><a class="a5" style="color:red;" href="tutor" data-hover="Tutor">Tutor</a>
                        </li>

                        <?php
                }
                else
                {
                       ?>
                        <li class="li1"><a class="a5" href="tutor" data-hover="Tutor">Tutor</a></li>

                        <?php
                }
                 
                ?>
                        <?php
                if($_SESSION['page']=="aboutus")
                {
                    ?>

                        <li class="li1"><a class="a5" style="color:red;" href="about-us" data-hover="About us">About
                                us</a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li class="li1"><a class="a5" href="about-us" data-hover="About us">About us</a></li>
                        <?php
                    }
                    
                     if($_SESSION['page']=='contactus')
                {
                    ?>

                        <li class="li1"><a class="a5" style="color:red;" href="contact" data-hover="Contact us">Contact
                                us</a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li class="li1"><a class="a5" href="contact" data-hover="Contact us">Contact us</a></li>
                        <?php
                    }
                    ?>

                        <!-- <li><a href="#" data-hover="Blog">Blog</a></li> -->
                        <?php
              
              if($_SESSION['userid']!="")
              {
                  if($_SESSION['page']=="myaccount")
                  {
              
                  ?>
                                  <li class="li1"><a class="a5" style="color:red;" href="user_master_content" data-hover="My Account">My
                                          Account</a></li>
                                  <?php
                  }
                  else{
                      ?>
                      <li class="li1"><a class="a5" href="user_master_content" data-hover="My Account">My
                                          Account</a></li>
                                          <?php
                  }
              }
              
          ?>
          

                    </div>

                    <li>
                        <div id="btnlogin" class="login-button1"><a class="loginlink" href="user_login"><i
                                    class="ti-user login-user-icon"></i></a></div>
                    </li>

                </div>
            </div>
        </ul>
    </div>

    <div class="container-fluid navi">
        <div class="main2">
            <div class="row">

                <div class=col-md-2>
                    <!-- <img src="img/online-cource.png" height=80px; width=100px;> -->

                    <span class="" style="filter: drop-shadow(2px 1px 10px #C1C3CA);">
                        <img src="img/online-cource.png" alt=""
                            style="height: 100px;width: 112px;margin-top: 0px;margin-bottom: 5px;margin-left: 35px;filter: drop-shadow(3px -2px 0px white);">
                    </span>

                </div>

                <div class=col-md-2></div>
                <div class=col-md-8>
                    <ul class="snip1226" style="margin-top: 25px;">
                        <?php 
                if($_SESSION['page']=="home")
                {
                    ?>
                        <li class="li1"><a class="a5" style="color:red;" href="index" data-hover="Home">Home</a></li>

                        <?php
                }
                else
                {
                       ?>
                        <li class="li1"><a class="a5" href="index" data-hover="Home">Home</a></li>

                        <?php
                }
                ?>

                        <li class="li1"><a class="a6" style="color: rgba(255, 255, 255);">
                                Category</a>
                            <ul>
                                <?php
                              $category=$con->query("select * from category");
                              while($cat=mysqli_fetch_array($category)){
                        ?>
                                <li value="<?php echo $cat[0];?>">
                                    <a href="category_video_display?cid=<?php echo $cat[0];?>"><?php echo $cat[1];?></a>
                                    <ul>
                                        <?php
                                 
                                 $sub=$con->query("select c.*,s.* from category c,subcategory s where c.categoryid=s.categoryid and c.categoryname like '$cat[1]'");
                                  while($s=mysqli_fetch_array($sub)){
                                    //   print_r($s);
                                ?>
                                        <li type="none">
                                            <a href="subcategory_video_display?subcid=<?php echo $s[2];?>" style="">
                                                <?php echo $s[4];?>
                                            </a>
                                        </li>
                                        <?php
          //  }
          }//if
           ?>
                                    </ul>
                                </li>

                                <?php
           }
           ?>

                            </ul>
                        </li>
                        <?php
                        if($_SESSION['page']=="tutor")
                {
                    ?>
                        <li class="li1"><a class="a5" style="color:red;" href="tutor" data-hover="Tutor">Tutor</a>
                        </li>

                        <?php
                }
                else
                {
                       ?>
                        <li class="li1"><a class="a5" href="tutor" data-hover="Tutor">Tutor</a></li>

                        <?php
                }
                ?>
                        <?php
                if($_SESSION['page']=="aboutus")
                {
                    ?>

                        <li class="li1"><a class="a5" style="color:red;" href="about-us" data-hover="About us">About
                                us</a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li class="li1"><a class="a5" href="about-us.php" data-hover="About us">About us</a></li>
                        <?php
                    }
                
                        if($_SESSION['page']=="contactus")
                        {
                        ?>

                       <li class="li1"><a class="a5" style="color:red;" href="contact" data-hover="Contact us">Contact us</a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                         <li class="li1"><a class="a5" href="contact" data-hover="Contact us">Contact us</a></li>
                        <?php
                    }
                    ?>
                        
                        <!-- <li><a href="#" data-hover="Blog">Blog</a></li> -->
                        <?php
    if($_SESSION['userid']!="")
    {
        if($_SESSION['page']=="myaccount")
        {
    
        ?>
                        <li class="li1"><a class="a5" style="color:red;" href="user_master_content" data-hover="My Account">My
                                Account</a></li>
                        <?php
        }
        else{
            ?>
            <li class="li1"><a class="a5" href="user_master_content" data-hover="My Account">My
                                Account</a></li>
                                <?php
        }
    }
    
?>


                        <li style="margin-top:-45px;margin-left:93%;list-style-type: none;">
                            <div class="login-button"><a class="loginlink" href="user_login"><i
                                        class="ti-user login-user-icon"></i></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.top = "0px";
        document.getElementById("btnlogin").style.top = "250px";
    } else {
        document.getElementById("navbar").style.top = "-130px";
        document.getElementById("btnlogin").style.top = "-350px";
    }
}
</script>
<?php
// require_once "footer.php"
?>