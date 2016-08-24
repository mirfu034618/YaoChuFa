<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册页面</title>
</head>

<body>
<form action="uploadInfor.php" method="post" enctype="multipart/form-data">
 <table>
	<tr>
		<td colspan="2"><h1>用户注册页面</h1></td>
	</tr>
    <tr>
	    <td>用户名：</td><td><input type="text" size="20" name="userName"></td>
    </tr>
	<tr>
		<td>密码：</td><td><input type="password" name="userPwd"></td>
	</tr>
	<tr>
		<td>确认密码：</td><td><input type="password" name="userPword"></td>
	</tr>
	<tr>
		<td>性别：</td>
		<td>
			<input type="radio" value="男" name="sex" onclick="" checked>
			  <label>男</label>
			<input type="radio" value="女" name="sex" onclick="">
			  <label>女</label>
		</td>
	</tr>
	<tr>
		<td>爱好：</td>
		<td>
			<input type="checkbox" name="likes[]" value="听音乐">听音乐
			<input type="checkbox" name="likes[]" value="看电影">看电影
			<input type="checkbox" name="likes[]" value="玩游戏">玩游戏
		</td>
	</tr>
	<tr>
		<td>你所在的城市：</td>
		<td>
			<select name="city">
				<option value="广州市">广州市</option>
				<option value="海口市">海口市</option>
				<option value="万宁市">万宁市</option>
				<option value="陵水县">陵水县</option>
				<option value="文昌市">文昌市</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>照片：</td><td><input type="file" name="pic"></td>
	</tr>
	<tr>
		<td>个人简介：</td>
		<td>
		   <textarea name="company" cols="50" rows="10"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="提交">&nbsp;&nbsp;<input type="reset" name="reset" value="重写"></td>
	</tr>
 </table>
</form>
</body>
</html>
