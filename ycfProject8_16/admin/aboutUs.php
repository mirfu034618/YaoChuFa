<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>公司简介</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php
include "../class/MySqlClass.php";
date_default_timezone_set('PRC'); //设置时间地区
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie"); //连接数据库
$time  = date("Y-m-d h:i:s", time()); //获取当前时间
if (@$_COOKIE['isLogin']) { //获取cookie中登录后保存的用户名
    $name = $_COOKIE['userName'];
}

$company = $mysql->select("company"); //查找公司简介表
?>
<body>
<div id="append"></div>
<div class="container">
	<h3>公司简介</h3>
	<div class="mainbox">
		<form action="transFile/companyUpdate.php" method="post">
			<table style="width:700px;">
				<tbody>
				<tr>
					<td><textarea rows="10" cols="80" name="companyContent"><?php echo $company['companyContent']; ?></textarea></td>
				</tr>
				<tr>
					<td>添加人：<?php echo $name; ?> &nbsp;&nbsp;&nbsp;添加时间：<?php echo $time; ?></td>
				</tr>
				<tr>
					<td><input value="提 交" class="btn" type="submit"></td>
				</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>
</body>
</html>
