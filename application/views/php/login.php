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
	<script src='<?php echo base_url("/js/jquery.js"); ?>'></script>

</head>

<?php
include "navbar.php";
?>

<?php /*echo validation_errors(); */ ?><!--
--><?php /*echo form_open('login/formsubmit'); */ ?>

<div class="container">


	<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
		<div class="row pageBg">
			<div class="box pageBg">
<!--				--><?php //echo validation_errors(); ?>

<!--				--><?php //echo form_open('controller_impl/login_c/checkLogin'); ?>
<form action="<?php echo base_url('/controller_impl/login_c/checkLogin');?>" method="post">
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Username</span>
						<input type="text" name="username" id="Username" class="form-control" placeholder="Input your username">
					</div>
					<div class="blank40"></div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Password</span>
						<input type="text" name="password" class="form-control" placeholder="Enter your password">
					</div>
					<div class="blank20"></div>
					<div class="row  m_inline">
						<div class="col-md-2 col-lg-2 col-md-offset-2 col-lg-offset-2 m_inline m_left m_margin-left0">
							<a href="#" class="m_inline ">Forget password</a>
						</div>
						<div class="col-md-2 col-lg-2 col-md-offset-2 col-lg-offset-2 m_inline text-center">

								<button type="submit" class="btn btn-success" id="submitBt" onsubmit="testUsername()">
									<span class="glyphicon glyphicon-log-in"></span> Submit
								</button>

						</div>
						<div class="col-md-2 col-lg-2 col-md-offset-2 col-lg-offset-2 m_right">
							<a href='sign_up_c'
							   class="m_right non_dec">Sign up</a>
						</div>
					</div>
				</form>
				<script>
					function testUsername(){
						var name=$('#Username').val();
						var reg=new RegExp('[0-9]','g');
//						alert('excute');
						if(reg.exec(name)==null){
							return true;
						}else{
							alert('用户名中只能使字母');
							return false;
						}

					}
					jQuery(function($){
						$('#submitBt').click(testUsername);
					});
				</script>
			</div>
		</div>
	</div>
</div>

<?php
include "footer.php";
?>

</html>