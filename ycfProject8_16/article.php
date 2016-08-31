<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
<script src="js/dateTime.js" type="text/javascript"></script>
</head>
<?php
include "class/MySqlClass.php";
$mysql        = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$selectValues = [
    "inforId" => $_GET['inforId'],
];

$infor     = $mysql->select("information", $selectValues);
$inforList = $mysql->select("information", "", "0,5");
$link      = $mysql->select("link");
$contact   = $mysql->select("contact");
?>
<body>
<!------------首部公共部分---------------->
<?php include "public/headerPublic.php";?>
<!--------------------------------------->
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">详细信息<b class="cGrey fn">News</b></h2>
        </div>
        <div class="article">
			<h3><?php echo $infor['inforTitle']; ?></h3>
			<h4>发布时间：<?php echo $infor['inforTime']; ?></h4>
			<?php echo $infor['inforContent']; ?>

        </div>
    </div>

    <!------------我要留言+最新公告+友情链接--------------->
	<?php include "public/newsPublic.php";?>

</div>
<!--------------联系方式-------------->
<?php include "public/contactPublic.php";?>
</body>
</html>
