<html lang="en">
<head>
   <meta charset="UTF-8">
   <title></title>
	<link type="text/css" rel="stylesheet" href="../style/style.css">
</head>

<body>
<div class="footer">
<p>地址：<?php echo $contact['contactAddress']; ?> | 联系人：<?php echo $contact['contactName']; ?> | 移动电话：<?php echo $contact['mobilePhone']; ?> | 固定电话：<?php echo $contact['fixedPhone']; ?> | 传 真：<?php echo $contact['fax']; ?></p>
<p><?php echo $contact['copyright']; ?></p>
<p><a href="#"><?php echo $contact['number']; ?></a></p>
</div>
</body>
</html>