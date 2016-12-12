<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="text/html">
	<meta name="author" content="Jinhong Luo">

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
	include "php_part/activity_aside.php";
	?>
	<div class="col-md-9 pageBg">

		<div class="pageInnerBg">
			<div class="row ">
				<div class="box ">
					<div class="text-center">
						<span class="little-title">Activity Information</span>
					</div>
					<div class="blank20"></div>
					<h4 class="m_inline">Competition Name:</h4>
					<h3 class="m_inline">NJU RUN</h3>

					<div class="blank20"></div>
					<h4 class="m_inline">Competition Type:</h4>
					<h3 class="m_inline">Individual</h3>
					<div class="blank20"></div>
					<div class="col-md-2 col-lg-2 col-md-offset-3 col-lg-offset-3 m_inline text-center">
						<img class="image100" src='<?php echo base_url("/img/profile.png");?>'>
						<h5>OptimusPrime</h5>
					</div>
					<div class="col-md-2 col-lg-2  m_inline  text-center">
						<h1>VS</h1>
					</div>
					<div class="col-md-2 col-lg-2  m_inline">
						<div class="text-center">
							<img class="image100" src='<?php echo base_url("/img/question.png");?>'>
							<button type="button" class="btn btn-success"><span
									class="glyphicon glyphicon-log-in"></span>
								Join
								in
							</button>
						</div>
					</div>

				</div>
			</div>

			<div class="row ">
				<div class="box">
					<div class="col-md-5 col-lg-5 m_inline">
						<img class="image50 m_inline" src='<?php echo base_url("/img/time.png");?>'>
						<div class="m_inline">
						<span class="text-center">
							<span><span class="font-size15">1</span>day <span class="font-size15">18</span>hour left to
								start<br><span>11-03 08:00</span> to <span>11-30 23:59</span></span></span>
							</span>
						</div>
					</div>
					<div class="col-md-5 col-lg-5 col-md-offset-2 col-lg-offset-2 m_inline">
						<img class="image50 m_inline" src='<?php echo base_url("/img/money.png");?>'>
						<div class="m_inline">
						<span>
							<span class="font-size15">100</span> scores<br>
							Security deposit:<span class="font-size15">100</span> score Winner get all
						</span>

						</div>
					</div>
				</div>
			</div>


			<div class="row ">
				<div class="box">
					<h3>Participant</h3>
					<div class="col-md-5 col-lg-5">

						<img class="image100 m_inline" src='<?php echo base_url("/img/time.png");?>'>
						<div class="m_inline">
						<span>
						<span class="font-size15">OptimusPrime</span><br>
						<span class="font-size15">9000</span> steps
					</span>
						</div>
					</div>

					<div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">
						<img class="image100 m_inline" src='<?php echo base_url("/img/run2.png");?>'>
						<span class="m_inline">
						<span class="font-size15">Jack</span><br>
						<span class="font-size15">10000</span> steps
					</span>
					</div>


				</div>


			</div>
		</div>
	</div>


	<?php
	include "footer.php";
	?>

</div>

</html>