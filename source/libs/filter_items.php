<?php
	if(isset($_GET['filter_name'])){
		$cat_type = $_GET['filter_name'];
		if(isset($_GET['page']))
		{
			$current_page = $_GET['page'];
		}
		else
		{
			$current_page = 1;
		}
		$category_free_items = $play_store_api->$cat_type($current_page);
	}
?>