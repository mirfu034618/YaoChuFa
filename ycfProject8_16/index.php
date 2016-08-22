<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>金陵贸易有限公司</title>
	<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php
include "class/MySqlClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set('PRC');
$infor      = $mysql->select("information", "", "0,5"); //查询资讯表
$inforLimit = $mysql->select("information", "", "0,5");
$link       = $mysql->select("link"); //查询友情链接表
$product    = $mysql->select("product", "", "0,3"); //查询产品表
$contact    = $mysql->select("contact"); //查询公司联系方式表
$company    = $mysql->select("company"); //查询公司简介表
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
	<div class="time"><?php echo date("Y-m-d H:i:s", time()); ?></div>
	<div class="nav_right"></div>
</div>
<div class="banner">
	<a href="#"><img src="images/banner.jpg" align="banner" /></a>
</div>
<div class="content">
	<div class="w475_l">
		<div class="title">
			<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
		</div>
		<div class="intro">
			<div>
				<?php echo mb_substr($company['companyContent'], 0, 150, "utf-8"); ?><!--对获取的文章进行截取-->
			</div>
			<div align="right"><a href="aboutUs.php" class="cBlue"> 查看更多...</a></div>
			<div class="hackbox"></div>
		</div>
		<div class="blank10"></div>
		<div class="title">
			<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="productList.php" class="cBlue"> 更多...</a></span>
		</div>
		<ul class="list_l">
			<?php foreach ($product as $productValues) {;?>
			<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="productInfo.php?productId=<?php echo $productValues['productId']; ?>"><img src="<?php echo $productValues['productPath']; ?>" width="120" height="100" alt="<?php echo $productValues['productTitle']; ?>" /></a>
                </span>
				<span class="listtxt"><a href="productInfo.php?productId=<?php echo $productValues['productId']; ?>"><?php echo $productValues['productTitle']; ?></a></span>
			</li>
			<?php }
?>
		</ul>
	</div>
	<div class="w370_r">
		<div class="title">
			<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
		</div>
		<ul class="list_r">
			<?php foreach ($inforLimit as $inforLimitValues) {;?>
			<li>
				<a href="article.php?inforId=<?php echo $inforLimitValues['inforId']; ?>"><?php echo $inforLimitValues['inforTitle']; ?></a>
				<span class="time1"><?php echo $inforLimitValues['inforTime']; ?></span>
			</li>
            <?php }
?>
		</ul>
		<div class="blank29"></div>
		<div class="title">
			<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
		</div>
		<ul class="list_r">
			<?php foreach ($infor as $inforValues) {;?>
			<li><a href="article.php?inforId=<?php echo $inforValues['inforId']; ?>"><?php echo $inforValues['inforTitle']; ?></a>
				<span class="time1"><?php echo $inforValues['inforTime']; ?></span></li>
			<?php }
?>
		</ul>
	</div>
	<div class="hackbox"></div>

	<div class="title">
		<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
	</div>
	<p class="links">
		<?php foreach ($link as $linkValues) {;?>
		<a href="<?php echo $linkValues['linkPath']; ?>"><?php echo $linkValues['linkName']; ?></a>
		<?php }
?>
	</p>
</div>
<div class="footer">
	<p>地址：<?php echo $contact['contactAddress']; ?> | 联系人：<?php echo $contact['contactName']; ?> | 移动电话：<?php echo $contact['mobilePhone']; ?> | 固定电话：<?php echo $contact['fixedPhone']; ?> | 传 真：<?php echo $contact['fax']; ?></p>
	<p><?php echo $contact['copyright']; ?></p>
	<p><a href="#"><?php echo $contact['number']; ?></a></p>
</div>
</body>
</html>
