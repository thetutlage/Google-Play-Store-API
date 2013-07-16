<?php
	if(isset($_GET['cat_id'])){
		
		if(isset($_GET['type']))
		{
			$cat_type = $_GET['type'];
		}
		else
		{
			$cat_type = 'Free';
		}
		
		if(isset($_GET['page']))
		{
			$current_page = $_GET['page'];
		}
		else
		{
			$current_page = 1;
		}
		
		$function_name = 'category'.$cat_type.'Items';
		
		$cat_id = $_GET['cat_id'];
		$category_free_items = $play_store_api->$function_name($cat_id,$start = $current_page);
	}
?>