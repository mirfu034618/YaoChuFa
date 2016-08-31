<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>金陵贸易有限公司</title>
	<link type="text/css" rel="stylesheet" href="style/style.css" />
	<script type="text/javascript" src="js/dateTime.js"></script>
</head>
<?php
include "class/MySqlClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set('PRC');

$productTypeId = $_GET['typeId']; //获取要查询的类型ID
$select        = [
    "productTypeId" => $productTypeId,
];
$product = $mysql->select("product", $select); //查询根据获取的类型ID查对应的产品信息

$productType = $mysql->select("productType"); //查询类型表

$contact = $mysql->select("contact"); //查询公司联系方式信息
?>
<body>
<!------------首部公共部分---------------->
<?php include "public/headerPublic.php";?>
<!--------------------------------------->
<div class="content">
	<div class="lefter">
		<div class="title">
			<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
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
		<div class="blank10"></div>
		<div class="pages"><a href="productList.php" class="pre">上一页</a><a class="current">1</a><a href="productList.php?page=2">2</a><a href="productList.php?page=3">3</a><a href="productList.php?page=2" class="next">下一页</a></div>
		<div class="blank6"></div>
	</div>
	<div class="righter">
		<div class="rightBox">
			<h3>产品分类</h3>
			<ul class="list_r">
				<?php foreach ($productType as $productTypeListValues) {;?>
					<li><a href="productTypeList.php?typeId=<?php echo $productTypeListValues['productTypeId']; ?>"><?php echo $productTypeListValues['productTypeName']; ?></a></li>
				<?php }
?>
			</ul>
		</div>
	</div>
	<div class="hackbox"></div>


</div>
<!--------------联系方式-------------->
<?php include "public/contactPublic.php";?>
</body>
</html>
