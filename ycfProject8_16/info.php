<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
<script type="text/javascript" src="js/dateTime.js"></script>
</head>
<?php
include "class/MySqlClass.php";
$mysql = new \Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set('PRC');

$inforList = $mysql->select("information");
$infor     = $mysql->select("information"); //查询information表（资讯表）
$link      = $mysql->select("link"); //查询link(友情链接表)
$contact   = $mysql->select("contact"); //查询contact（公司联系表）
$company   = $mysql->select("company"); //查询company（公司简介表）应该写入contact表，增加不必要的表，但没改
?>
<body>
<!------------首部公共部分---------------->
<?php include "public/headerPublic.php";?>
<!--------------------------------------->
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2>
        </div>
        <ul class="list_r" style="padding-right:40px">
			<?php foreach ($inforList as $inforListValues) {;?>
        	<li><a href="article.php?inforId=<?php echo $inforListValues['inforId']; ?>"><?php echo $inforListValues['inforTitle']; ?></a><span class="time2"><?php echo $inforListValues['inforTime']; ?></span></li>
            <?php }
?>
		</ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
    </div>
	<!------------我要留言+最新公告+友情链接--------------->
	<?php include "public/newsPublic.php";?>


</div>
<!--------------联系方式-------------->
<?php include "public/contactPublic.php";?>
</body>
</html>
