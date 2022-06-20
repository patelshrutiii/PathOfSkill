<?php require_once "connection.php"; ?>
<?php require_once "head.php"; ?>
<style>
.b1,
html {
    font-family: 'Roboto', sans-serif;
    display: flex;
    height: 100%;
    width: 100%;
    align-items: center;
    justify-content: center;
    color: #999;
    /* background: #3c5f6c; */
}
.reg{
   
    text-decoration: none;
    color: white;
}
.reg:hover{
          /* border-bottom:2px solid white; */
          color: white;
}
h1 {
    color: white;
    font-size: 40px;
    font-weight: 700;
        text-transform: uppercase;
    letter-spacing: 3px;
}

.fa {
    position: relative;
    right: -35px;
    transition: opacity 2s ease-in-out;
}

section {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* height: 100vh; */
    background: linear-gradient(90deg, #3f51b5, #00bcd4);
    animation: animate 20s linear infinite;
}

@keyframes animate {
    0% {
        filter: hue-rotate(0deg);
    }

    50% {
        filter: hue-rotate(360deg);
    }

    100% {
        filter: hue-rotate(0deg);
    }
}

section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    border-top: 100vh solid transparent;
    border-left: 100vh solid #fff;
    opacity: 0.1;
}

section::after {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    border-top: 100vh solid transparent;
    border-right: 100vh solid #fff;
    opacity: 0.1;
}
</style>
<?php
    if(isset($_REQUEST['login']))
    {
        
        $tutorid1=$_POST['userid1'];
        $pws1=$_POST['psw1'];
        $q=$con->query("select * from tutor where tutorid like '$tutorid1' and password like '$pws1'"); 
        $rdata=mysqli_fetch_array($q);
    
        if($rdata[0]=='')
        {
           echo "<script>alert('Emailid or password is invalid please try again!');</script>";
        }
        else{
            if($rdata[14]!=0)         {
                header("location:403");
            }
            else{
            $_SESSION['what']="dashboard";
            $_SESSION['tutor_id']=$_POST['userid1'];
            header('location:tutor_dashboard.php');
            }
        }
    }
    
