<?php include_once( 'header.php' ); include_once( 'libs/category_items.php' );?>
	<div id="content">
		<div class="container">
			<div class="leftbar">
				
				<h2 class="title">Showing Results For <?php echo $_GET['app_search']; ?></h2>
				
				<div class="appContainer">
					<div class="appWrapper" id="searchItems">
						<ul>
							<?php if($searchStore !== 0) { foreach($searchStore as $freeItems) { ?>
							<li>
								<div class="apps">
									<div class="app_icon inline-block">
										<a href="item.php?item_id=<?php echo $freeItems->app_id?>"><img src="<?php echo $freeItems->app_icon; ?>" /></a>
									</div><!-- end app_icon -->
									<div class="app_info inline-block">
										<div class="app_title">
											<a href="item.php?item_id=<?php echo $freeItems->app_id?>"><?php echo $freeItems->app_title; ?></a>
										</div><!-- end app_title -->
										<div class="app_author">
											<span class="author"><?php echo $freeItems->app_author; ?></span>
										</div><!-- end app_author -->
										<div class="app_description">
											<p><?php echo $freeItems->app_snippet; ?></p>
										</div><!-- end app_ratings -->
										<div class="app_more">
											<a href="item.php?item_id=<?php echo $freeItems->app_id?>" class="btn"><?php echo $freeItems->app_price; ?></a>
										</div><!-- end app_more -->
									</div><!-- end app_info -->
								</div><!-- end apps -->
							</li>
							<?php } } else { ?>
							
							<li>
								<div class="apps">
									<h2 class="buzz"> No More Items Found </h2>
								</div><!-- end apps -->
							</li>
							<?php } ?>
						</ul>
						
						<div id="pagination">
							<ul>
								<?php if($current_page != 1)
								{ ?>
								<li><a href="search.php?app_search=<?php echo $_GET['app_search']; ?>&&page=<?php echo $current_page - 1;?>"> Previous </a></li>
								<?php } ?>
								<li><a href="search.php?app_search=<?php echo $_GET['app_search']; ?>&&page=<?php echo $current_page + 1;?>"> Next </a></li>
							</ul>
						</div><!-- end pagination -->
						
					</div><!-- end appWrapper -->
				</div><!-- end appContainer -->
			</div><!-- end leftbar -->
			
			<?php include_once( 'sidebar.php' ); ?>
		</div><!-- end container -->
	</div><!-- end content -->

</body>
</html>
