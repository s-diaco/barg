<div id="container-1">
  <ul>
    <li><a href="#fragment-1"><span>آخرین مطالب</span></a></li>
    <li><a href="#fragment-2"><span>وبگردی</span></a></li>
    <li><a href="#fragment-3"><span>لینکدونی</span></a></li>
  </ul>
  <div id="fragment-1">
    <ul class="postList">
		<?php
        query_posts('showposts=5');
		?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<li>
		<a href="?mode=3&id=
			<?php the_ID() ?>"><?php the_title() ?> »<br />
			<span class="listMeta">
				<?php the_time("l، j F Y");?>
			</span>
		</a>
	</li>
	<?php endwhile; endif; ?>
    </ul>
  </div>
  <div id="fragment-2">
	  <script src="http://feeds.feedburner.com/FaryadReader?format=sigpro" type="text/javascript"></script>

	  <noscript>
		  <p>
			  Subscribe to RSS headline updates from: <a href="http://feeds.feedburner.com/FaryadReader">
			  </a>
			  <br />
			  Powered by FeedBurner
		  </p>
	  </noscript>
  </div>
  <div id="fragment-3">
	  <ul class="postListSingle"><p>دوستان</p>
		  <?php
			$lisql = "SELECT url, description FROM barg_links WHERE isFriend = 1 ORDER BY id DESC;";
			  $liresult = mysql_query($lisql);
					$numrows_li = mysql_num_rows($liresult);
					if($numrows_li == 0) {
					echo "<p>No links</p>";
					}else {
					while($lirow = mysql_fetch_assoc($liresult)) {
					echo "<li><a class='ArchiveLink' href=".$lirow['url']. ">" . $lirow ['description']
					. "</a></li>";
					} echo "</table>";
					}
				  ?>
		  <p>توصیه می‌کنم</p>
				  <?php
			$lisql = "SELECT url, description FROM barg_links WHERE isFriend = 0 ORDER BY id DESC;";
			  $liresult = mysql_query($lisql);
					$numrows_li = mysql_num_rows($liresult);
					if($numrows_li == 0) {
					echo "<p>No links</p>";
					}else {
					while($lirow = mysql_fetch_assoc($liresult)) {
					echo "<li><a class='ArchiveLink' href=".$lirow['url']. ">" . $lirow ['description']
					. "</a></li>";
					} echo "</table>";
					}
				  ?>
	  </ul>
</div>
</div>