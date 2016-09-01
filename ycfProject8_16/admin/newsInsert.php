<!-------------后台新闻公共部分-------------------->
<?php include "adminPublic/adminNewsPublic.php";?>
<!-------------后台新闻公共部分-------------------->
<body>
<div class="container">
    <h3 class="marginbot">添加新文章<a href="newsList.php" class="sgbtn">返回文章列表</a></h3>
    <div class="mainbox">
        <form action="transFile/newsAdd.php" method="post">
            <table class="opt" style="width:600px;">
                <tbody>
                    <tr>
                        <th>文章名称：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="title" class="txt" style="width:400px;" type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                    </tr>
                    <tr>
                        <td><textarea style="width:400px; height:150px" name="content"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>
