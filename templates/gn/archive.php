<?php require("header.php"); ?>
<body>
<div id="outer">
  <div class="column01"><br/><a href="http://feeds.feedburner.com/barg">
                                <img alt="RSS 2.0" src="templates/gn/images/rss_icon.gif" style="border-width: 0; width: 16px; height: 16px" /></a></div>
  <div class="column02">
    <h1><a href="http://www.bargweb.net/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="upperSpacer"></div></a></h1>
  </div>
  <div class="column03">
    <div class="search">
      <?php include ("searchform.php"); ?>
    </div>
  </div>
  <div class = "postColumn"><div class="upperSpacer"></div><div class="navBorder"></div><div class="column01">وبلاگ برگ<br /><?php echo( $b_i->getDate("l")); ?><br /><?php echo( $b_i->getDate("j F Y")); ?></div>
  <div class="column02">
	  <ul id="nav">
		  <li id="nav01">
			  <a href="/">
				  برگ اول<br/><span class="listMeta">
					  صفحه‌ی خانگی
				  </span>
			  </a>
		  </li>
		  <li id="nav02" class="activeMenu">
			  <a href="?mode=2">
				  آرشیو برگ<br/><span class="listMeta">
					  مطالب گذشته
				  </span>
			  </a>
		  </li>
		  <li id="nav03">
			  <a>
				  گالری برگ<br/><span class="listMeta">
					  گرافیک دیجیتال و …
				  </span>
			  </a>
		  </li>
		  <li id="nav04">
			  <a href="?mode=contact">
				  تماس با من<br/><span class="listMeta">
					  ارسال پیام، ایمیل من
				  </span>
			  </a>
		  </li>
		  <li id="nav05">
			  <a href="?mode=about">
				  درباره‌ی برگ<br/><span class="listMeta">
					  کپی‌رایت، دیزاین،…
				  </span>
			  </a>
		  </li>
	  </ul>
  </div></div>
  <div class="postColumn"><div class="navBorder"></div><br />
	  <!-- begin post -->
	  <?php if (have_posts()) : ?>
	  <?php while (have_posts()) : the_post(); ?>
	  <h3>
		  <a href="
			  <?php echo '?mode=3&id=';the_ID();?>" rel="bookmark" title="لینک ثابت به <?php the_title();?>"><?php the_title();?>
		  </a>
	  </h3>
	  <div class="column01">
		  <div class="postDetails">
			  <?php the_time("l");?><br />
			  <?php the_time("j F Y");?><br />
			  نوشته شده توسط <?php the_author()?><br />
			  <?php the_category('، ') ?>
			  <?php comments_popup_link(' بدون نظر ', 'نظرها: یک نظر ', 'نظرها: % نظر ')?>
		  </div>
	  </div>
	  <div class="column02">
		  <div class="post" id="post-"
			  <?php the_ID();?>">
			  <?php the_content(); ?>
			  <div class="postFooter">
				  <br clear="all" />
				  <a href="
					  <?php echo '?mode=3&id=';the_ID();?>" rel="bookmark" title="لینک ثابت به <?php the_title();?>">لینک ثابت
				  </a> -
				  <a href="
					  <?php echo '?mode=3&id=';the_ID();echo '#comments';?>"><?php comments_popup_link(' بدون نظر ', 'نظرها: یک نظر ', 'نظرها: % نظر ')?>
				  </a>
			  </div>
		  </div>
	  </div>
	  <br clear="all" />
	  <div class="postEnd"></div>
	  <!-- end post -->
	  <?php endwhile; ?>
	  <?php else : ?>
	  <div class="column01">آرشیو برگ</div>
	  <div class="column02 post">
		  <h2 class="center">نمایش مطالب</h2>
		  <p class="center">لطفاً از منوی سمت چپ گزینه‌ی مورد نظر خود را انتخاب کنید.</p>
	  </div>
	  <br clear="all" />
	  <div class="postEnd"></div>
	  <?php endif; ?>
<?php include ("footer.php"); ?>
<div class="column03">
    <?php require("archiveSidebar.php"); ?>
  </div>
  <br clear="all" />
  <div></div>
</div>
</div>
</body>
</html>