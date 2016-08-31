<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>管理员列表</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
</head>
<?php
include "../class/MySqlClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$admin = $mysql->select("admin");

$getId  = implode(",", $_POST['userName']);
$delete = "adminId in(" . $getId . ")";
$mysql->delete("admin", $delete);
?>
<body>

<div class="container">
	<div class="hastabmenu">
		<ul class="tabmenu">
			<li id="adduserbtn" class="tabcurrent"><a href="index.php" >添加管理员</a></li>
		</ul>
		<div id="adduserdiv" class="tabcontentcur">
			<form action="transFile/userAdd.php" method="post">
			<table width="100%">
				<tbody>
				<tr>
					<td>用户名:</td>
					<td>
						<input name="userAdd" class="txt" type="text">
					</td>
					<td>密码:</td>
					<td><input name="passwordAdd" class="txt" type="password"></td>
					<td><input value="提 交" class="btn" type="submit"></td>
				</tr>
				</tbody>
			</table>
			</form>
		</div>
	</div>

	<br>
	<h3>管理员列表</h3>
	<div class="mainbox">
		<form method="post" action="userList.php">
		 <table class="datalist fixwidth">
			<tbody>
			<tr>
				<th>
					<input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label>
				</th>
				<th>用户名</th>
				<th>注册日期</th>
				<th>注册IP</th>
				<th>用户状态</th>
				<th>编辑</th>
			</tr>
			<?php foreach ($admin as $row) {;?>
			<tr>
				<td class="option">
					<input name="userName[]" value="<?php echo $row['adminId']; ?>" class="checkbox" type="checkbox">
				</td>
				<td><strong><?php echo $row['adminName']; ?></strong></td>
				<td><?php echo $row['adminReg']; ?></td>
				<td><?php echo $row['adminIp']; ?></td>
					<td>启用</td>
				<td><a href="userEdit.php?adminId=<?php echo $row['adminId']; ?>">编辑</a></td>
			</tr>
			<?php }
;?>
			<tr class="nobg">
				<td><input value="提 交" class="btn" type="submit"></td>
				<td class="tdpage" colspan="6">
					<div class="pages">
						<em>100</em>
						<strong>1</strong>
						<a href="">2</a>
						<a href="">3</a>
						<a href="">4</a>
						<a href="" class="next">&rsaquo;&rsaquo;</a>
						<a href="" class="last">... </a>
						<kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='?page='+this.value; return false;}" /></kbd>
					</div>
				</td>
			</tr>
			</tbody>
		 </table>
		</form>
	</div>
</div>
</body>
</html>
