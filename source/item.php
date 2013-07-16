<?php include_once( 'header.php' ); include_once( 'libs/item_info.php' );?>
	<div id="content">
		<div class="container">
			<?php if($item_info !== 0) { foreach($item_info['General'] as $itemInfo) { ?>
			<div class="app_basic_info single_left">
				<div class="app_title">
					<?php echo $itemInfo->app_title; ?>
				</div><!-- app_title -->
				<div class="app_author">
					<?php echo $itemInfo->app_author; ?>
				</div><!-- end app_author -->
				<strong style="font-size: 15px;">App Price :- <?php echo $itemInfo->app_price; ?></strong>
				<br />
				<br />
				<div class="app_thumb">
					<img src="<?php echo $itemInfo->banner_icon; ?>" />
				</div><!-- end app_thumb -->
				<div class="get_from_store">
					<br />
					<a href="<?php echo $itemInfo->app_store_url; ?>" target="_blank" class="btn green"> Get From Google Store</a>
				</div>
				
			</div><!-- end app_basic_info -->
			<div class="app_banner single_right">
				<?php if(empty($itemInfo->banner_image)) { 
				echo '<img src="images/notfound.png" />'; } else { ?>
				<img src="<?php echo $itemInfo->banner_image; ?>" /> <?php } ?>
			</div>
			<div class="clear"></div>
			<div class="single_left">
				<div class="header_nav">
					<ul>
						<li> Users who installed this also installed </li>
						<li style="border-left: none;"></li>
					</ul>
				</div><!-- end header_nav -->
				<div class="appWrapper">
					<ul>
						<?php if($relatedInstalled !== 0) { $x = 0; foreach($relatedInstalled as $InstalledApps) {
							if($x >= 4) { break; }
						?>
						<li>
							<div class="apps">
								<div class="app_icon inline-block">
									<a href="item.php?item_id=<?php echo $InstalledApps->related_app_id; ?>"><img src="<?php echo $InstalledApps->related_app_thumbnail; ?>" /></a>
								</div><!-- end app_icon -->
								<div class="app_info inline-block">
									<div class="app_title">
										<a href="item.php?item_id=<?php echo $InstalledApps->related_app_id; ?>"> <?php echo $InstalledApps->related_app_title; ?> </a>
									</div><!-- end app_title -->
									<div class="app_author">
										<span class="author"><?php echo $InstalledApps->related_app_developer; ?></span>
									</div><!-- end app_author -->
									<div class="app_more">
										<a href="item.php?item_id=<?php echo $InstalledApps->related_app_id; ?>" class="btn"> More Info </a>
									</div>
								</div><!-- end app_info -->
							</div><!-- end apps -->
						<?php $x++; } } ?>
						</li>
					</ul>
				</div><!-- end appWrapper -->

				<div class="header_nav">
					<ul>
						<li> Users who viewed this also viewed </li>
						<li style="border-left: none;"></li>
					</ul>
				</div><!-- end header_nav -->
				<div class="appWrapper">
					<ul>
						<?php if($relatedViewed !== 0) { $x = 0; foreach($relatedViewed as $relatedApps) {
							if($x >= 4) { break; }
						?>
						<li>
							<div class="apps">
								<div class="app_icon inline-block">
									<a href="item.php?item_id=<?php echo $relatedApps->related_app_id; ?>"><img src="<?php echo $relatedApps->related_app_thumbnail; ?>" /></a>
								</div><!-- end app_icon -->
								<div class="app_info inline-block">
									<div class="app_title">
										<a href="item.php?item_id=<?php echo $relatedApps->related_app_id; ?>"> <?php echo $relatedApps->related_app_title; ?> </a>
									</div><!-- end app_title -->
									<div class="app_author">
										<span class="app_author"><?php echo $relatedApps->related_app_developer; ?></span>
									</div><!-- end app_author -->
									<div class="app_more">
										<a href="item.php?item_id=<?php echo $relatedApps->related_app_id; ?>" class="btn"> More Info </a>
									</div>
								</div><!-- end app_info -->
							</div><!-- end apps -->
						<?php $x++; } } ?>
						</li>
					</ul>
				</div><!-- end appWrapper -->


			</div>
			<div class="single_right">
				<div class="sideContainer">
					<div class="header_nav">
						<ul id="app_meta">
							<li id="description"><a>Description</a></li>
							<li id="wnew"><a>What's New</a> </li>
							<li id="permissions"><a>Permission</a> </li>
							<li id="screenshots"><a>ScreenShots</a> </li>
							<li style="border-left: none;"></li>
						</ul>
					</div><!-- end header_nav -->
					<div class="appWrapper" id="app_description">
						<h2 class="title"> Description </h2>
						<?php echo $itemInfo->html_app_description; ?>
					</div><!-- end appWrapper -->
					
					<div class="appWrapper hidden" id="app_wnew">
						<h2 class="title"> What's New </h2>
						<?php echo $itemInfo->whats_new_html; ?>
					</div><!-- end appWrapper -->

					<div class="appWrapper hidden" id="app_permissions">
						<h2 class="title"> Permission </h2>
						<?php echo $itemInfo->app_permission_html; ?>
					</div><!-- end appWrapper -->

					<div class="appWrapper hidden" id="app_screenshots">
						<div id="webnovae_slider">
							<ul>
							<?php foreach($item_info['ScreenShots'] as $itemShots) { ?>
								<li><img src="<?php echo $itemShots->screen_shot; ?>"/></li>
							<?php } ?>
							</ul>
							<div class="controls">
								<div class="prev"></div>
								<div class="next"></div>
							</div>
						</div>
					</div><!-- end appWrapper -->
				</div><!-- end appContainer -->
			</div><!-- end leftbar -->
			<?php } } ?>
		</div><!-- end container -->
	</div><!-- end content -->

</body>
</html>
