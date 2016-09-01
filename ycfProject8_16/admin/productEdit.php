<!----------------后台产品首部------------------->
<?php include "adminPublic/adminProductPublic.php";?>
<!----------------后台产品首部------------------->

<?php
include "../class/MySqlClass.php";
include "../class/UploadFileClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set("PRC");

$up = new FileUpload;
//设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
$up->set("path", "../upload/");
$up->set("maxsize", 2000000);
$up->set("allowtype", array("gif", "png", "jpg", "jpeg"));
$up->set("israndname", true);
$up->upload("pic");
$pictureName = $up->getFileName();
$productPath = "../upload/" . $pictureName;

$productUpdateValues = [
    "productNum"     => $_POST['productNum'],
    "productTitle"   => $_POST['productTitle'],
    "productPath"    => $productPath,
    "productContent" => $_POST['productContent'],
    "productTypeId"  => $_POST['typeId'],
    "productTime"    => date("Y-m-d h:i:s", time()),
];

$productUpdateId = [
    "productId" => $_GET['upProductId'],
];

$mysql->update("product", $productUpdateValues, $productUpdateId);

?>

<body>
<div class="container">
	<h3 class="marginbot">添加新产品<a href="productList.php" class="sgbtn">返回产品列表</a></h3>
	<div class="mainbox">
		<form action="" method="post" enctype="multipart/form-data">
			<table class="opt" style="width:600px;">
				<tbody>
				<tr>
					<td>产品编号：</td><td><input name="productNum" class="txt" style="width:400px;" type="text"></td>
				</tr>
				<tr>
					<td>产品名称：</td><td><input name="productTitle" class="txt" style="width:400px;" type="text"></td>
				</tr>
				<tr>
					<td>产品图片：</td><td><input name="pic" class="txt" style="width:400px;" type="file"></td>
				</tr>
				<tr>
					<td>产品类型：</td>
					<td>
						<select name="typeId">
							<option value="1">类型1</option>
							<option value="2">类型2</option>
							<option value="3">类型3</option>
							<option value="4">类型4</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>产品详情：</td><td><textarea style="width:400px; height:150px" name="productContent"></textarea></td>
				</tr>
				</tbody>
			</table>
			<div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
		</form>
	</div>
</div>
</body>
</html>

