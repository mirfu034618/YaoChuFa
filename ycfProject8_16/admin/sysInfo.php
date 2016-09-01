<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/common.js"></script>
</head>
<?php
include "../class/MySqlClass.php";
$mysql        = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$productCount = $mysql->select("product", "", "", "count(*)"); //获取产品总数
$inforCount   = $mysql->select("information", "", "", "count(*)"); //获取文章总数
$contact      = $mysql->select("contact");
?>
<body>
<div class="container">
	<h3>统计信息</h3>
	<ul class="memlist fixwidth">
		<li><em><a href="productList.php">产品总数</a>:</em><?php echo $productCount["count(*)"]; ?></li>
		<li><em><a href="newsList.php">文章总数</a>:</em><?php echo $inforCount["count(*)"]; ?></li>
		<li><em><a href="#">留言总数</a>:</em>100</li>
	</ul>

	<h3>系统信息</h3>
	<ul class="memlist fixwidth">
		<li><em>主机名:</em><?php echo $_SERVER['SERVER_ADDR'] . "&nbsp;&nbsp;&nbsp;" . "( port: )" . "&nbsp;&nbsp;&nbsp;" . $_SERVER['SERVER_PORT']; ?></li>
		<li><em>操作系统</em><?php echo PHP_VERSION; ?></li>
		<li><em>服务器软件:</em><?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
		<li><em>数据库平台:</em><?php echo mysql_get_server_info(); ?></li>
	</ul>
	<h3>版权信息</h3>
	<ul class="memlist fixwidth">
		<li>
			<em>版权所有:</em>
			<em class="memcont"><a href="http://www.jinling.com/" target="_blank"><?php echo $contact['owner']; ?></a></em>
		</li>
		<li>
			<em>程序版本:</em>
			<em class="memcont"><?php echo $contact['version']; ?></em>
		</li>
		<li>
			<em>技术支持:</em>
			<em class="memcont"><?php echo $contact['email']; ?></em>
		</li>
	</ul>
</div>
</body>
</html>
