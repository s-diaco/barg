<?php
	header("Content-Type: text/xml; charset=utf-8"); 
	echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
	include("classes/RSS.class.php"); 
	$rss = new RSS();  
	echo $rss->GetFeed();
?>