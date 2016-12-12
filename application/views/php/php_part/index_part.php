<div class="col-md-3 col-lg-3 text-center">
	<aside class="pageBg">
		<div class="img-responsive image150">
			<!--need to add-->
			<a href="profile.php">
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
		<div class="text-center">
			<!--need to modify-->
			<h5><span class="glyphicon glyphicon-time"></span> Join Date:<?php echo $join_date; ?>
			</h5>
		</div>
		<hr class="tagline-divider">

	<!--	<h4>Orangnizations</h4>
		<ul class="text-capitalize text-left ">
			<li class=" item"><a href="#"><h5>NJU Runner</h5></a></li>
			<div class="blank5"></div>
			<li class=" item"><a href="#"><h5>Nanjing Marathon</h5></a></li>

		</ul>-->
		<hr class="tagline-divider">
		<h4>Information</h4>
		<ul class="text-capitalize text-left">
			<!--need to modify-->
			<li class="item" id="test_item"><h5>Hobby:<?php echo get_cookie('hobby');?></h5></li>
			<div class="blank5"></div>
			<li class=" item"><h5>Address:<?php echo get_cookie('address');?></h5></li>
			<div class="blank5"></div>
		</ul>
		<script>

			jQuery(function($){
				/*function countClick(){
					var click_num=0;
					function display(){
						alert("You click it"+click_num+"times!");
					}
					addClick=function(){
						click_num=click_num+1;
					}
					return display;
				}
				function test(){
					var addCount=countClick();
					addClick();
					addCount();
				}*/
				var name = "The Window";
				var object = {
					 name : "This is a javascript closure test!",
					getNameFunc : function(){
						var that = this;
						return function(){
							return that.name;
						};
					}
				};
				function test(){
					alert(object.getNameFunc()());
				}
				$('#test_item').click(test);
			});
		</script>
	</aside>
</div>