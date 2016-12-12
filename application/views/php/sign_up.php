<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include "php_part/meta.php";
    ?>

    <title>Healthier</title>

    <!-- Custom CSS -->
    <link href='<?php echo base_url("/css/healthier.css");?>' rel="stylesheet">
    <link href='<?php echo base_url("/css/sport.css");?>' rel="stylesheet">


</head>

<?php
include "navbar.php";
?>

<div class="container">


    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 ">
        <div class="row pageBg">
            <div class="box pageInnerBg">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Username</span>
                    <input type="text" class="form-control" placeholder="Enter your username">
                </div>
                <div class="blank10"></div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Password</span>
                    <input type="text" class="form-control" placeholder="Enter your password">
                </div>
                <div class="blank10"></div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Password</span>
                    <input type="text" class="form-control" placeholder="Confirm your password">
                </div>
                <div class="blank20"></div>
                <div>
                    <span class="m_inline">Already had an account</>
                    <a href="login_c" class="m_right non_dec">Sign in</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>

</html>