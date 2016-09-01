<!------------------后台首部-------------------->
<?php include "adminPublic/headerPublic.php";?>
<!------------------后台首部-------------------->

<body>
<div class="mainhd">
	<div class="logo">金陵贸易 后台管理系统</div>
	<div class="uinfo">
		<p>
			您好, <EM><?php if (@$_COOKIE['isLogin']) {echo $_COOKIE['userName'];}
?></EM> [ <a href="judge.php?action=logout" target="_top">退出</a> ]
		</p>
	</div>
</div>
</body>
</html>
