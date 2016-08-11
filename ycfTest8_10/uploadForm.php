<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>文件上传</title>
</head>
<body>

<form name="myForm" enctype="multipart/form-data" method="POST" action="uploadFileClass/UploadFileClass.php">
	<input type="file" name="files[]" /><br />
	<input type="file" name="files[]" /><br />
	<input type="file" name="files[]" /><br />
	<input type="submit" name="submit" value="上传">
</form>
</body>
</html>
