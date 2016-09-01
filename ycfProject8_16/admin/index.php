<!------------------后台首部-------------------->
<?php include "adminPublic/headerPublic.php";?>
<!------------------后台首部-------------------->

<?php
if (!@$_COOKIE['isLogin']) {
    echo "<script>alert('你还没登陆，不能访问首页');location.href='login.php';</script>";
}
?>

<body scroll="no">
<table height="100%" cellspacing="0" cellpadding="0" width="100%">
    <tbody>
        <tr>
            <td colspan="2" height="69">
            	<iframe name="header" src="top.php" frameBorder="0" width="100%" scrolling="no" height="69"></iframe>
            </td>
        </tr>
        <tr>
            <td valign="top" width="160">
            <iframe name="menu" src="menu.php" frameBorder="0" width="160" scrolling="no" height="100%" target="main"></iframe>
            </td>
            <td valign="top" width="100%">

            <iframe style="overflow:visible" name="main" src="sysInfo.php" frameBorder="0" width="100%" scrolling="yes" height="100%"></iframe>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
