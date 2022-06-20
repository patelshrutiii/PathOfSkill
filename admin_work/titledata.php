<?php
require_once "connection.php";
$_SESSION['box']=$_REQUEST['box'];
if($_SESSION['box']=="dashboard")
{
    ?>
<div class="container">
    <div class="row" style="margin-top: 20px;">

        <div class="col-md-9">
            <h2 style="margin-left:200px;letter-spacing: 1px; text-shadow: 2px 2px 3px #8342F6;word-space:">
            <!-- hey!!!Radhika and Shruti -->
            hello Admin!
        </h2>
        </div>
        <div class="">

            </hr>
        </div>
        <div class="col-md-4">

        </div>

    </div>

    <?php
}
else{
?>
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-9">
                <h2 style="margin-left:200px;letter-spacing: 1px; text-shadow: 2px 2px 3px #8342F6;word-space:">
                <!-- hey!!! Radhika and Shruti -->
                hello Admin!
            </h2>
            </div>

            <div class="col-md-2">
                <form class="example" style="width:500px;">
                    <input type="text" id="searchdata" placeholder="<?php echo $_SESSION['box'];?>"
                        onkeyup="finddata('<?php echo $_SESSION['box'];?>','search',this.value)" />
                    <i class="anticon anticon-delete text-danger"
                        ondbclick="finddata('<?php echo $_SESSION['box'];?>','deleteall',0)"></i>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>