<?php
$favsql = "SELECT barg_favorists.ent_id, barg_entries.title FROM barg_favorists, barg_entries WHERE barg_favorists.ent_id = barg_entries.id ORDER BY rating DESC;";
  $favresult = mysql_query($favsql);
        $numrows_fav = mysql_num_rows($favresult);
        if($numrows_fav == 0) {
        echo "<p>No favorists</p>";
        }else {echo "<table class='Archive' cellspacing='0' border='0' style='border-collapse:collapse;'>";
        while($favrow = mysql_fetch_assoc($favresult)) {
        echo "<tr><td><a class='ArchiveLink' href=?mode=3&id="
        . $favrow[ent_id] . ">" . $favrow [title]
        . "</a></td></tr>";
        } echo "</table>";
        }
      ?>