<?php 
	$owner = elgg_get_page_owner_entity();
	echo elgg_view('output/profilecomplete', array('user' => $owner)); 
		
