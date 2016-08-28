<a name="comments"></a>
<?php 
	require_once("././classes/comment_manager.class");
	require_once("././classes/comment.class");
	$cmt_m = new comment_manager($e->getColumn("id"));
	$cmt;
	
	function the_comment()
	{
		global $cmt, $cmt_m;
		$cmt = new comment( $cmt_m->getResource(), $cmt_m->getPointer() );
		$cmt_m->toNextItem();
	}
	function have_comments()
	{
		global $cmt_m;
		return $cmt_m->haveItems();
	}
	$oddcomment = 'alt';
?>


<?php if (have_comments()) : ?>
<ol class="commentlist">

	<?php while(have_comments()): the_comment();?>

		<li class="<?php echo $oddcomment; ?>" id="comment-<?php echo $cmt->getColumn('id');?>">
			نظر <cite><a class="URL" href="<?php echo $cmt->getColumn('url');?>"><?php echo $cmt->getColumn('name');?></a></cite>:
			
			<br />

			<small class="commentmetadata"><a href="#comment-<?php echo $cmt->getColumn('id');?>" title=""><?php echo $cmt->getAddedDate("l، j F Y") ?></a> </small>
            <p><?php echo $cmt->getColumn('comment');?></p>
			

		</li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endwhile; ?>

	</ol>
<?php endif; ?>
<br clear="all" />
<form action="comments_post.php" method="post" id="commentform">
<div class="commentLeft">
<p><label for="author">نام: <span class="note">(ملزوم)</span></label><br />
<input type="text" name="author" id="author" size="22" tabindex="1" />
</p>
<p><label for="email">آدرس ای‌میل: <span class="note"><br />(منتشر نخواهد شد)</span></label><br />
<input type="text" name="email" id="email" size="22" tabindex="2" />
</p>
<p><label for="url">آدرس وبسایت: <span class="note"><br/>(یا وبلاگ شما)</span></label><br />
<input type="text" name="url" id="url" size="22" tabindex="3" />
</p>
</div>
<div class="commentRight">
<p>نظر: <span class="note">(لطفاً فینگیلیش ننویسید!)</span>  <br />
<textarea name="comment" id="comment" style="width:240px;" rows="7" tabindex="4"></textarea></p>
<p><label for="security">لطفاً حاصل جمع ۱۲ + ۲ را در کادر زیر وارد کنید.<span class="note"><br/>(برای جلوگیری از فعالیت ربات‌های اسپمر)</span></label><br/><input type="text" name="security" id="security" size="22" tabindex="5" /><p/>
<p><input name="submit" type="submit" id="submit" class="btnComment" tabindex="6" value="افزودن نظر شما&raquo;" />
<input type="hidden" name="comment_post_ID" value="<?php the_ID();?>" />
<input type="hidden" name="pageUrl" value="<?php echo $_SERVER['PHP_SELF'].'?';echo $_SERVER['QUERY_STRING'].'#comments';?>" />
</p>
</div>
</form>
<br clear="all" />
