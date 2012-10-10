<?php 
	$owner = elgg_get_page_owner_entity();
	$user = elgg_get_logged_in_user_entity();
	
	//if ($user->guid == $owner->guid)
		echo elgg_view('output/profilecomplete', array('user' => $owner)); 
		
