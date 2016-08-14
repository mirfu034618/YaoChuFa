<?php
require "counterClass/CounterClass.php";
$test = new CounterClass();
?>
<html>
<head>
	<meta http-equiv="CONTENT-TYPE" charset="utf-8">
	<title>访问计数器</title>
</head>
<body>
<h1>欢迎访问</h1>
<hr />
<br />
你是第<?php echo $test->counter("counterClass/counter.txt"); ?>访客
</body>
</html>