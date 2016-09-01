<!-------------------------首部HTML标签信息----------------------------------->
<?php include "public/htmlPublic.php";?>
<!-------------------------首部HTML标签信息----------------------------------->

<?php
include "class/MySqlClass.php";
$mysql     = new \Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$contact   = $mysql->select("contact");
$inforList = $mysql->select("information", "", "0,5"); //查询资讯表
$link      = $mysql->select("link");

?>

<body>
<!------------首部公共部分---------------->
<?php include "public/headerPublic.php";?>
<!--------------------------------------->
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">联系我们<b class="cGrey fn">Contact us</b></h2>
        </div>
        <div class="intro" style="height:167px">
        	地址：<?php echo $contact['contactAddress']; ?><br />
            联系人：<?php echo $contact['contactName']; ?><br />
            移动电话：<?php echo $contact['mobilePhone']; ?><br />
            固定电话：<?php echo $contact['fixedPhone']; ?><br />
            传真：<?php echo $contact['fax']; ?>
        </div>
        <div class="title">
        	<h2 class="cBlue fB">我的位置<b class="cGrey fn">Map</b></h2>
        </div>
        <div class="intro">
        	<iframe width="360" height="266" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.cn/maps?f=q&amp;source=s_q&amp;hl=zh-CN&amp;geocode=&amp;q=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82%E6%B5%B7%E7%8F%A0%E5%8C%BA&amp;aq=&amp;brcurrent=3,0x3402ffaca010ae9b:0x826837df2eae7a0e,1,0x340301fe46c655a3:0xc549ef142225757a%3B5,0,0&amp;brv=25.1-b20b3018_4134eab6_98868b16_719d4a7b_295494d9&amp;sll=23.129163,113.264435&amp;sspn=0.89159,1.150818&amp;g=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82&amp;ie=UTF8&amp;hq=&amp;hnear=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82%E6%B5%B7%E7%8F%A0%E5%8C%BA&amp;t=m&amp;ll=23.086838,113.320971&amp;spn=0.021002,0.030813&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://ditu.google.cn/maps?f=q&amp;source=embed&amp;hl=zh-CN&amp;geocode=&amp;q=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82%E6%B5%B7%E7%8F%A0%E5%8C%BA&amp;aq=&amp;brcurrent=3,0x3402ffaca010ae9b:0x826837df2eae7a0e,1,0x340301fe46c655a3:0xc549ef142225757a%3B5,0,0&amp;brv=25.1-b20b3018_4134eab6_98868b16_719d4a7b_295494d9&amp;sll=23.129163,113.264435&amp;sspn=0.89159,1.150818&amp;g=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82&amp;ie=UTF8&amp;hq=&amp;hnear=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82%E6%B5%B7%E7%8F%A0%E5%8C%BA&amp;t=m&amp;ll=23.086838,113.320971&amp;spn=0.021002,0.030813&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">查看大图</a></small>
        </div>
    </div>
	<!------------我要留言+最新公告+友情链接--------------->
	<?php include "public/newsPublic.php";?>

</div>
<!--------------联系方式-------------->
<?php include "public/contactPublic.php";?>
</body>
</html>
