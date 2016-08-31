<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>添加新文章</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>

<?php
include "../class/MySqlClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set("PRC");

$updateValues = [ //获取更新之后的值
    "inforTitle"   => $_POST['title'],
    "inforTime"    => date("Y-m-d h:i:s", time()),
    "inforContent" => $_POST['content'],
    "inforUser"    => $_COOKIE['userName'],
];
$inforId = [
    "inforId" => $_GET['updateInforId'], //因为联系的信息只有一条，所以指定id号进行数据的更新操作
];
$mysql->update("information", $updateValues, $inforId); //调用更新的方法，三个参数
?>

<body>
<div class="container">
	<h3 class="marginbot">添加新文章<a href="newsList.php" class="sgbtn">返回文章列表</a></h3>
	<div class="mainbox">
		<form action="" method="post">
			<table class="opt" style="width:600px;">
				<tbody>
				<tr>
					<th>文章名称：</th>
				</tr>
				<tr>
					<td>
						<input name="title" class="txt" style="width:400px;" type="text">
					</td>
				</tr>
				<tr>
					<th>文章内容：</th>
				</tr>
				<tr>
					<td><textarea style="width:400px; height:150px" name="content"></textarea></td>
				</tr>
				</tbody>
			</table>
			<div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
		</form>
	</div>
</div>
</body>
</html>
