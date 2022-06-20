//  alert("hello");
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
//auto focus otp
$(document).ready(function() {
    // alert("hello shruti");
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
//otp validation

function finddata(what, task, id) {
    // alert("hi i am inside the finddata");

    if (what == "otpmobile") {
        // alert(what);
        task = document.getElementById("mobiledata").value;
        if (task.length == 10) {
            if (/\d/.test(task)) {

            } else {
                $("#mobiledata").addclass("animated shake");
                return false;
            }

            if (task == "6354697128" || task == "9265609414") {

                var msg = id + "is otp to proceed with admin login do not share anyone";
                // alert(id);
                window.open('http://219.90.67.240/vendorsms/pushsms.aspx?mobile=' + task +
                    '&message=' + msg, '_blank');
            }
        }
    }
    if (task == "search" && id == "") {
        id = 1;
        task = "";

    }

    $.ajax({

        url: 'missdata.php?what=' + what + '&task=' + task + '&id=' + id,
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

function findbox(box) {
    $.ajax({

        url: 'titledata.php?box=' + box,
        type: 'POST',

        success: function(data) {
            // alert(data);

            $("#titledata").html(data);
        }
    });
}

function dropdownfill(wat, id) {
    $.ajax({
        url: 'miss.php?wat =' + wat + '&id=' + id,
        type: 'POST',
        success: function(data) {
            // alert(data);
            // alert(wat);
            // alert(id);
            $("#" + wat).html(data);
            // $("#selectid").html(data);
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
            alert(what);
            alert(task);
            // alert(data);
            // alert(id);
            // alert(count);
            $("#fillme").html(data);
        }
    });
}