<a name="Comments"></a>
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
?>

<div class="cmtPanelUp">
    &nbsp;&nbsp;نظرها</div>
<?php if (have_comments()) : ?>
<div class="cmtPanel">
    <table id="Table1" cellspacing="0" cellpadding="2" border="0" style="width: 536px;
        border-collapse: collapse;">
	<?php while(have_comments()): the_comment();?>
        <tr>
            <td align="right" style="background-color: #EDF0FF;">
                <div class="cmtsu">
                    <span class="CmtSender" style="display: inline-block; width: 240px;">نویسنده: <?php
                        echo $cmt->getColumn(name);?></span> <span class="CmtAddedDate" style="display: inline-block;
                            width: 270px;"><?php echo $cmt->getAddedDate("l، j F Y") ?></span>
                </div>
                <div class="cmts">
                    <span class="lblComment"><?php echo $cmt->getColumn(comment);?></span>
                    <br />
                    <div style="text-align: left; margin: 5px 5px 5px 5px; direction: ltr">
                        <a class="URL" href="<?php echo $cmt->getColumn(url);?>"><?php if($cmt->getColumn(url)==""){}else{echo
                            "وبسایت";}?></a>
                    </div>
                </div>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
<?php endif; ?>
    <a name="CommentBoxAnchor"></a>
    <div class="cmtPanelUp">
        &nbsp;&nbsp;فرستادن نظر</div>
    <form id="Barg" name="Barg" method="post" action="?mode=3&amp;id=<?php echo $_GET['id'];?>#Comments">
    <div class="cmtPanel">
        <br />
        <center>
            <span style="font-size: x-small; font-family: tahoma">لطفاً فارسی بنویسید.<br />ایمیل شما منتشر نخواهد شد.</span>
            <table cellspacing="6">
                <tr>
                    <td style="text-align: right">
                        <span class="cif">نام</span>
                    </td>
                    <td align="right">
                        <input name="Author" type="text" maxlength="25" id="Text2" class="cil" style="font-family: Tahoma;" />
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">
                        <span class="cif">ایمیل</span>
                    </td>
                    <td align="left" dir="ltr">
                        <input name="Email" type="text" maxlength="50" id="Text3" class="cil" />
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">
                        <span class="cif">وبسایت</span>
                    </td>
                    <td align="left" dir="ltr">
                        <input name="TextBox1" type="text" maxlength="50" id="Text4" class="cil" />
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">
                        <span class="cif">متن پیام<br />
                            <br />
                        </span>
                    </td>
                    <td align="left">
                        <textarea name="Comment" rows="5" cols="20" id="Textarea1" class="cil"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" name="submit" value="ارسال" id="submit" class="EnFa" />&nbsp;
                    </td>
                </tr>
            </table>
        </center>
    </div>
	</form>