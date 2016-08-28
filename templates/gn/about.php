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
		  <li id="nav04">
			  <a href="?mode=contact">
				  تماس با من<br/><span class="listMeta">
					  ارسال پیام، ایمیل من
				  </span>
			  </a>
		  </li>
		  <li id="nav05" class="activeMenu">
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
            <a href="http://www.bargweb.net">www.bargweb.net</a></p>
                    <p>
                        لوگو:</p>
                    <p>
                        <img alt="لوگو" src="templates/gn/images/logo.png" /><br />
                    </p>
                    <p>
                        <input id="Text1" type="text" 
                            value="&lt;a target=&quot;_blank&quot; href=&quot;http://www.bargweb.net&quot;&gt;&lt;img src=&quot;http://www.bargweb.com/Logo.png&quot; alt=&quot;Barg&quot; style=&quot;border: 0px none&quot;&gt;&lt;/a&gt;" /></p>
                    <p>
            قالب: غبار
            <br />
            طراحی قالب: <a href="mailto:faryad@bargweb.net">فریاد</a><br />
            تصاویر و بخشی از کدها از:</p>
                    <ul>
                        <li><a href="http://strukt.com">strukt.com</a></li>
                        <li><a href="http://www.evaneckard.com">EvanEckard</a></li>
                    </ul>
                <p>
                    CMS by: Faryad</p>
                <p>
                    <a href="http://www.BargweB.net">bargweb.net</a> - <a href="mailto:faryad@bargweb.net">
                        faryad@bargweb.net</a> 2007 - 2008<br /><a href="http://www.bargweb.net/">برگ</a> وبسایت شخصی <a href="mailto:faryad@bargweb.net">فریاد</a>.
      &nbsp;</p>
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