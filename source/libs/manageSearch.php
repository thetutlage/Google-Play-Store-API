<?php

	if(isset($_GET['app_search']))
	{
		$search_query = str_replace(' ','',$_GET['app_search']);
		if(isset($_GET['page']))
		{
			$current_page = $_GET['page'];
		}
		else
		{
			$current_page = 1;
		}
		$searchStore = $play_store_api->searchStore($search_query,$sort='Popularity',$price='All',$safe_search = 'Off',$start=$current_page);
	}
?>