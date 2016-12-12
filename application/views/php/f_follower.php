<!DOCTYPE html>
<html lang="en">

<head>

	<?php
	include "php_part/meta.php";
	?>

	<title>Healthier</title>

	<!-- Custom CSS -->
	<link href='<?php echo base_url("/css/healthier.css");?>' rel="stylesheet">
	<link href='<?php echo base_url("/css/healthier.css");?>' rel="stylesheet">

	<script src="http://echarts.baidu.com/dist/echarts.min.js"></script>

</head>

<?php
include "navbar.php";
?>

<div class="container">

	<?php
	include "php_part/friend_aside.php";
	?>
	<div class="col-md-9 col-lg-9">
		<div class="row pageBg">
			<div class="text-center">

				<div class="m_inline">
					<span class="optimal_num text-center">Friends</span>
				</div>
				<!--<div class="btn-group right">
					<button type="button" class="btn btn-default">Following</button>
					<button type="button" class="btn btn-default">Follower</button>
					<button type="button" class="btn btn-default">Discovery</button>
				</div>-->
			</div>
			<div class="box pageInnerBg">
				<div class="block-line">
					<div class="text-left ">
						<span id="little-title">Followers</span>
					</div>

					<div class="blank10"></div>
					<div class="m_inline form-inline">
						<input type="text" class="form-control m_inline" placeholder="Enter you friend name">
						<button class="btn btn-success m_inline"><span class="glyphicon glyphicon-search"></span> Search</button>
					</div>
					<div class="blank10"></div>
				</div>


				<div class="text-left">
					<ul>
						<li><a href="#">windkl</a></li>
						<li><a href="#">originkl</a></li>
						<li><a href="#">bismuth</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
include "footer.php";
?>

</html>