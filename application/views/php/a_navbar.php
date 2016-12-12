<body>

<a href="login_c" class="brand non_dec"><span>
    <img class="logo" src='<?php echo base_url("/img/logo.png");?>'>
</span>Healthier
</a>


<!-- Navigation -->
<nav class="navbar navbar-defalut" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<!--<button type="button" class="logo-graph">
				<span class="icon-bar" ></span>
				<image class="logo" src="../img/logo.png"></image>
			</button>-->
			<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
			<a class="navbar-brand brand" href="index.html"><span>
    <img class="logo" src="<?php echo base_url('/img/logo.png');?>" >
</span>Healthier</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav addMargin">
				<li>
					<a href="index_controller">Home</a>
				</li>
				<!--<li>
					<a href="sport_controller">Sport</a>
				</li>
				<li>
					<a href="friend_controller">Friend</a>
				</li>
				<li>
					<a href="race_controller">Race</a>
				</li>-->

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login_c">
						<button type="button" class="btn btn-success" id="loginBt">
							<span class="glyphicon glyphicon-log-in"></span><?php if(!empty(get_cookie('username'))){
								echo " LOG OUT";
							}else{
								echo " SIGN IN/UP";
							}?>
						</button>
					</a>
				</li>

			</ul>

		</div>

		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
