<!DOCTYPE html>
<html lang="en">

<head>

	<?php
	include "php_part/meta.php";
	?>

	<title>Healthier</title>

	<!-- Custom CSS -->
	<link href='<?php echo base_url("/css/healthier.css"); ?>' rel="stylesheet">
	<link href='<?php echo base_url("/css/sport.css"); ?>' rel="stylesheet">
	<link rel="stylesheet" href='<?php echo base_url("/css/normalize.css"); ?>'>
	<link rel="stylesheet" href='<?php echo base_url("/css/asPieProgress.css"); ?>'>

	<script src="http://echarts.baidu.com/dist/echarts.min.js"></script>

</head>

<?php
include "navbar.php";
?>

<div class="container">

	<?php
	include "php_part/sport_aside.php";
	?>

	<script src="http://echarts.baidu.com/dist/echarts.min.js"></script>
	<script src='<?php echo base_url("/js/jquery.js"); ?>'></script>
	<script src='<?php echo base_url("/js/jquery-asPieProgress.js"); ?>'></script>
	<script src='<?php echo base_url("/js/circle_progress.js"); ?>'></script>


	<div class="col-lg-9 col-md-9">
		<div class="row pageBg">
			<div class="box pageInnerBg">
				<div class="text-left">
					<h1>Sleep Management</h1>
				</div>
				<div class="flow-line">
					<!--with calendar button-->
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
								data-toggle="dropdown">
							Dropdown
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">2016.10.18</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">2016.10.17</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">2016.10.16</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">2016.10.15</a></li>
						</ul>
					</div>
					<h3>Sleep Status</h3>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="text-center">
						<div class="text-center">
							<div class="pie_progress image200" id="target-graph" role="progressbar" data-goal="<?php echo $sleep_effectiveness ?>">
								<div class="pie_progress__content">
									<h5><h5
											class="optimal_num"><?php echo $sleep_effectiveness;?>%</h5>
									</h5>
								</div>
								<!--<div class="pie_progress__number"><span class="optimal_num">3</span> Days-->
							</div>
							<script>
								jQuery(function ($) {
									$('.pie_progress').asPieProgress({
										namespace: 'pie_progress'
									});
									$('.pie_progress').asPieProgress('start');
								});
							</script>
							<!--<h5>Sport target complete<span class="optimal_num">50%</span></h5>-->
						</div>
						<div class="blank10"></div>
						<h5>Sleep Effectiveness</h5>
					</div>

				</div>
				<div class="col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
					<div class="text-center">
						<img class="image200" src='<?php echo base_url("/img/total_sleep.png");?>'><img>
						<h5>Sleep Total Time is <span class="optimal_num"><?php echo $sleep_total_time;?></span></h5>
					</div>
				</div>

				<div class="col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
					<div class="text-center">
						<img class="image200" src='<?php echo base_url("/img/sleep.png");?>' ><img>
						<h5>Effective Sleep Time is <span class="optimal_num"><?php echo $sleep_effective_time;?></span></h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row pageBg">
			<div class="box pageInnerBg">
				<div>
					<div class="text-left">
						<h1>Sleep Linechart</h1>
					</div>
					<div id="sleepLineChart" style="height:300px;padding:5px;">

					</div>
					<script>
						var sleepChart = echarts.init(document.getElementById("sleepLineChart"));
						option = {
							title: {
								text: 'Sleep Line'
							},
							tooltip: {
								trigger: 'axis'
							},
							legend: {
								data: ['Step Start', 'Step Middle', 'Step End']
							},
							grid: {
								left: '3%',
								right: '4%',
								bottom: '3%',
								containLabel: true
							},
							/*toolbox: {
							 feature: {
							 saveAsImage: {}
							 }
							 },*/
							xAxis: {
								type: 'category',
								data: ['23:00', '00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00']
							},
							yAxis: {
								type: 'value'
							},
							series: [
								{
									name: 'Step Start',
									type: 'line',
									step: 'start',
									data: [120, 132, 101, 134, 90, 230, 210, 250, 300]
								}
								/*,{
								 name: 'Step Middle',
								 type: 'line',
								 step: 'middle',
								 data: [220, 282, 201, 234, 290, 430, 410]
								 },
								 {
								 name: 'Step End',
								 type: 'line',
								 step: 'end',
								 data: [450, 432, 401, 454, 590, 530, 510]
								 }*/
							]
						};
						sleepChart.setOption(option);
					</script>
					<div class="text-right1">
						<h4>People need sleep at least <span class="optimal_num">8</span> hours everyday.</h4>
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