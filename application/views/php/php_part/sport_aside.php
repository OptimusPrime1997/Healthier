<div class="col-md-3 col-lg-3">
	<aside class="pageBg">
		<div class="img-responsive image150">
			<!--need to add-->
			<a href="user_controller">
				<image class="profileImg" src="<?php if(!empty(get_cookie('img_name'))){
					echo base_url("/img/".get_cookie('img_name'));}else{ echo base_url("/img/profile.png");}
				?>"></image>
			</a>
		</div>
		<div class="blank50"></div>
		<div class="text-center">
			<a href="user_controller" class="non_dec text-center">
				<!--need to modify-->
				<span class="font-size2"><?php
					if (!empty($_SESSION['username'])) {
						echo $_SESSION['username'];
					} else {
						echo "Guest";
					}
					?></span></a>
		</div>
		<hr class="tagline-divider">

		<div id="sportnNav" class="text-center">
			<h3>Sport Managemnet</h3>
		</div>

		<div class="bank10">
			<ul>
				<li class="item">
					<div class="on"></div>
					<a href="sport_controller">
						<h5>My Sport</h5>
					</a>
				</li><div class="blank5"></div>
				<li class="item">
					<div class="on"></div>
					<a href="sport_manage_c">
						<h5>Sport Management</h5>
					</a>
				</li>
				<div class="blank5"></div>
				<!--<li class="item">
					<div class="on"></div>
					<a href="body_controller">
						<h5>Body Data</h5>
					</a>
				</li>
				<div class="blank5"></div>
				<li class="item">
					<div class="on"></div>
					<a href="sleep_controller">
						<h5>Sleep Analysis</h5>
					</a>
				</li>-->
				<div class="blank5"></div>
			</ul>
		</div>
	</aside>
</div>