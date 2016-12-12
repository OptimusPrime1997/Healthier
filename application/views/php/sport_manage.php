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
	<link href='<?php echo base_url("/css/body.css"); ?>' rel="stylesheet">
	<link href='<?php echo base_url("/css/sport_manage.css"); ?>' rel="stylesheet">
	<link rel="stylesheet" href='<?php echo base_url("/css/normalize.css"); ?>'>
	<link rel="stylesheet" href='<?php echo base_url("/css/asPieProgress.css"); ?>'>
	<script src="<?php base_url('/js/mychart.js'); ?>"></script>
</head>
<?php
include "navbar.php";
?>

<div class="container">
	<!--    this sport aside html-->
	<?php
	include("php_part/sport_aside.php");
	?>

	<script src="http://echarts.baidu.com/dist/echarts.min.js"></script>
	<script src='<?php echo base_url("/js/jquery.js"); ?>'></script>
	<script src="<?php base_url('/js/mychart.js'); ?>"></script>

	<script src='<?php echo base_url("/js/circle-progress.js"); ?>'></script>
	<script src='<?php echo base_url("/js/jquery-asPieProgress.js"); ?>'></script>
	<div class="col-md-9 col-lg-9 pageBg">
		<div class="text-center">
			<h1>Sport Management</h1>
		</div>
		<!--        row 1 display height weight bmi -->

		<div class="row">
			<div class="box pageInnerBg">
				<div class="text-left">
					<h3>Sport Status</h3>
				</div>
				<div>
					<!--                    the three picture need to replace-->
					<!--                    target complete percentage-->
					<div class="col-md-4 col-lg-4 interval">
						<!--<img class="tempImg" src="../img/profile.png">-->
						<div class="text-center">
							<div class="pie_progress image150" id="target-graph" role="progressbar" data-goal="100">
								<div class="pie_progress__content"><h6>Walk</h6>
									<h5><h5
											class="optimal_num"><?php echo($latest_step); ?></h5>
										steps
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
							<h5></h5>
						</div>
					</div>

					<!--    sport distance-->
					<div class="col-md-4 col-lg-4 interval">
						<img class="tempImg image150" src='<?php echo base_url("/img/distance.png"); ?>'>
						<h5>Run <span class="optimal_num"><?php echo $latest_meter; ?></span>km</h5>
					</div>

					<!--consume calories-->
					<div class="col-md-4 col-lg-4">
						<img class="tempImg image150" src="../img/fire.png">
						<h5>Consume <span class="optimal_num"><?php echo $latest_calory; ?></span>calories</h5>
					</div>
				</div>
			</div>
		</div>

		<!--row2  weight change line-->
		<div class="row">
			<div class="box pageInnerBg">
				<div class="text-left">
					<h3>Sport Data</h3>
				</div>
				<div class="blank10"></div>
				<div class="toRight">
					<div class="btn-group">
						<input class="hidden" id="index_id" value="step">
						<button type="button" id="step-btn" class="btn btn-default changeIndex-btn btn " value="meter">Meters</button>
						<button type="button" class="btn btn-default changeIndex-btn" value="step">Steps</button>
						<button type="button" class="btn btn-default changeIndex-btn" value="calory">Calories</button>
					</div>
				</div>

				<div>

					<div id="chartArea" style="height:300px;padding:5px;">

					</div>
					<script>
						/*get max item of the array*/
						function getMax(parameter) {
							var tempMax = -10000;
							var length = parameter.length;
							for (var i = 0; i < length; i++) {
								if (tempMax < parameter[i]) {
									tempMax = parameter[i];
								}
							}
							return tempMax;
						}
						function getDataArray(sArray, index) {
							var result = [];
//							console.log('getDataArray->sArray:');
//							console.log(sArray);
							for (var i = 0; i < sArray.length; i++) {
								result[i] = sArray[i][index];
//								console.log('sArray->'+i+'--'+index);
//								console.log(result[i]);
							}
							return result;
						}

						function drawSportChart(php_dataAxis, php_data,index) {
							var chart = document.getElementById("chartArea");
							var myChart = echarts.init(chart);
//							console.log(php_dataAxis);
							var dataAxis = php_dataAxis;
							//						var dataAxis = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'];
//							var index = $('#index_id').val();
//							console.log(php_data);
							var data = getDataArray(php_data, index);
							//						var data = [220, 182, 191, 234, 290, 330, 310, 123, 442, 321, 90, 149, 210, 122, 133, 334, 198, 123, 125, 220];
							var yMax = getMax(data);
							var dataShadow = [];

							for (var i = 0; i < data.length; i++) {
								dataShadow.push(yMax);
							}

							option = {
								title: {
									text: 'Sport Line Chart',
									subtext: 'per day'
								},
								xAxis: {
									data: dataAxis,
									axisLabel: {
										inside: true,
										textStyle: {
											color: '#fff'
										}
									},
									axisTick: {
										show: false
									},
									axisLine: {
										show: true
									},
									z: 10
								},
								yAxis: {
									axisLine: {
										show: true
									},
									axisTick: {
										show: true
									},
									axisLabel: {
										textStyle: {
											color: '#999'
										}
									}
								},
								dataZoom: [
									{
										type: 'inside'
									}
								],
								series: [
									{ // For shadow
										type: 'bar',
										itemStyle: {
											normal: {color: 'rgba(0,0,0,0.05)'}
										},
										barGap: '-100%',
										barCategoryGap: '40%',
										data: dataShadow
									},
									{
										type: 'bar',
										itemStyle: {
											normal: {
												color: new echarts.graphic.LinearGradient(
													0, 0, 0, 1,
													[
														{offset: 0, color: '#83bff6'},
														{offset: 0.5, color: '#188df0'},
														{offset: 1, color: '#188df0'}
													]
												)
											},
											emphasis: {
												color: new echarts.graphic.LinearGradient(
													0, 0, 0, 1,
													[
														{offset: 0, color: '#2378f7'},
														{offset: 0.7, color: '#2378f7'},
														{offset: 1, color: '#83bff6'}
													]
												)
											}
										},
										data: data
									}
								]
							};

							// Enable data zoom when user click bar.
							var zoomSize = 6;
							myChart.on('click', function (params) {
//								console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
								myChart.dispatchAction({
									type: 'dataZoom',
									startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
									endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
								});
							});
							myChart.setOption(option);
						}
						var php_dataAxis =<?php echo $dateAxisJson;?>;
						var php_data =<?php echo $dataAxisJson;?>;
						drawSportChart(php_dataAxis,php_data,$('#index_id').val());
						jQuery(function ($) {
							//已有删除按钮初始化绑定删除事件
							$(".changeIndex-btn").click(function () {
								if(!($('#index_id').val() ==$(this).val())){
									$('#index_id').value= $(this).val();
									drawSportChart(php_dataAxis,php_data,$(this).val());
								}
								$(".changeIndex-btn").removeClass("selected");
								$(".changeIndex-btn").removeClass("disable");
								$(this).addClass("selected");
								$(this).addClass("disable");
							});
							/*$(".changeIndex-btn").toggle(
								function () {

								}

							);*/
						});
						//						$('#step-btn').click();

					</script>
					<script>


						//					function changeIndex(element){
						//						$("#index_id").value=element.value;
						//					}
						//					$(document).ready(function(){
						//						$('changeIndex-btn').click(changeIndex($this));//使用click()函数添加监听响应函数
						//					});
					</script>
				</div>

				<!--				<div class="text-center">-->
				<!--					<p><span class="min_img"><img class="min_img" src='-->
				<?php //echo base_url("/img/blue.png"); ?><!--'></span>Mild-->
				<!--						Sport-->
				<!--						<span class="min_img"><img class="min_img"-->
				<!--												   src='-->
				<?php //echo base_url("/img/green.png"); ?><!--'></span>Moderate Sport-->
				<!--						<span class="min_img"><img class="min_img"-->
				<!--												   src='-->
				<?php //echo base_url("/img/orange.png"); ?><!--'></span>Severe Sport-->
				<!--					</p>-->
				<!--				</div>-->

				<div class="blank10"></div>
				<div class="col-lg-8 colo-lg-offset-4 col-lg-8 col-lg-offset-41 toRight">
					<div class="col-md-4 col-lg-4">
						<span>Weigth is </span>
					</div>
					<div class="col-md-3 col-lg-3">
						<input type="number" class="form-control" id="targetWeight"
							   placeholder="<?php echo $latest_weight; ?>" value="<?php echo $latest_weight; ?>">
					</div>
					<div class="col-md-1 col-lg-1">
						<button class="btn-success">Change</button>
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