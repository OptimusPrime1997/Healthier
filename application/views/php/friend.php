<!DOCTYPE html>
<html lang="en">

<head>


	<title>Healthier</title>

	<!-- Custom CSS -->
	<link href="<?php echo base_url("/css/github-css1.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("/css/github-css2.css"); ?>" rel="stylesheet">
	<link href='<?php echo base_url("/css/healthier.css"); ?>' rel="stylesheet">
	<link href='<?php echo base_url("/css/friend.css"); ?>' rel="stylesheet">
	<script src='<?php echo base_url("/js/jquery.js"); ?>'></script>
	<?php
	include "php_part/meta.php";
	?>
</head>

<?php
include "navbar.php";
?>

<div class="container">

	<?php
	include "php_part/friend_aside.php";
	?>
	<div class="col-md-9 col-lg-9">
		<div class="row ">
			<div class="pageBg">
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
				<div class="row">
					<div class="box pageInnerBg">
						<div class="block-line">
							<!--<div class="text-left ">
								<span id="little-title">Following</span>
							</div>-->
							<div class="blank10"></div>
							<div class="m_inline form-inline">
								<input type="text" class="form-control m_inline" placeholder="Enter you friend name">
								<button class="btn btn-success m_inline"><span
										class="glyphicon glyphicon-search"></span>
									Search
								</button>
							</div>
							<div class="blank10"></div>
						</div>


						<!--						<div class="text-left">-->
						<!--							<ul>-->
						<!--								<li><a href="#">windkl</a></li>-->
						<!--								<li><a href="#">originkl</a></li>-->
						<!--								<li><a href="#">bismuth</a></li>-->
						<!--							</ul>-->
						<!--						</div>-->


						<div class="user-profile-nav js-sticky top-0">
							<nav class="underline-nav" data-pjax role="navigation">

								<a href="#"
								   class="underline-nav-item selected"
								   aria-selected="true"
								   role="tab"
								   value="Follower">
									Followers
									<span class="counter">
             <?php if (!empty($followerlist)) {
				 echo count($followerlist);
			 } else {
				 echo 0;
			 } ?>
          </span>
								</a>

								<a href="#"
								   class="underline-nav-item"
								   aria-selected="false"
								   role="tab"
								   value="Following">
									Following
									<span class="counter">
            <?php if (!empty($followinglist)) {
				echo count($followinglist);
			} else {
				echo 0;
			} ?>
          </span>
								</a>

								<a href="#"
								   class="underline-nav-item"
								   aria-selected="false"
								   role="tab"
								   value="Tofollow">
									Tofollow
									<span class="counter">
            <?php if (!empty($tofollowlist)) {
				echo count($tofollowlist);
			} else {
				echo 0;
			} ?>
          </span>
								</a>

							</nav>
						</div>
						<script>
							jQuery(function ($) {
								//已有删除按钮初始化绑定删除事件
								$(".underline-nav-item").click(function () {
									if (!$(this).hasClass('.selected')) {
										$('.underline-nav-item').attr('aria-selected', 'false')
										$('.underline-nav-item').removeClass('selected');
										$(this).attr('aria-selected', 'true');
										$(this).addClass('selected');

										var temp = $(this).attr('value');
										$('.display-container').addClass('hidden');
//										alert(temp+" -- "+$('#'+temp).attr('id')+" is id");
										$('#' + temp).removeClass('hidden');

									}

								});
							});
						</script>
						<div class="display-container" id="Follower">
							<?php if (!empty($followerlist)) {
								foreach ($followerlist as $row): ?>

									<div class="d-table col-12 width-full py-4 border-bottom border-gray-light">
										<div class="d-table-cell col-1 v-align-top">
											<a href="/14dtj"><img alt="@<?php echo $row['account_id']; ?>"
																  class="avatar"
																  height="50"
																  src="<?php echo base_url('/img/' . $row['img_name']) ?>"
																  width="50"/></a>
										</div>

										<div class="d-table-cell col-9 v-align-top pr-3">
											<a href="/14dtj" class="d-inline-block no-underline mb-1">
												<span class="f4 link-gray-dark"><?php echo $row['username']; ?></span>
												<span class="link-gray pl-1"><?php echo $row['account_id']; ?></span>
											</a>


											<p class="text-gray text-small"><?php echo $row['propaganda']; ?></p>

											<p class="text-gray text-small mb-0">
										<span class="mr-3">
										  <svg aria-hidden="true" class="octicon octicon-organization" height="16"
											   version="1.1"
											   viewBox="0 0 16 16"
											   width="16"><path fill-rule="evenodd"
																d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4"/>
										  </svg>
											<?php echo $row['hobby']; ?>
										</span>
												<svg aria-hidden="true" class="octicon octicon-location" height="16"
													 version="1.1"
													 viewBox="0 0 12 16" width="12">
													<path fill-rule="evenodd"
														  d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/>
												</svg>
												<?php echo $row['address']; ?>
											</p>
										</div>

										<div class="d-table-cell col-2 v-align-top text-right">


						<span class="user-following-container js-toggler-container js-social-container on">

						  <span class="follow">
							<!-- '"` --><!-- </textarea></xmp> --></option></form>
							  <form accept-charset="UTF-8" action="/users/follow?target=14dtj"
									data-form-nonce="66033770d550dc277e426c8ecdcc013da1d43bab" data-remote="true"
									method="post"><div
									  style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
																					   value="&#x2713;"/><input
										  name="authenticity_token" type="hidden"
										  value="EnsfcaXlnl7TiMhl6RVlCnLHTdS0XTyDhr1DVzKBjEuyr93fL1CZsZOHP5VERXCEJYNbdzcbjCgBkmC0Gin2FA=="/></div>
							  <button
								  type="submit"
								  class="btn btn-sm  js-toggler-target"
								  aria-label="Follow this person" title="Follow 14dtj">
								Delete
							  </button>
							  </form>
						  </span>

						  <span class="unfollow">
							<!-- '"` --><!-- </textarea></xmp> -->
							  </option>
							  </form>
							  <form accept-charset="UTF-8"
									action="<?php echo base_url('/controller_impl/friend_controller/unfollower'); ?>"
									data-form-nonce="66033770d550dc277e426c8ecdcc013da1d43bab" data-remote="true"
									method="post"><div
									  style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
																					   value="&#x2713;"/><input
										  name="authenticity_token" type="hidden"
										  value="pH5VJHaUbtGzmG14FVGzU3n9cbVExTdLJIewYsl8EpoEqpeK/CFpPvOXmoi4AabdLrlnFseDh+CjqJOB4dRoxQ=="/>
								  <input name="follower_id" value="<?php echo $row['account_id']; ?>" type="hidden">
								  </div>
							  <button
								  type="submit"
								  class="btn btn-sm js-toggler-target"
								  aria-label="Unfollow this person" title="Unfollow 14dtj">
								Delete
							  </button>
							  </form>
						  </span>
					    </span>

										</div>
									</div>
								<?php endforeach;
							} ?>
						</div>


						<div class="display-container hidden" id="Following">
							<?php if (!empty($followinglist)) {
								foreach ($followinglist as $row): ?>
									<div
										class="d-table col-12 width-full py-4 border-bottom border-gray-light ">
										<div class="d-table-cell col-1 v-align-top">
											<a href="/14dtj"><img alt="@<?php echo $row['account_id']; ?>"
																  class="avatar"
																  height="50"
																  src="<?php echo base_url('/img/' . $row['img_name']) ?>"
																  width="50"/></a>
										</div>

										<div class="d-table-cell col-9 v-align-top pr-3">
											<a href="/14dtj" class="d-inline-block no-underline mb-1">
													<span
														class="f4 link-gray-dark"><?php echo $row['username']; ?></span>
												<span
													class="link-gray pl-1"><?php echo $row['account_id']; ?></span>
											</a>


											<p class="text-gray text-small"><?php echo $row['propaganda']; ?></p>

											<p class="text-gray text-small mb-0">
										<span class="mr-3">
										  <svg aria-hidden="true" class="octicon octicon-organization" height="16"
											   version="1.1"
											   viewBox="0 0 16 16"
											   width="16"><path fill-rule="evenodd"
																d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4"/>
										  </svg>
											<?php echo $row['hobby']; ?>
										</span>
												<svg aria-hidden="true" class="octicon octicon-location" height="16"
													 version="1.1"
													 viewBox="0 0 12 16" width="12">
													<path fill-rule="evenodd"
														  d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/>
												</svg>
												<?php echo $row['address']; ?>
											</p>
										</div>

										<div class="d-table-cell col-2 v-align-top text-right">


						<span class="user-following-container js-toggler-container js-social-container on">

						  <span class="follow">
							<!-- '"` --><!-- </textarea></xmp> -->
							  </option>-->
							  </form>
							  <form accept-charset="UTF-8"
									action="<?php echo base_url('/controller_impl/friend_controller/following'); ?>"
									data-form-nonce="66033770d550dc277e426c8ecdcc013da1d43bab" data-remote="true"
									method="post"><div
									  style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
																					   value="&#x2713;"/><input
										  name="authenticity_token" type="hidden"
										  value="EnsfcaXlnl7TiMhl6RVlCnLHTdS0XTyDhr1DVzKBjEuyr93fL1CZsZOHP5VERXCEJYNbdzcbjCgBkmC0Gin2FA=="/>

								  </div>
								  <button
									  type="submit"
									  class="btn btn-sm  js-toggler-target"
									  aria-label="Follow this person" title="Follow 14dtj">
									Follow
								  </button>
							  </form>
						  </span>

						  <span class="unfollow">
							<!-- '"` --><!-- </textarea></xmp> -->
							  </option>
							  </form>
							  <form accept-charset="UTF-8"
									action="<?php echo base_url('/controller_impl/friend_controller/unfollowing'); ?>"
									data-form-nonce="66033770d550dc277e426c8ecdcc013da1d43bab" data-remote="true"
									method="post"><div
									  style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
																					   value="&#x2713;"/><input
										  name="authenticity_token" type="hidden"
										  value="pH5VJHaUbtGzmG14FVGzU3n9cbVExTdLJIewYsl8EpoEqpeK/CFpPvOXmoi4AabdLrlnFseDh+CjqJOB4dRoxQ=="/>
								  <input name="following_id" value="<?php echo $row['account_id']; ?>" type="hidden">
								  </div>
							  <button
								  type="submit"
								  class="btn btn-sm js-toggler-target"
								  aria-label="Unfollow this person" title="Unfollow this person">
								Unfollow
							  </button>
							  </form>
						  </span>
					    </span>

										</div>
									</div>
								<?php endforeach;
							} ?>
						</div>


						<div class="display-container hidden" id="Tofollow">
							<?php if (!empty($tofollowlist)) {
								foreach ($tofollowlist as $row): ?>
									<div
										class="d-table col-12 width-full py-4 border-bottom border-gray-light ">
										<div class="d-table-cell col-1 v-align-top">
											<a href="/14dtj"><img alt="@<?php echo $row['account_id']; ?>"
																  class="avatar"
																  height="50"
																  src="<?php echo base_url('/img/' . $row['img_name']) ?>"
																  width="50"/></a>
										</div>

										<div class="d-table-cell col-9 v-align-top pr-3">
											<a href="/14dtj" class="d-inline-block no-underline mb-1">
													<span
														class="f4 link-gray-dark"><?php echo $row['username']; ?></span>
												<span
													class="link-gray pl-1"><?php echo $row['account_id']; ?></span>
											</a>


											<p class="text-gray text-small"><?php echo $row['propaganda']; ?></p>

											<p class="text-gray text-small mb-0">
										<span class="mr-3">
										  <svg aria-hidden="true" class="octicon octicon-organization" height="16"
											   version="1.1"
											   viewBox="0 0 16 16"
											   width="16"><path fill-rule="evenodd"
																d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4"/>
										  </svg>
											<?php echo $row['hobby']; ?>
										</span>
												<svg aria-hidden="true" class="octicon octicon-location" height="16"
													 version="1.1"
													 viewBox="0 0 12 16" width="12">
													<path fill-rule="evenodd"
														  d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/>
												</svg>
												<?php echo $row['address']; ?>
											</p>
										</div>

										<div class="d-table-cell col-2 v-align-top text-right">


						<span class="user-following-container js-toggler-container js-social-container on">


						  <span class="unfollow">
							<!-- '"` --><!-- </textarea></xmp> -->
							  </option>
							  </form>
							  <form accept-charset="UTF-8"
									action="<?php echo base_url('/controller_impl/friend_controller/tofollow'); ?>"
									data-form-nonce="66033770d550dc277e426c8ecdcc013da1d43bab" data-remote="true"
									method="post"><div
									  style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
																					   value="&#x2713;"/><input
										  name="authenticity_token" type="hidden"
										  value="pH5VJHaUbtGzmG14FVGzU3n9cbVExTdLJIewYsl8EpoEqpeK/CFpPvOXmoi4AabdLrlnFseDh+CjqJOB4dRoxQ=="/>
								  <input name="tofollow_id" value="<?php echo $row['account_id']; ?>" type="hidden">
								  </div>
							  <button
								  type="submit"
								  class="btn btn-sm js-toggler-target"
								  aria-label="Tofollow this person" title="Tofollow this person">
								Follow
							  </button>
							  </form>
						  </span>
					    </span>
										</div>
									</div>
								<?php endforeach;
							} ?>
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