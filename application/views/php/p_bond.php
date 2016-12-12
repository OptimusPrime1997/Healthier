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
            <h1 class="text-center">Bond Account</h1>
            <div class="row pageInnerBg">
                <h4>My Bond Account</h4>
                <div class="blank10"></div>

                <div class="row m_inline">
                    <div class="col-md-4 col-lg-4 text-center m_inline">
                        <h5>QQ</h5>
                        <div>
                            <img src='<?php echo base_url("/css/activity.css");?>' class="image100">
                        </div>
                        <div class="blank10"></div>
                        <button type="button" class="btn btn-defalut btn-success">Bonded</button>
                    </div>

                    <div class="  col-md-4 col-lg-4 text-center m_inline">
                        <h5>Wechat</h5>
                        <div>
                            <img src='<?php echo base_url("/css/activity.css");?>' class="image100">
                        </div>
                        <div class="blank10"></div>
                        <button type="button" class="btn btn-defalut  btn-warning">To Bond</button>
                    </div>

                    <div class="col-md-4 col-lg-4  text-center m_inline">
                        <h5>Weibo</h5>
                        <div>
                            <img src='<?php echo base_url("/css/activity.css");?>' class="image100">
                        </div>
                        <div class="blank10"></div>
                        <button type="button" class="btn btn-defalut  btn-warning">To Bond</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
include "footer.php";
?>

</html>