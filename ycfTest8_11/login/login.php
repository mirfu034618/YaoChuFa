<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
</head>
<body>
<form action="judge.php?action=login" method="post">
<table align="center" border="1">
   <tr>
	  <td colspan="2" align="center"><h1>请登录</h1></td>
   </tr>
   <tr>
	   <td>用户名：</td><td><input type="text" name="username" size="20" /></td>
   </tr>
   <tr>
	   <td>密码：</td><td><input type="password" name="userpwd" size="20" /></td>
   </tr>
   <tr>
       <td colspan="2" align="center">
		   <input type="submit" name="submit" value="登录" />
		   <input type="reset" name="reset" value="重置" />
	   </td>
   </tr>
</table>
</form>
</body>
</html>
