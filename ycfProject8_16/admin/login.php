<!------------------后台首部-------------------->
<?php include "adminPublic/headerPublic.php";?>
<!------------------后台首部-------------------->
<body>
<div class="container">
		<form id="loginform" method="post" action="judge.php?action=login">
        <table class="mainbox">
            <tbody>
                <tr>
                    <td class="loginbox">
                    	<img src="images/login.gif">
                    </td>
                    <td class="login">
                    	<div class="errormsg loginmsg"><p>用户名不能为空！</p></div>
                    <table class="login_tab">
                    	<tr>
                        	<td>用户名:</td>
                            <td><input type="text" id="userName" tabindex="1" class="txt" name="userName"/></td>
                        </tr>
                        <tr>
                        	<td>密　码:</td>
                            <td><input type="password" value="" id="password" tabindex="2" class="txt" name="password"/></td>
                        </tr>
<!--                        <tr>-->
<!--                        	<td>验证码:</td>-->
<!--                            <td><input type="text" value="" tabindex="3" class="txt" name="imgcode" style="width:70px;"/> <img id="imgcode" src="images/imgcode.gif" title="看不清楚，点击换一张"/></td>-->
<!--                        </tr>-->
                        <tr>
                        	<td></td>
                            <td><input type="submit" tabindex="4" class="btn" value="登 录" name="submit"/></td>
                        </tr>
                    </table>

                    </td>
                </tr>
            </tbody>
        </table>
        </form>
</div>
<div class="footer">© 2009 <a href="http://www.jinling.com/" target="_blank">金陵贸易有限公司</a></div>
</body>
</html>
