// alert("hello tutor");
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

// alert("hello check");
const togglePassword1 = document.querySelector('#togglePassword1');
const password1 = document.querySelector('#password1');
togglePassword1.addEventListener('click', function() {

    // alert("hello i am checking");

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

// alert("hello");
// login js
$(document).ready(function() {

    $(".toggler").on("click", function() {
        $(".normal").toggleClass("flipped");
    });

});



//contact number limit
$(document).ready(function() {
    // alert("hello");
    $("#mobiledata").keyup(function() {
        // alert("hello");
        if (event.keyCode >= 48 && event.keyCode <= 57) {
            // alert("hello");
        } else {
            if (event.keyCode != 8) {
                $("#mobiledata").val("");
            }
        }
    });
});


function finddata(what, task, id) {
    // alert("hello finddata");
    $.ajax({

        // url: 'tutor_missdata.php?what=' + what + '&task=' + task + '&id=' + id,
        url: 'tutor_missdata.php?what=' + what + '&task=' + task + '&id=' + id,
        // data: 'task=' + task + 'id=' + id,
        type: 'post',
        success: function(data) {
            // alert(what);
            // alert(task);
            // alert(data);
            // alert(id);
            $('#fillme').html(data);

        }

    });
}


function up(what, task, id, count) {
    // alert("inside up");
    $.ajax({
        // url: 'tutor_missdata.php?what=' + what + '&task=' + task + '&id=' + id + '&total=' + count,
        url: 'tutor_missdata.php?what=' + what + '&task=' + task + '&id=' + id + '&total=' + count,
        type: 'post',
        success: function(data) {
            // alert(what);
            // alert(task);
            // alert(data);
            // alert(id);
            $("#fillme").html(data);
        }
    });
}
function up1(what, task, id, count) {
    // alert("inside up");
    $.ajax({
        // url: 'tutor_missdata.php?what=' + what + '&task=' + task + '&id=' + id + '&total=' + count,
        url: 'tutor_missdata.php?what=' + what + '&task=' + task + '&id=' + id + '&count=' + count,
        type: 'post',
        success: function(data) {
            // alert(what);
            // alert(task);
            // alert(data);
            // alert(id);
            // alert(count);
            $("#fillme").html(data);
        }
    });
}

function dropdownfill(wat, id) {

    $.ajax({
        url: 'miss_subdata.php?wat=' + wat + '&id=' + id,
        type: 'POST',
        success: function(data) {
            // alert("hello inside ajax");
            // alert(data);
            // alert(wat);
            // alert(id);
            $("#" + wat).html(data);

        }
    });
}

// function findbox(box) {
//     $.ajax({

//         url: 'titledata.php?box=' + box,
//         type: 'POST',

//         success: function(data) {
//             alert(data);

//             $("#fillme").html(data);
//         }
//     });
// }
var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
    vid.classList.add("stopfade");
}

vid.addEventListener('ended', function() {
    // only functional if "loop" is removed 
    vid.pause();
    // to capture IE10
    vidFade();
});

//mobile validation
$(document).ready(function() {
    // alert("hello");
    $("#mobiledata").keyup(function() {
        // alert("hello");
        if (event.keyCode >= 48 && event.keyCode <= 57) {
            // alert("hello");
        } else {
            if (event.keyCode != 8) {
                $("#mobiledata").val("");
            }
        }
    });
});

pauseButton.addEventListener("click", function() {
    vid.classList.toggle("stopfade");
    if (vid.paused) {
        vid.play();
        pauseButton.innerHTML = "Pause";
    } else {
        vid.pause();
        pauseButton.innerHTML = "Paused";
    }
})

//password  check function
function checkpass1() {
    var pass = document.getElementById('password').value;
    var repass = document.getElementById('password1').value;


    if (pass == repass) {
        return true;
    } else {
        if (pass != repass) {
            document.getElementById("password1").value = "";
            alert("please check your password");
        }

        return false;
    }
}