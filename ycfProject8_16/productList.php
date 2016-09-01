<!-------------------------首部HTML标签信息----------------------------------->
<?php include "public/htmlPublic.php";?>
<!-------------------------首部HTML标签信息----------------------------------->

<?php
include "class/MySqlClass.php";
$mysql       = new \Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$product     = $mysql->select("product");
$productType = $mysql->select("productType");
$contact     = $mysql->select("contact");
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
			<?php foreach ($product as $productList) {;?>
        	<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="productInfo.php?productId=<?php echo $productList['productId']; ?>"><img src="<?php echo $productList['productPath']; ?>" width="120" height="100" alt="<?php echo $productList['productTitle']; ?>" /></a>
                </span>
                <span class="listtxt"><a href=""><?php echo $productList['productTitle']; ?></a></span>
            </li>
			<?php }
?>
        </ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
        <div class="blank6"></div>
    </div>
	<div class="righter">
    	<div class="rightBox">
        	<h3>产品分类</h3>
            <ul class="list_r">
				<?php foreach ($productType as $productTypeList) {?>
            	<li><a href="productTypeList.php?typeId=<?php echo $productTypeList['productTypeId']; ?>"><?php echo $productTypeList['productTypeName']; ?></a></li>
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
