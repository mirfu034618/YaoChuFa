<div class="righter">
	<div class="rightBox">
		<a href="guestbook.php" class="btn_s">我要留言</a>
	</div>
	<div class="blank10"></div>
	<div class="rightBox">
		<h3>最新公告<b class="cGrey fn">News</b></h3>
		<ul class="list_r">
			<?php foreach ($inforList as $inforValues) {;?>
				<li><a href="article.php?inforId=<?php echo $inforValues['inforId']; ?>"><?php echo $inforValues['inforTitle']; ?></a></li>
			<?php }
?>
		</ul>
	</div>
	<div class="blank10"></div>
	<div class="rightBox">
		<h3>友情链接<b class="cGrey fn">Links</b></h3>
		<ul class="list_r">
			<?php foreach ($link as $linkValues) {;?>
				<li><a href="<?php echo $linkValues['linkPath']; ?>"><?php echo $linkValues['linkName']; ?></a></li>
			<?php }
?>
		</ul>
	</div>
</div>
<div class="hackbox"></div>
