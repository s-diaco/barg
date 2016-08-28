<!-- begin post -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>                                                  
<h3><a href="<?php echo '?mode=3&id=';the_ID();?>" rel="bookmark" title="لینک ثابت به <?php the_title();?>"><?php the_title();?></a></h3>
<div class="column01">
  <div class="postDetails">
    <?php the_time("l");?><br />
    <?php the_time("j F Y");?><br />
    نوشته شده توسط <?php the_author()?><br />
    <?php the_category('، ') ?>
    <?php comments_popup_link(' بدون نظر ', 'نظرها: یک نظر ', 'نظرها: % نظر ')?></div>
</div>
<div class="column02"><div class="post" id="post-<?php the_ID();?>">
  <?php the_content(); ?>
    <div class="postFooter"><br clear="all" />
      <a href="<?php echo '?mode=3&id=';the_ID();?>" rel="bookmark" title="لینک ثابت به <?php the_title();?>">لینک ثابت</a> - 
      <a href="<?php echo '?mode=3&id=';the_ID();echo '#comments';?>"><?php comments_popup_link(' بدون نظر ', 'نظرها: یک نظر ', 'نظرها: % نظر ')?></a>
    </div>
</div></div>
<br clear="all" />
<div class="postEnd"></div>
<!-- end post -->
<?php endwhile; ?>
<?php endif; ?>