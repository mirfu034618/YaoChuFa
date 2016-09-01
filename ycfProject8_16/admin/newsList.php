<!-------------后台新闻公共部分-------------------->
<?php include "adminPublic/adminNewsPublic.php";?>
<!-------------后台新闻公共部分-------------------->

<?php
include "../class/MySqlClass.php";
$mysql = new \Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$infor = $mysql->select("information");

$getId  = implode(",", $_POST['inforName']);
$delete = "inforId in(" . $getId . ")";
$mysql->delete("information", $delete);
?>

<body>
<div class="container">
    <h3 class="marginbot">最新公告<a href="newsInsert.php" class="sgbtn">添加新文章</a></h3>
    <div class="mainbox">
        <form action="" method="post">
            <table class="datalist fixwidth">
                <tbody>
                    <tr>
                        <th nowrap="nowrap"><input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label></th>
                        <th nowrap="nowrap">文章名称</th>
                        <th nowrap="nowrap">添加人</th>
                        <th nowrap="nowrap">添加时间</th>
                        <th nowrap="nowrap">详情</th>
                    </tr>
                    <?php foreach ($infor as $inforList) {?>
                    <tr>
                        <td width="80"><input name="inforName[]" value="<?php echo $inforList['inforId']; ?>" class="checkbox" type="checkbox"></td>
                        <td><strong><?php echo $inforList['inforTitle']; ?></strong></td>
                        <td width="100"><?php echo $_COOKIE['userName']; ?></td>
                        <td width="150"><?php echo $inforList['inforUser']; ?></td>
                        <td width="100"><a href="newsEdit.php?updateInforId=<?php echo $inforList['inforId']; ?>">编辑</a></td>
                    </tr>
                    <?php }
?>
                    <tr class="nobg">
                    	<td><input value="提 交" class="btn" type="submit"></td>
                        <td class="tdpage" colspan="4">
                            <div class="pages">
                            <em>100</em>
                            <strong>1</strong>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="" class="next">&rsaquo;&rsaquo;</a>
                            <a href="" class="last">... </a>
                            <kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='?page='+this.value; return false;}" /></kbd>
                            </div>
                      	</td>
                    </tr>
                </tbody>
        	</table>
        <div class="margintop"></div>
        </form>
    </div>
</div>
</body>
</html>
