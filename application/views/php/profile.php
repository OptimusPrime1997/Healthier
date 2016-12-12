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
            <h1 class="text-center">My Profile</h1>
            <div class="row pageInnerBg">
                <h4>Profile Information</h4>

                <img src='<?php echo base_url("/img/profile.png");?>' class="image150 m_inline">
                <button type="button" class="btn btn-defalut m_inline">Upload new picture</button>

                <div class="blank10"></div>
                <div class="form-group form-inline">
                    <label for="usernameinput">UserName: </label>
                    <input class="form-control" placeholder="UserName" id="usernameinput" type="text">
                </div>

                <div class="form-group form-inline">
                    <label for="usernameinput">Gendar: </label>
                    <div class="radio m_inline">
                        <label><input type="radio" name="optradio">Male </label>
                    </div>
                    <div class="radio m_inline">
                        <label><input type="radio" name="optradio">Female</label>
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="usernameinput">Birthday: </label>
                    <input class="form-control" placeholder="1998/09/18" id="usernameinput" type="text">
                </div>

                <div class="form-group form-inline">
                    <label for="provinceinput">Province: </label>
                    <input class="form-control" placeholder="Nanjing" id="provinceinput" type="text">
                </div>
                <div class="form-group form-inline">
                    <label for="habitinput">Sport Habit: </label>
                    <input class="form-control" placeholder="Run" id="habitinput" type="text">
                </div>
                <div class="form-group">
                    <label for="propagandainput">Propaganda: </label>
                    <textarea class="form-control" row="5" placeholder="Sport is everything!" id="propagandainput"
                              type="text"></textarea>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
include "footer.php";
?>

</html>