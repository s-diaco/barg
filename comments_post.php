<?php

if ($_POST["security"] != 14 && $_POST["security"] != "۱۴"){echo "Error: Wrong antispam code.";}
else
{

require_once("config.php");


/*MYSQL DATABASE CONNECTION/ TRACKING FUNCTIONS
--------------------------------------*/
// connect to database
$dbh = mysql_connect ($dbhost, $dbuser, $dbpassword) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($dbdatabase);

mysql_query( "SET NAMES 'utf8' " );

$entID = $_POST["comment_post_ID"];
$name = $_POST["author"];
$url = $_POST["url"];
$email = $_POST["email"];
$message = $_POST["comment"];
$pageUrl = $_POST["pageUrl"];
$message = nl2br($message);

$sendcomment = mysql_query("INSERT INTO barg_comments SET ent_id='$entID', name='$name', url='$url', mail='$email', comment='$message', addedDate=now()");

if($sendcomment){
//header("Location: $tuturl");
$reffererUrl = $pageUrl;
echo "<h1>Submission Successful</h1>";

	/*
	echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
	*/

echo "Your comment has been submitted.  You will now be redirected back to the last page you visited.  Thanks!";
echo "<meta http-equiv='refresh' content='1;URL=$reffererUrl'>";
} else {
echo "There was an error with the submission. ";
}}

?>
