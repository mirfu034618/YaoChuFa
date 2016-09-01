<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>联系我们</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php
include "../class/MySqlClass.php"; //
date_default_timezone_set("PRC"); //获取当地时间
$time = date("Y-m-d h:i:s", time()); //获取当地时间
if (@$_COOKIE['isLogin']) {
    $name = $_COOKIE['userName']; //获取登录成功后cookie记录的用户名
}
$mysql   = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie"); //链接数据库
$contact = $mysql->select("contact"); //查询contact表

?>

<body>
<div id="append"></div>
<div class="container">
	<h3>联系我们</h3>
	<div class="mainbox">
		<form action="transFile/contactUpdate.php" method="post">
			<table style="width:700px;">
				<tbody>
				<tr>
					<td>联系人：</td><td><input type="text" name="contactName" value="<?php echo $contact['contactName']; ?>"></td>
				</tr>
				<tr>
					<td>联系地址：</td><td><input type="text" name="contactAddress" value="<?php echo $contact['contactAddress']; ?>"></td>
				</tr>
				<tr>
					<td>移动电话：</td><td><input type="text" name="mobilePhone" value="<?php echo $contact['mobilePhone']; ?>"></td>
				</tr>
				<tr>
					<td>固定电话：</td><td><input type="text" name="fixedPhone" value="<?php echo $contact['fixedPhone']; ?>"></td>
				</tr>
				<tr>
					<td>传真：</td><td><input type="text" name="fax" value="<?php echo $contact['fax']; ?>"></td>
				</tr>
				<tr>
					<td>版权编号：</td><td><input type="text" name="number" value="<?php echo $contact['number']; ?>"></td>
				</tr>
				<tr>
					<td>公司名称：</td><td><input type="text" name="owner" value="<?php echo $contact['owner']; ?>"></td>
				</tr>
				<tr>
					<td>版本号：</td><td><input type="text" name="version" value="<?php echo $contact['version']; ?>"></td>
				</tr>
				<tr>
					<td>联系邮箱：</td><td><input type="text" name="email" value="<?php echo $contact['email']; ?>"></td>
				</tr>
				<tr>
					<td>版权信息：</td><td><textarea cols="30" rows="5" name="copyright"><?php echo $contact['copyright']; ?></textarea></td>
				</tr>
				<tr>
					<td colspan="2">添加人：<?php echo $name; ?> &nbsp;&nbsp;&nbsp;添加时间：<?php echo $time; ?></td>
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
