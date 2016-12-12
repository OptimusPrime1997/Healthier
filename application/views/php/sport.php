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
	<script src='<?php echo base_url("/js/circle_progress.js"); ?>'></script>
	<!--<script src='<?php /*echo base_url("/js/jquery-asPieProgress.js"); */ ?>'></script>-->
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
	<div class="col-md-9 col-lg-9">
		<div class="row pageBg">
			<h1 class="text-center">My Sport</h1>

			<div class="row">
				<div class="box pageInnerBg">
					<div class="text-left">
						<h2>My total data</h2>
					</div>
					<div class="row">
						<div class="col-md-3 col-lg-3">
							<div class="text-center">
								<!--<img class="chart" src="../img/circleChart.png"><img>-->
								<img class="image150" src='<?php echo base_url("/img/total.png"); ?>'><img>

								<h5>Accumulative Kilometers is <span
										class="optimal_num"><?php echo $accumulate_distance; ?></span>km</h5>
							</div>
						</div>
						<div class="col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
							<div class="text-center">
								<img class="image150" src="../img/day.png"><img>
								<h5>Accumulative Days is <span class="optimal_num"><?php echo $accumulate_day; ?></span>
								</h5>
							</div>
						</div>
						<div class="col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
							<div class="text-center">
								<img class="image150" src="../img/fire.png"><img>
								<h5>Accumulative Calories is <span
										class="optimal_num"><?php echo $accumulate_calory; ?></span></h5>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row ">
				<div class="box pageInnerBg">
					<div>
						<div class="text-left">
							<h2>My rank within your friends</h2>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="text-center">
									<img class="image150" src='<?php echo base_url("/img/rank.png"); ?>'><img>
									<h5>The <span class="optimal_num"><?php echo $my_rank; ?></span>rd place!</h5>
								</div>
							</div>

							<div class="col-md-4 col-lg-4">
								<div class="text-center">
									<div class="pie_progress image180" id="sleep-graph" role="progressbar"
										 data-goal="<?php echo($defeat_rate ); ?>">
										<div class="pie_progress__content"><h6>Defeat </h6><h5><span
													class="optimal_num"><?php echo($defeat_rate ); ?></span>
												% people</h5></div>
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
									<h5>Defeate <span class="optimal_num"><?php echo $defeat_rate; ?></span>%
										people</h5>
								</div>
							</div>

							<div class="col-md-4  col-lg-4 ">
								<div class="text-center">
									<img class="image150" src='<?php echo base_url("/img/weight.png"); ?>'><img>
									<h6>Weight is<span class="optimal_num"><?php echo $my_weight; ?></span>kg</h6>
								</div>
							</div>
						</div>
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