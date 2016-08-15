<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言本</title>
</head>
<body>

<h1><font color="#a9a9a9">我的留言本</font></h1>
<hr />

<?php
$read = fopen("messageClass/test.txt", "r");
while (!feof($read)) {
    $readcol = fgets($read, 4096);
    echo $readcol . "<br />";
}
fclose($read);
?>

<hr />
<form action="messageClass/newClass.php" method="post">
	<table>
		<tr>
			<td colspan="2"><h1><font color="#a9a9a9">我要留言</font></h1></td>
		</tr>
		<tr>
			<td>昵称：</td><td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td>内容：</td><td><textarea cols="30" rows="10" name="usertext"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="提交" /></td>
			<td><a href="messageClass/clear.php">清空文件内容</a></td>
		</tr>
	</table>
</form>
</body>
</html>
