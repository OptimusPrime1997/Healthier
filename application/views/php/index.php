<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "php_part/meta.php";
    ?>
    <title>Healthier</title>
    <!-- Custom CSS -->
    <link href='<?php echo base_url("/css/healthier.css");?>' rel="stylesheet">
    <script src='<?php echo base_url("/js/jquery.js"); ?>'></script>
</head>

<?php
include "navbar.php";
?>

<div class="container">

    <?php
    include "php_part/index_part.php";
    ?>

    <div class="col-md-9 col-lg-9 pageBg">
        <div class="text-center">
            <h1>Healthier</h1>
        </div>
        <div class="row">
            <div class="box pageInnerBg">
                <div class="text-left">
                    <h2>My Recording</h2>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img class="image150" src='<?php echo base_url("/img/day.png");?>'>
                        <h4><span class="num"><?php echo $total_day;?></span> days in Healthier</h4>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img class="image150" src='<?php echo base_url("/img/run.png");?>'>
                        <h4>Run　<span class="num"><?php echo $total_distance;?></span> m</h4>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <div class="image150 " id="fire-sprite"></div>
                        <h4>Consumed　<span class="num"><?php echo $total_calory;?></span> calories</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box pageInnerBg">
                <div class="row">
                    <h2 class="text-left">My Achievement!</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="image150 " id="award-d-sprite"></div>
                        <h4>Walk <span class="optimal_num"><?php echo $max_day_step;?></span> steps a day</h4>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <image class="image150" src='<?php echo base_url("/img/award-c.png");?>'></image>
                        <h4>Run <span class="optimal_num"><?php echo $max_day_distance;?></span>km a day</h4>
                    </div>
                    <div class="col-md-4 col-lg-4">
                       <div class="image150" id="award-r-sprite"></div>
                        <h4>Fire <span class="optimal_num"><?php echo $max_day_calory;?></span> Calories a day</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--container closed-->
</div>

<?php
include "footer.php";
?>
</html>


