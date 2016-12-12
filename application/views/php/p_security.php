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

    <?php
    include "php_part/profile_aside.php";
    ?>
    <div class="col-md-9 col-lg-9">
        <div class="row pageBg">
            <h1 class="text-center">Account Security</h1>
            <div class="row pageInnerBg">
                <h4>Change Password</h4>


                <div class="blank10"></div>
                <div class="form-inline">
                    <div class="form-group  has-success has-feedback">
                        <label for="cpasswordinput">Current Password: </label>
                        <input class="form-control" placeholder="current password" id="cpasswordinput" type="text">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                </div>
'<div class="blank10"></div>
                <div class="form-group form-inline">
                    <label for="npasswordinput">New Password: </label>
                    <input class="form-control" placeholder="new password" id="npasswordinput" type="text">
                </div>
                <div class="blank10"></div>
                <div class="form-inline">
                    <div class="form-group  has-success has-feedback">
                        <label for="rpasswordinput">Confirm Password: </label>
                        <input class="form-control" placeholder="confirm password" id="rpasswordinput" type="text">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                </div>
                <div class="blank10"></div>
                <div class="text-center">
                    <button class="btn btn-success">Save</button>
                </div>

            </div>
        </div>

    </div>

</div>

<?php
include "footer.php";
?>

</html>