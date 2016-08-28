<div id="container-1">
  <ul>
    <li><a href="#fragment-1"><span>ماهیانه</span></a></li>
    <li><a href="#fragment-2"><span>برگزیده‌ها</span></a></li>
    <li><a href="#fragment-3"><span>آخرین‌ها</span></a></li>
  </ul>
  <div id="fragment-1">
	  <ul class="postListSingle">
		<?php wp_get_archives('monthly'); ?>
    </ul>
  </div>
  <div id="fragment-2">
    <ul class="postListSingle">
		<?php fav_entries(); ?>
    </ul>
  </div>
  <div id="fragment-3">
	  <ul class="postListSingle">
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
</div>