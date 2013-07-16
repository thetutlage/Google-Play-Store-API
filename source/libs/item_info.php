<?php
	if(isset($_GET['item_id']))
	{
		$item_id = $_GET['item_id'];
		$item_info = $play_store_api->itemInfo($item_id);
		$relatedViewed = $play_store_api->relatedViewed($item_id);
		$relatedInstalled = $play_store_api->relatedInstalled($item_id);
	}
?>