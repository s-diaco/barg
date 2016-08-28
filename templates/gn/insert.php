<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<HEAD>
  <TITLE>کنترل پنل وبلاگ</TITLE>
 </HEAD>
<body>
<?php
	if (isset($_POST['submit']))
	{
		$con = mysql_connect("localhost","diaco","Dyaco8464");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db("barg", $con);
		
		$sql="INSERT INTO barg_entries (title,bText, sender, addedDate, bText2)
		VALUES
		('$_POST[title]','$_POST[bText]','$_POST[sender]','$_POST[addedDate]','$_POST[bText2]')";
		mysql_query( "SET NAMES 'utf8' " );
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		echo "1 record added";
		
		mysql_close($con);
	}
?>
<H1>کنترل پنل وبلاگ</H1>
  <form action="insert.php" method="post">
   <b>Title:</b><br>
   <input type="text" name="title"><br>
   <b>Date:</b><br>
   <input type="text" name="addedDate"><br>
   <b>Sender:</b><br>
   <input type="text" name="sender"><br>
   <b>Weblog Entry:</b><br>
   <textarea cols="60" rows="6" name="bText"> 
   </textarea><br>
   <b>Weblog Entry:</b><br>
   <textarea cols="60" rows="6" name="bText2"> 
   </textarea><br>
  <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
