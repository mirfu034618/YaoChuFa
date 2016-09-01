<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>编辑用户资料</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php
include "../class/MySqlClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set("PRC");

$adminSelectValues = ["adminId" => $_GET['adminId']];
$adminSelect       = $mysql->select("admin", $adminSelectValues);

$updateSet = [ //管理员信息更新的值获取操作
    "adminName" => $_POST['userName'],
    "adminPwd"  => $_POST['password'],
    "adminReg"  => date("Y-m-d h:i:s", time()),
    "adminIp"   => $_SERVER['SERVER_ADDR'],
];
$updateId = [
    "adminId" => $_GET['adminId'], //获取要更新的管理员ID
];
$mysql->update("admin", $updateSet, $updateId);
?>
<body>
<div class="container">
	<h3 class="marginbot">编辑用户资料<a href="userList.php" class="sgbtn">返回用户列表</a></h3>
	<form action="" method="post">
	<div class="mainbox">
		<table class="opt">
			<tbody>
			<tr>
				<th>用户名:</th>
			</tr>
			<tr>
				<td>
					<input name="userName" value="<?php echo $adminSelect['adminName']; ?>" class="txt" type="text">
				</td>
			</tr>
			<tr>
				<th>密　码:<span style="font-weight:normal"> [密码留空，保持不变]</span></th>
			</tr>
			<tr>
				<td>
					<input name="password" value="<?php echo $adminSelect['adminPwd']; ?>" class="txt" type="password">
				</td>
			</tr>
			</tbody>
		</table>
		<div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
	</form>
	</div>
</div>
</body>
</html>
