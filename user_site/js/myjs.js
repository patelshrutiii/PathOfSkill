//auto focus otp
// alert("heloo");

$(document).ready(function() {

    $(".otp div input").keyup(function() {
        $cur = $(".otp div input").index(this);
        if (event.keyCode != 8) {
            $cur++;
            if ($(".otp div input:nth-child(" + $cur + ")").val() != "") {
                $cur++;
                $(".otp div input:nth-child(" + $cur + ")").focus();

            }
        } else {
            $cur++;
            if ($(".otp div input:nth-child(" + $cur + ")").val() == "") {
                $cur--;
                $(".otp div input:nth-child(" + $cur + ")").focus();

            }
        }
    });

});


function ratedata(what, task, id) {
    // alert(id);
    $.ajax({
        url: 'usermissdata.php?what=' + what + '&task=' + task + '&id=' + id,
        type: 'POST',
        success: function(data) {
            // alert(data);
            $("#rdata").html(data);
        }
    });
}

// report issue
function ratedata2(what, task, id) {
    // alert(id);
    $.ajax({
        url: 'usermissdata.php?what=' + what + '&task=' + task + '&id=' + id,
        type: 'POST',
        success: function(data) {
            // alert(data);
            $("#rdata2").html(data);
        }
    });
}

// passord text hide and show
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function() {
    // alert("hello check");
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

const togglePassword1 = document.querySelector('#togglePassword1');
const password1 = document.querySelector('#password1');
togglePassword1.addEventListener('click', function() {

    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);

    this.classList.toggle('fa-eye-slash');
});

const togglePassword2 = document.querySelector('#togglePassword2');
const password2 = document.querySelector('#password2');
togglePassword2.addEventListener('click', function() {

    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);

    this.classList.toggle('fa-eye-slash');
});

function code() {
    var capcode;
    var f1 = Math.round(Math.random() * 9);
    var f2 = String.fromCharCode(Math.round(Math.random() * (90 - 65) + 65));
    var f3 = Math.round(Math.random() * 100);
    var f4 = String.fromCharCode(Math.round(Math.random() * (122 - 97) + 97));
    var f5 = String.fromCharCode(Math.round(Math.random() * (122 - 97) + 97)) + String.fromCharCode(Math.round(Math.random() * (90 - 65) + 65));
    capcode = f1 + f2 + f3 + f4 + f5;
    document.getElementById('captch').value = capcode;
}


//password and captcha check function
function checkpass() {
    var pass = document.getElementById('password').value;
    var repass = document.getElementById('password1').value;
    var captch = document.getElementById('captch').value;
    var ccaptch = document.getElementById('ccaptch').value;

    if (pass == repass && captch == ccaptch) {
        return true;
    } else {
        if (pass != repass) {
            document.getElementById("password1").value = "";
            alert("please check your password");
        }
        if (captch != ccaptch) {
            document.getElementById("ccaptch").value = "";
            alert("please check your captcha");
        }
        return false;
    }
}



//login_register form js

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));

let numFlakes = 50
let width = window.innerWidth
let height = window.innerHeight

function createFlake() {
    let flake = document.createElement("div")
    let flakeClass = "flake flake" + gsap.utils.random(1, 4, 1)
    flake.setAttribute("class", flakeClass)
    document.body.appendChild(flake)
    return flake
}

function animateFlake(flake) {

    let scaleFactor = Power3.easeIn(Math.random()) //change to easeOut for more larger flakes
    let scale = gsap.utils.interpolate(0.3, 2, scaleFactor)
    let duration = gsap.utils.interpolate(2, 4, 1 - scaleFactor)
    let opacity = gsap.utils.interpolate(0.5, 1, scaleFactor)
    gsap.set(flake, {
        y: -200,
        x: gsap.utils.random(0, width),
        scale: scale,
        opacity: opacity
    })
    gsap.to(flake, {
        y: height + 200,
        x: "+=200",
        duration: duration,
        delay: "random(0,4)",
        ease: "none",
        rotation: "random(-60, 200)",
        onComplete: animateFlake,
        onCompleteParams: [flake]
    })
}

for (let i = 0; i < numFlakes; i++) {
    let flake = createFlake()
    animateFlake(flake)
}

document.addEventListener("click", () => gsap.globalTimeline.paused(!gsap.globalTimeline.paused()))

//popup of add to cart
$(function() {
    // alert("help");
    $("#dialog").dialog({
        modal: true,
        autoOpen: false,
        title: "ADD TO CART",
        width: 500,
        height: 500
    });
    $("#btnShow").click(function() {
        $('#dialog').dialog('open');
    });
});

// tabecontent js of rating & review ,notes,Q/A,tutor
function openCity(evt, cityName) {
    // alert("heloo");
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();


// ============================================================filter function

function filterdata(ww, tt, ii) {

    $.ajax({
        url: 'filldata.php?ww=' + ww + '&tt=' + tt + '&ii=' + ii,
        type: 'POST',
        success: function(data) {
            // alert(data);
            // alert(ww);
            // alert(tt);
            // alert(ii);
            $("#filterdata").html(data);
        }
    });
}

function filtersubcatdata(wht, tsk, sid) {
    // alert(id);
    $.ajax({
        url: 'fill_sub_category_data.php?wht=' + wht + '&tsk=' + tsk + '&sid=' + sid,
        type: 'POST',
        success: function(data) {
            // alert(wht);
            // alert(sid);
            // alert(data);
            $("#filterdata").html(data);
        }
    });
}


//reset password
function resetpass() {
    // alert('hii');

    var dbpass = document.getElementById('dbpass');
    // alert(dbpass);
    var opass = document.getElementById('opass');
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('confirmMessage');
    var messagetwo = document.getElementById('confirmMessagetwo');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if (pass1.value == "" && pass2.value == "") {
        $('#cp').prop('disabled', true);
    } else if (pass1.value == pass2.value) {
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Confirm New Password Match!"
        $('#cp').prop('disabled', false);

    } else {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password Do Not Match!"
        $('#cp').prop('disabled', true);
    }
    if (dbpass.value == opass.value) {
        opass.style.backgroundColor = goodColor;
        messagetwo.style.color = goodColor;
        messagetwo.innerHTML = "Old Password Match!"
        $('#cp').prop('disabled', false);
        $(document).ready(function() {
            $("#formtwo").show();
        });
    } else {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        opass.style.backgroundColor = badColor;
        messagetwo.style.color = badColor;
        messagetwo.innerHTML = "Password Do Not Match!"
        $('#cp').prop('disabled', true);
        $(document).ready(function() {
            $("#formtwo").hide();
        });
    }
}

