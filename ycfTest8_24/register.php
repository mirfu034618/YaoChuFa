<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册页面</title>
	<link type="text/css" rel="stylesheet" href="css/style.css" >
</head>
<script src="js/register.js" type="text/javascript"></script>
<body>
<form name="from" action="uploadInfor.php" method="post" enctype="multipart/form-data" onsubmit="return checkFrom(this)">
 <table class="table">
	<tr>
		<td colspan="2" class="tdh"><h1>用户注册页面</h1></td>
	</tr>
    <tr>
	    <td class="tr">用户名：</td><td class="tr"><input type="text" size="20" name="userName"></td>
    </tr>
	<tr>
		<td class="tr">密码：</td><td class="tr"><input type="password" name="userPwd"></td>
	</tr>
	<tr>
		<td class="tr">确认密码：</td><td class="tr"><input type="password" name="userPword"></td>
	</tr>
	<tr>
		<td class="tr">性别：</td>
		<td class="tr">
			<input type="radio" value="男" name="sex">
			  <label>男</label>
			<input type="radio" value="女" name="sex">
			  <label>女</label>
		</td>
	</tr>
	<tr>
		<td class="tr">爱好：</td>
		<td class="tr">
			<input type="checkbox" name="likes[]" value="听音乐">听音乐
			<input type="checkbox" name="likes[]" value="看电影">看电影
			<input type="checkbox" name="likes[]" value="玩游戏">玩游戏
		</td>
	</tr>
	<tr>
		<td class="tr">你所在的城市：</td>
		<td class="tr">
			<select name="city">
				<option value="">==选择城市==</option>
				<option value="广州市">广州市</option>
				<option value="海口市">海口市</option>
				<option value="万宁市">万宁市</option>
				<option value="陵水县">陵水县</option>
				<option value="文昌市">文昌市</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="tr">照片：</td><td class="tr"><input type="file" name="pic"></td>
	</tr>
	<tr>
		<td class="tr">个人简介：</td>
		<td class="tr">
		   <textarea name="company" cols="50" rows="10"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="tdh"><input type="submit" name="submit" value="提交">&nbsp;&nbsp;<input type="reset" name="reset" value="重写"></td>
	</tr>
 </table>
</form>
</body>
</html>
