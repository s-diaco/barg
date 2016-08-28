<?php
$lisql = "SELECT url, description FROM barg_links WHERE isFriend = 0 ORDER BY id DESC;";
  $liresult = mysql_query($lisql);
        $numrows_li = mysql_num_rows($liresult);
        if($numrows_li == 0) {
        echo "<p>No links</p>";
        }else {echo "<table class='Archive' cellspacing='0' border='0' style='border-collapse:collapse;'>";
        while($lirow = mysql_fetch_assoc($liresult)) {
        echo "<tr><td><a class='ArchiveLink' href=".$lirow[url]. ">" . $lirow [description]
        . "</a></td></tr>";
        } echo "</table>";
        }
      ?>