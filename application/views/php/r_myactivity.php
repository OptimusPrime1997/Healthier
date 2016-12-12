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
    <link href='<?php echo base_url("/css/activity.css");?>' rel="stylesheet">
    <script src='<?php echo base_url("/js/mychart.js");?>' ></script>
    <script src="http://echarts.baidu.com/dist/echarts.min.js"></script>

</head>

<?php
include "navbar.php";
?>

<div class="container">

    <?php
    include "php_part/race_aside.php";
    ?>
    <div class="col-md-9">
        <div class="row pageBg">
            <div class="box pageInnerBg">
                <div class="text-left">
                    <span class="little-title">My Activities</span>
                </div>


                <!-- <div class="btn-group m_inline">
                     <button type="button" id="act_type" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                         All Activities
                         <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu" role="menu">
                         <li><a href="#">All Activities</a></li>
                         <li><a href="#">My Activities</a></li>
                         <li><a href="#">Dicovery</a></li>
                     </ul>
                 </div>-->
                <div class="blank10"></div>

                <input type="text" class="form-control m_inline width80" placeholder="Enter activity name">

                <span>
                            <button class="btn btn-success">
                                <span
                                    class="glyphicon glyphicon-search">
                                </span> Search
                            </button>
                     </span>

                <div class="blank10"></div>
                <div class="divider-line"></div>
                <div class="blank10"></div>
                <div class="text-center">
                    <div id="activityTable">
                        <table class="table table-bordered table-hover text-center" id="activityData">
                            <thead>
                            <tr>
                                <th style="cursor: pointer;" class="text-center">Name</th>
                                <th style="cursor: pointer" class="text-center">Joined Number</th>
                                <th style="cursor: pointer" class="text-center">Sport Type</th>
                                <th style="cursor: pointer" class="text-center">Time to Start</th>
                                <th style="cursor:pointer" class="text-center">Activity Type</th>
                                <th style="cursor:pointer" class="text-center">Status/Result</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>NJU Run</td>
                                <td>6</td>
                                <td>Steps</td>
                                <td>10.5 hours</td>
                                <td>Individual</td>
                                <td>Success</td>
                            </tr>
                            </tbody>
                        </table>
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