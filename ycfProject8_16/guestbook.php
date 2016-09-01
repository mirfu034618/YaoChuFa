<!-------------------------首部HTML标签信息----------------------------------->
<?php include "public/htmlPublic.php";?>
<!-------------------------首部HTML标签信息----------------------------------->

<?php
include "class/MySqlClass.php";
$mysql     = new \Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$contact   = $mysql->select("contact");
$inforList = $mysql->select("information", "", "0,5");
$link      = $mysql->select("link", "", "0,5");

?>

<body>
<!------------首部公共部分---------------->
<?php include "public/headerPublic.php";?>
<!--------------------------------------->
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">客户留言<b class="cGrey fn">Guestbook</b></h2>
        </div>
		<form action="messageSuccess.php" method="post">
        <div class="intro" style="padding-top:16px">
        	<label>呢称：</label><input name="messageName" type="text" /><br />
			<label>内容：</label><textarea name="messageContent" cols="" rows="" style="width:545px;height:138px"></textarea>
            <input name="submit" type="submit" value="提交" class="btn_input" />
        </div>
		</form>
    </div>
	<!------------我要留言+最新公告+友情链接--------------->
	<?php include "public/newsPublic.php";?>


</div>
<!--------------联系方式-------------->
<?php include "public/contactPublic.php";?>
</body>
</html>
