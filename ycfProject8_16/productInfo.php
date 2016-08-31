<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>金陵贸易有限公司</title>
	<link type="text/css" rel="stylesheet" href="style/style.css" />
	<script src="js/dateTime.js" type="text/javascript"></script>
</head>
<?php
include "class/MySqlClass.php";
$mysql     = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$productid = [
    "productId" => $_GET['productId'], //获取要查询的产品的id
];
$product = $mysql->select("product", $productid); //根据产品的id进行查询其相关信息
$infor   = $mysql->select("information", "", "0,5"); //查询资讯表
$link    = $mysql->select("link"); //查询友情链接表
$contact = $mysql->select("contact");
?>
<body>
<!------------首部公共部分---------------->
<?php include "public/headerPublic.php";?>
<!--------------------------------------->
<div class="content">
	<div class="lefter">
		<div class="title">
			<h2 class="cBlue fB">产品信息<b class="cGrey fn">Product Info</b></h2>
		</div>
		<div class="product">
			<img src="<?php echo $product['productPath']; ?>" width="120" height="100" alt="<?php echo $product['productTitle']; ?>" />
			<p><strong>产品名称</strong>：<?php echo $product['productTitle']; ?></p>
			<p><strong>产品描述</strong>：</p>
			<p><?php echo $product['productContent']; ?></p>

		</div>
	</div>
	<!------------我要留言+最新公告+友情链接--------------->
	<?php include "public/newsPublic.php";?>


</div>
<!--------------联系方式-------------->
<?php include "public/contactPublic.php";?>
</body>
</html>