if(isset($_POST['signup']))
{
$id=$_POST['id'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$psw=$_POST['psw'];
$skill=$_POST['skill'];
$slevel=$_POST['slevel'];
$bio=$_POST['bio'];
$mbo=$_POST['mbo'];
$lastlogin = date('d-m-Y h:i:s');
$fb=$_POST['facebook'];
$li=$_POST['linkedin'];


$newname=$_REQUEST['fname'].".".pathinfo($_FILES[upphoto][name],PATHINFO_EXTENSION);
$ex=pathinfo($_FILES[upphoto][name],PATHINFO_EXTENSION);
$s=$_FILES[upphoto][size]/1024/1024;
if($ex=="jpg")
      {

           if($s<5)
           {
               $setpath=dirname(__FILE__)."/courseimage/".$newname;
               $path="courseimage/".$newname;
               echo "<script>alert($path);</script>";
              move_uploaded_file($_FILES[upphoto][tmp_name],$setpath);
              $in=$con->query("insert into tutor values('$id','$fname','$lname','$email','$gender','$psw','$path','$mbo','$skill','$slevel','$bio','$lastlogin','$fb','$li',0)");
            //   echo "<script>alert('hello i am inserted');</script>";
           }
           else{
            echo "<script>alert('hello i am  not inserted');</script>";
               echo "file size is large";
           }
      }
   }
    ?>

<body class="b1">

    <section></section>
    <form method="post" enctype="multipart/form-data">
        <div id="wrapper" class="normal" style="margin-bottom: 75px;">
            <div class="login front">
                <h1>Welcome</h1>
                <div class="input-wrapper">
                    <i class="fa fa-user-circle-o " aria-hidden="true"></i>
                    <input class="inp" type="text" placeholder="Userid" pattern="^[0-9a-zA-Z]{6,16}$" name="userid1">
                </div>

                <div class="input-wrapper">
                    <i class="fa fa-eye" id="togglePassword2"></i>
                    <input class="inp" type="password" id="password2" pattern="^[0-9a-zA-Z@$&*]{8,16}$"
                        placeholder="Password" name="psw1">
                </div>
                <button type="submit" class="btntutor" name="login">Login</button>
                <!-- <button type="submit">Login</button> -->
                <div class="links">
                   Don't have and accout?
                             <a href="#" class="toggler linktutor reg">Register</a>
                </div>
            </div>
    </form>

    <form method="post" enctype="multipart/form-data" onsubmit="return checkpass1()">
        <!-- registration form -->
        <div class="register back" style="margin-top:-390px;;margin-left: -300px;">
            <h1>Welcome</h1>

            <div class="input-wrapper">
                <i class="fa fa-user" aria-hidden="true" onclick="psw()"></i>
                <input class="inp" type="text" placeholder="First name" name="fname" pattern="^[a-zA-Z]*$">
                <i class="fa fa-user" aria-hidden="true" onclick="psw()"></i>
                <input class="inp" type="text" placeholder="Last name" name="lname" pattern="^[a-zA-Z]*$">
            </div>
            <div style="padding-left: 30px;
    width: 532px;
    float: left;
    margin-right: 123px;">
                <i class="fa fa-user-circle-o " aria-hidden="true"></i>
                <input class="inp" type="text" placeholder="userid" pattern="^[0-9a-zA-Z]{6,16}$" name="id"
                    style="display:inline-block;/* margin-right: 217px; */width: 254px;flot: left;/* float: left; */margin-right: 15px;">
                <input class="inp" type="radio" name="gender" value="Male"
                    style="display:inline-block;width: 22px;margin-right: -41px;padding-right: -7px;"><label style="
    margin-left: 50px;
">male</label>
                <input class="inp" type="radio" name="gender" value="FeMale"
                    style="display:inline-block;width: 19px;"><label>female</label>
            </div>
            <div class="input-wrapper">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input class="inp" type="email" placeholder="Email" name="email">
            </div>
            <div class="input-wrapper">
                <i class="fa fa-eye" id="togglePassword"></i>
                <input class="inp" type="password" id="password" pattern="^[0-9a-zA-Z@$&*]{8,16}$"
                    placeholder="Password" name="psw">
                <i class="fa fa-eye" id="togglePassword1"></i>
                <input class="inp" type="password" id="password1" pattern="^[0-9a-zA-Z@$&*]{8,16}$"
                    placeholder="Confirm password">
            </div>

            <div class="input-wrapper">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                <input class="inp" type="file" placeholder="profile pic" name="upphoto">

                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                <!-- <input class="inp" type="number" id="mobiledata" placeholder="contact no" name="mbo"  pattern="^\d{10}$"> -->
                <input id="mobiledata" class="inp" name="mbo" type="text" maxlength="10" class="m_no" required>
            </div>
            <div class="input-wrapper" style="margin-left: -99px; padding: 9px;">
                <i class="fa fa-sign-language" aria-hidden="true">&nbsp;&nbsp;Skill&nbsp;&nbsp;
                    <select name="skill">
                        <option>Dancing</option>
                        <option>Singing</option>
                        <option>Cooking</option>
                        <option>Programing</option>
                        <option>Painting</option>
                        <option>Speaking</option>
                        <option>Yoga</option>
                    </select>
                </i>
                <div style="margin-left:20%"></div>
                <i class="fa fa-hand-o-down " aria-hidden="true">&nbsp;&nbsp;Skill Level&nbsp;&nbsp;
                    <select name="slevel">
                        <option>Beginner</option>
                        <option>Intermediate</option>
                        <option>Expert</option>
                    </select></i>
            </div>

            <div class="input-wrapper">
                <i class="fa fa-podcast" aria-hidden="true"></i>
                <input class="inp" type="text area" placeholder="bio" name="bio">
            </div>

            <div class="input-wrapper" style="margin-left: -69px;">

                <i class="fa fa-facebook" style="margin-left:50px;" aria-hidden="true"></i>
                <input class="inp" type="url" name="facebook"></input>

                <i class="fa fa-linkedin" style="margin-left:50px;" aria-hidden="true">
                </i><input type="url" class="inp" name="linkedin"></input>
            </div>

            <!-- <button type="submit" name="signup">Register</button> -->
            <button name="signup" class="btntutor">Sign Up</button>

            <div class="links">
            Already have an account! <a href="#" class="toggler linktutor reg">Login</a>
            </div>
        </div>
        </div>
    </form>


</body>

<?php require_once "script.php"; ?>