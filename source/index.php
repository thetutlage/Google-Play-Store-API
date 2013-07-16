<?php include_once( 'header.php' ); include_once( 'libs/index_items.php' );?>
	<div id="content">
		<div class="container">
			<div class="leftbar">
				<?php if($topGrossingApps !== 0) { $x = 0;?>
				<h2 class="title"> Top Grossing Apps </h2>
				<div class="appContainer">
					<div class="appWrapper">
						<ul>
							<?php foreach($topGrossingApps as $grossingApps) { if($x >= 4) { break; }?>
							<li>
								<div class="apps">
									<div class="app_icon inline-block">
										<a href="item.php?item_id=<?php echo $grossingApps->app_id; ?>"><img src="<?php echo $grossingApps->app_icon; ?>" /></a>
									</div><!-- end app_icon -->
									<div class="app_info inline-block">
										<div class="app_title">
											<a href="item.php?item_id=<?php echo $grossingApps->app_id; ?>"> <?php echo $grossingApps->app_title; ?> </a>
										</div><!-- end app_title -->
										<div class="app_author">
											<span class="author"><?php echo $grossingApps->app_author; ?></span>
										</div><!-- end app_author -->
										<div class="app_description">
											<p><?php echo $grossingApps->app_snippet; ?></p>
										</div><!-- end app_ratings -->
										<div class="app_more">
											<a href="item.php?item_id=<?php echo $grossingApps->app_id; ?>" class="btn"><?php echo $grossingApps->app_price; ?></a>
										</div><!-- end app_more -->
									</div><!-- end app_info -->
								</div><!-- end apps -->
							</li>
							<?php $x++; } ?>
						</ul>
						<div class="show_more_apps">
							<a href="app_filter.php?filter_name=topGrossingApps"> Show More &raquo;</a>
						</div>
					</div><!-- end appWrapper -->
				</div><!-- end appContainer -->
				<?php } ?>

				<?php if($topFreeGames !== 0) { $x = 0;?>
				<h2 class="title"> Top Free Games </h2>
				<div class="appContainer">
					<div class="appWrapper">
						<ul>
							<?php foreach($topFreeGames as $freeGames) { if($x >= 4) { break; }?>
							<li>
								<div class="apps">
									<div class="app_icon inline-block">
										<a href="item.php?item_id=<?php echo $freeGames->app_id; ?>"><img src="<?php echo $freeGames->app_icon; ?>" /></a>
									</div><!-- end app_icon -->
									<div class="app_info inline-block">
										<div class="app_title">
											<a href="item.php?item_id=<?php echo $freeGames->app_id; ?>"> <?php echo $freeGames->app_title; ?> </a>
										</div><!-- end app_title -->
										<div class="app_author">
											<span class="author"><?php echo $freeGames->app_author; ?></span>
										</div><!-- end app_author -->
										<div class="app_description">
											<p><?php echo $freeGames->app_snippet; ?></p>
										</div><!-- end app_ratings -->
										<div class="app_more">
											<a href="item.php?item_id=<?php echo $freeGames->app_id; ?>" class="btn"><?php echo $freeGames->app_price; ?></a>
										</div><!-- end app_more -->
									</div><!-- end app_info -->
								</div><!-- end apps -->
							</li>
							<?php $x++; } ?>
						</ul>
						<div class="show_more_apps">
							<a href="app_filter.php?filter_name=topFreeGames"> Show More &raquo;</a>
						</div>
					</div><!-- end appWrapper -->
				</div><!-- end appContainer -->
				<?php } ?>


				<?php if($topPaidGames !== 0) { $x = 0;?>
				<h2 class="title"> Top Paid Games </h2>
				<div class="appContainer">
					<div class="appWrapper">
						<ul>
							<?php foreach($topPaidGames as $paidGames) { if($x >= 4) { break; }?>
							<li>
								<div class="apps">
									<div class="app_icon inline-block">
										<a href="item.php?item_id=<?php echo $paidGames->app_id; ?>"><img src="<?php echo $paidGames->app_icon; ?>" /></a>
									</div><!-- end app_icon -->
									<div class="app_info inline-block">
										<div class="app_title">
											<a href="item.php?item_id=<?php echo $paidGames->app_id; ?>"> <?php echo $paidGames->app_title; ?> </a>
										</div><!-- end app_title -->
										<div class="app_author">
											<span class="author"><?php echo $paidGames->app_author; ?></span>
										</div><!-- end app_author -->
										<div class="app_description">
											<p><?php echo $paidGames->app_snippet; ?></p>
										</div><!-- end app_ratings -->
										<div class="app_more">
											<a href="item.php?item_id=<?php echo $paidGames->app_id; ?>" class="btn"><?php echo $paidGames->app_price; ?></a>
										</div><!-- end app_more -->
									</div><!-- end app_info -->
								</div><!-- end apps -->
							</li>
							<?php $x++; } ?>
						</ul>
						<div class="show_more_apps">
							<a href="app_filter.php?filter_name=paidGames"> Show More &raquo;</a>
						</div>
					</div><!-- end appWrapper -->
				</div><!-- end appContainer -->
				<?php } ?>


				<?php if($staffPicks !== 0) { $x = 0;?>
				<h2 class="title"> Staff Picks </h2>
				<div class="appContainer">
					<div class="appWrapper">
						<ul>
							<?php foreach($staffPicks as $sPicks) { if($x >= 4) { break; }?>
							<li>
								<div class="apps">
									<div class="app_icon inline-block">
										<a href="item.php?item_id=<?php echo $sPicks->app_id; ?>"><img src="<?php echo $sPicks->app_icon; ?>" /></a>
									</div><!-- end app_icon -->
									<div class="app_info inline-block">
										<div class="app_title">
											<a href="item.php?item_id=<?php echo $sPicks->app_id; ?>"> <?php echo $sPicks->app_title; ?> </a>
										</div><!-- end app_title -->
										<div class="app_author">
											<span class="author"><?php echo $sPicks->app_author; ?></span>
										</div><!-- end app_author -->
										<div class="app_description">
											<p><?php echo $sPicks->app_snippet; ?></p>
										</div><!-- end app_ratings -->
										<div class="app_more">
											<a href="item.php?item_id=<?php echo $sPicks->app_id; ?>" class="btn"><?php echo $sPicks->app_price; ?></a>
										</div><!-- end app_more -->
									</div><!-- end app_info -->
								</div><!-- end apps -->
							</li>
							<?php $x++; } ?>
						</ul>
						<div class="show_more_apps">
							<a href="app_filter.php?filter_name=staffPicks"> Show More &raquo;</a>
						</div>
					</div><!-- end appWrapper -->
				</div><!-- end appContainer -->
				<?php } ?>


				<?php if($staffPicks !== 0) { $x = 0;?>
				<h2 class="title"> Staff Picks For Tablet </h2>
				<div class="appContainer">
					<div class="appWrapper">
						<ul>
							<?php foreach($staffPicksForTablet as $sPicks) { if($x >= 4) { break; }?>
							<li>
								<div class="apps">
									<div class="app_icon inline-block">
										<a href="item.php?item_id=<?php echo $sPicks->app_id; ?>"><img src="<?php echo $sPicks->app_icon; ?>" /></a>
									</div><!-- end app_icon -->
									<div class="app_info inline-block">
										<div class="app_title">
											<a href="item.php?item_id=<?php echo $sPicks->app_id; ?>"> <?php echo $sPicks->app_title; ?> </a>
										</div><!-- end app_title -->
										<div class="app_author">
											<span class="author"><?php echo $sPicks->app_author; ?></span>
										</div><!-- end app_author -->
										<div class="app_description">
											<p><?php echo $sPicks->app_snippet; ?></p>
										</div><!-- end app_ratings -->
										<div class="app_more">
											<a href="item.php?item_id=<?php echo $sPicks->app_id; ?>" class="btn"><?php echo $sPicks->app_price; ?></a>
										</div><!-- end app_more -->
									</div><!-- end app_info -->
								</div><!-- end apps -->
							</li>
							<?php $x++; } ?>
						</ul>
						<div class="show_more_apps">
							<a href="app_filter.php?filter_name=staffPicksForTablet"> Show More &raquo;</a>
						</div>
					</div><!-- end appWrapper -->
				</div><!-- end appContainer -->
				<?php } ?>

			</div><!-- end leftbar -->
			<?php include_once( 'sidebar.php' ); ?>
		</div><!-- end container -->
	</div><!-- end content -->
	
</body>
</html>
