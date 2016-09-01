<!-------------------------首部HTML标签信息----------------------------------->
<?php include "public/htmlPublic.php";?>
<!-------------------------首部HTML标签信息----------------------------------->
<?php
include "class/MySqlClass.php";
$mysql      = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$infor      = $mysql->select("information", "", "0,5"); //查询资讯表
$inforLimit = $mysql->select("information", "", "0,5");
$link       = $mysql->select("link"); //查询友情链接表
$product    = $mysql->select("product", "", "0,3"); //查询产品表
$contact    = $mysql->select("contact"); //查询公司联系方式表
$company    = $mysql->select("company"); //查询公司简介表
?>
<body>
<!------------首部公共部分---------------->
<?php include "public/headerPublic.php";?>
<!--------------------------------------->
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
<!--------------联系方式-------------->
<?php include "public/contactPublic.php";?>
</body>
</html>
