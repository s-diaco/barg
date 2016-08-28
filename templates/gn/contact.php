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
		  <li id="nav02">
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
		  <li id="nav04" class="activeMenu">
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
    <div class="column01">
      <div class="postDetails">
        درباره‌ی برگ</div>
    </div>
    <div class="column02"><div class="post"><br clear="all" />
		
                <p>
                    ایمیل من:</p>
                <p>
                    &nbsp;<a href="mailto:faryad@bargweb.net">faryad@bargweb.net</a></p><p>
                    این صفحه در حال حاضر تکمیل نشده است.</p>
    
    </div></div>
    <br clear="all" />
    <div class="postEnd"></div>
    <!-- end post -->
    
    
    
<?php include ("footer.php"); ?>
<div class="column03">
    <?php require("sidebar.php"); ?>
  </div>
  <br clear="all" />
  <div></div>
</div>
</div>
</body>
</html>