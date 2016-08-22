<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php
include "class/MySqlClass.php";
$mysql        = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$selectValues = [
    "inforId" => $_GET['inforId'],
];

$infor     = $mysql->select("information", $selectValues);
$inforList = $mysql->select("information", "", "0,5");
$link      = $mysql->select("link");
$contact   = $mysql->select("contact");
?>
<body>
<div class="header">
	<h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a><a href="admin/login.php" class="btn_f">管理员登录</a></p>
</div>
<div class="nav">
	<div class="nav_left"></div>
    <ul>
     	<li class="sel"><a href="index.php">首  页</a></li>
        <li><a href="aboutUs.php">公司简介</a></li>
        <li><a href="productList.php">产品展示</a></li>
        <li><a href="info.php">行业资讯</a></li>
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
        	<h2 class="cBlue fB">详细信息<b class="cGrey fn">News</b></h2>
        </div>
        <div class="article">
			<h3><?php echo $infor['inforTitle']; ?></h3>
			<h4>发布时间：<?php echo $infor['inforTime']; ?></h4>
			<?php echo $infor['inforContent']; ?>

        </div>
    </div>
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


</div>
<div class="footer">
	<p>地址：<?php echo $contact['contactAddress']; ?> | 联系人：<?php echo $contact['contactName']; ?> | 移动电话：<?php echo $contact['mobilePhone']; ?> | 固定电话：<?php echo $contact['fixedPhone']; ?> | 传 真：<?php echo $contact['fax']; ?></p>
	<p><?php echo $contact['copyright']; ?></p>
	<p><a href="#"><?php echo $contact['number']; ?></a></p>
</div>
</body>
</html>
