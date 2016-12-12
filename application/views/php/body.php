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
    <script src='<?php echo base_url("/js/mychart.js");?>' >
    </script>

</head>
<?php
include "navbar.php";
?>

<!--<h1><a href='<?php /*echo base_url("/css/healthier.css");*/?>'>TestBaseUrl</a></h1>-->
<div class="container">
    <!--    this sport aside html-->
    <?php
    include("php_part/sport_aside.php");
    ?>

    <div class="col-md-9 col-lg-9 pageBg">
        <div class="text-center">
            <h1>Body Management</h1>
        </div>
        <!--        row 1 display height weight bmi -->
        <div class="row ">
            <div class="box pageInnerBg">
                <div class="text-left">
                    <h3>Body Attribution</h3>
                </div>
                <div class="text-center">
                    <!--                    need to add picture-->
                    <h1>This is the your BMI on this space!</h1>
                </div>
                <div class="row">
                    <div class="blank10"></div>
                    <div class="col-md-4 col-lg-4 interval">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon inputHead">Height</span>
                            <input type="number" class="form-control" placeholder="<?php echo $height;?>">
                            <span class="input-group-addon"><span class="inputHead">kg</span></span>
                        </div>
                        <div class="blank10"></div>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon inputHead">Weight</span>
                            <input type="number" class="form-control" placeholder="<?php echo $weight;?>">
                            <span class="input-group-addon"><span class="inputHead">kg</span></span>
                        </div>
                        <div class="blank10"></div>
                    </div>

                    <div class="col-md-4 col-lg-4 interval">
                        <span class="blank10"></span>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon inputHead">Steplength(walk)</span>
                            <input type="number" class="form-control" placeholder="<?php echo $walk_steplength;?>">
                            <span class="input-group-addon"><span class="inputHead">cm</span></span>
                        </div>

                        <div class="blank10"></div>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon inputHead">Steplength(run )</span>
                            <input type="number" class="form-control" placeholder="<?php echo $run_steplength;?>">
                            <span class="input-group-addon"><span class="inputHead">cm</span></span>
                        </div>

                        <div class="blank10"></div>
                    </div>

                    <div class="col-md-4 col-lg-4">

                        <span class="blank10"></span>
                        <div class="text-center center-block">
                            <buton type="button" class="btn btn-success" id="save_btn">
                                <span class="glyphicon-floppy-save1"></span> Save
                            </buton>
                        </div>
                        <div class="blank10"></div>
                    </div>
                </div>
                <div class="row">
                    <hr class="toggle-divider">
                    <div>
                        <p class="ideal_weight">Your optimal weigth is <span class="optimal_num"><?php if(!empty($optimal_weight)){
                            echo $optimal_weight;}else{ echo 0;};?></span>kg.You need
                            absorb <span class="optimal_num"><?php echo $consume_calory;?></span> calories!</p>
                    </div>
                </div>
            </div>
        </div>

        <!--row2  weight change line-->
        <div class="row ">
            <div class="box pageInnerBg">
                <h3>Weight Line Chart</h3>
                <div>
                    <h1>This is your weight lineChart!</h1>
                </div>
                <div>
                    <p>You have lost <span class="optimal_num"><?php echo $lost_weight;?></span>kg since you joined Healthier.</p>
                </div>
                <div class="blank10"></div>
                <div class="col-log-8 colo-lg-offset-4 col-lg-8 col-lg-offset-41 toRight">
                    <div class="col-md-4 col-lg-4">
                        <span>Your target weigth: </span>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <input type="number" class="form-control" id="targetWeight"
                               placeholder="<?php echo $target_weight;?>">

                    </div>
                    <div class="col-md-1 col-lg-1">
                        <button class="btn-success">Change</button>
                    </div>
                </div>

            </div>
        </div>
        <!--row3 weight raw data-->
        <div class="row ">
            <div class="box pageInnerBg">
                <h3>Weight Raw Data</h3>
                <div id="weigthTable">
                    <table class="table table-bordered table-hover" id="weightData">
                        <thead>
                        <tr>
                            <th style="cursor: pointer">Time</th>
                            <th style="cursor: pointer">Weight(kg)</th>
                            <th style="cursor: pointer">Descend Rate</th>
                            <th style="cursor: pointer">Difference</th>
                            <th style="cursor:pointer">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>2016/10/01</td>
                            <td>60</td>
                            <td>1%</td>
                            <td>5</td>
                            <td>1</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <p>The Difference is the target weight minus now weight.</p>

                </div>
            </div>
        </div>
    </div>

</div>


<?php
include "footer.php";
?>

</html>


