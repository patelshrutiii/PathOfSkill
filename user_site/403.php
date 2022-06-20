<?php
  require_once "connection.php";
  SESSION_DESTROY();
  require_once "header.php";
//   require_once "stickymenu.php";

  ?>
<html>

<body>
    <div class="container">
        <div class="row" style="color:grey;">
            <div class="col-md-3">
            </div>
            <div class="col-md-9">
                <img src="img/403.gif" style="height:700px;">
            </div>
        </div>
        <div class="row" style="color:grey;">
        <div class="col-md-2"></div>
            <div class="col-md-9">
            <h1 style="margin-top: 40px;color: #3c3b3b;">Admin has deactivated you. <br>Please refere to your system administrator.</h1>

            <a href="index" style="background:#407BFF;color:#fff;border-radius:5px;border:transparent;padding:10px;">Go Back Home</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php

//   require_once "footer.php";
  require_once "script.php";

  ?>