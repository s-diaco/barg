<?php
$frsql = "SELECT url, description FROM barg_links WHERE isFriend = 1 ORDER BY id DESC;";
  $frresult = mysql_query($frsql);
        $numrows_fr = mysql_num_rows($frresult);
        if($numrows_fr == 0) {
        echo "<p>No links</p>";
        }else {echo "<table class='Archive' cellspacing='0' border='0' style='border-collapse:collapse;'>";
        while($frrow = mysql_fetch_assoc($frresult)) {
        echo "<tr><td><a class='ArchiveLink' href=".$frrow[url]. ">" . $frrow [description]
        . "</a></td></tr>";
        } echo "</table>";
        }
      ?>