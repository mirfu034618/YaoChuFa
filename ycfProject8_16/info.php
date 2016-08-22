<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php
include "class/MySqlClass.php";
$mysql = new \Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set('PRC');

$inforList = $mysql->select("information");
$infor     = $mysql->select("information"); //查询information表（资讯表）
$link      = $mysql->select("link"); //查询link(友情链接表)
$contact   = $mysql->select("contact"); //查询contact（公司联系表）
$company   = $mysql->select("company"); //查询company（公司简介表）应该写入contact表，增加不必要的表，但没改
?>
<body>
<div class="header">
	<h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a><a href="admin/login.php" class="btn_f">管理员登录</a></p>
</div>
<div class="nav">
	<div class="nav_left"></div>
    <ul>
     	<li><a href="index.php">首  页</a></li>
        <li><a href="aboutUs.php">公司简介</a></li>
        <li><a href="productList.php">产品展示</a></li>
        <li class="sel"><a href="info.php">行业资讯</a></li>
        <li><a href="guestbook.php">客户留言</a></li>
        <li><a href="contactUs.php" class="nobg">联系我们</a></li>
     </ul>
     <div class="time">2009-07-10 8:00</div>
    <div class="nav_right"></div>
</div>
<div class="banner">
	<a href="#"><img src="images/banner.jpg" align="banner" /></a>
</div>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2>
        </div>
        <ul class="list_r" style="padding-right:40px">
			<?php foreach ($inforList as $inforListValues) {;?>
        	<li><a href="#"><?php echo $inforListValues['inforTitle']; ?></a><span class="time2"><?php echo $inforListValues['inforTime']; ?></span></li>
            <?php }
?>
		</ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
    </div>
	<div class="righter">
		<div class="rightBox">
			<a href="guestbook.php" class="btn_s">我要留言</a>
		</div>
		<div class="blank10"></div>
		<div class="rightBox">
			<h3>最新公告<b class="cGrey fn">News</b></h3>
			<ul class="list_r">
				<?php foreach ($infor as $inforValues) {;?>
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


</div>
<div class="footer">
	<p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567</p>
	<p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
	<p><a href="#">粤ICP备08108790号</a></p>
</div>
</body>
</html>
