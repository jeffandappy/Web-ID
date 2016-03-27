<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<meta content="text/html; charset=UTF8" http-equiv="content-type">
<title>登出中...</title>
<link rel="stylesheet" href="play.css" />
</head>

<body>
<h1 style="text-align: center;"></h1>
<div style="text-align: center;">
<div class="windows8">
	<div class="wBall" id="wBall_1">
		<div class="wInnerBall"></div>
	</div>
	<div class="wBall" id="wBall_2">
		<div class="wInnerBall"></div>
	</div>
	<div class="wBall" id="wBall_3">
		<div class="wInnerBall"></div>
	</div>
	<div class="wBall" id="wBall_4">
		<div class="wInnerBall"></div>
	</div>
	<div class="wBall" id="wBall_5">
		<div class="wInnerBall"></div>
	</div>
</div>
<?php
session_start();
include("function.php");
logout();//使用登出函數
?>
</div>
</body>

</html>