<?php
	$zaman = date('Y-m-d h:i:s');
	$_POST[Comment] = nl2br($_POST[Comment]);
	$sqlinscom="INSERT INTO barg_comments (name, mail, url, addedDate, comment, ent_id)
		VALUES
		('$_POST[Author]','$_POST[Email]','$_POST[TextBox1]','$zaman','$_POST[Comment]', '$_GET[id]')";
		mysql_query( "SET NAMES 'utf8' " );
		if (!mysql_query($sqlinscom,$db))
		  {
		  die('Error: ' . mysql_error());
		  }
?>