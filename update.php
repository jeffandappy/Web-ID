﻿<!DOCTYPE HTML>
<!--
    Spectral by HTML5 UP
    html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>新資料</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
<h1><a href="member.php">會員中心</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>選單</span></a>
									<div id="menu">
										<ul>
											<li><a href="member.php">會員中心</a></li>
											<li><a href="update.php">更新帳號</a></li>
											<li><a href="delete.php">管理員</a></li>
											<li><a href="reg.php">新帳號</a></li>
											<li><a href="logout.php">登出</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>修改帳戶資訊</h2>
							<p>微，ID禁止使用中文</p>
						</header>
                                                <?php
session_start();
include("config.php");
$username = $_SESSION['username'];
$sql = "SELECT * FROM user where username='$username'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
if($_SESSION['level']!=null)
{
?>
						<section class="wrapper style5">
							<div class="inner">

								<h3>更新帳戶資料</h3>
<form method="post" action="updatec.php" name="reg">
你的微，ID<input name="username" type="text" readonly value="<?php echo $row[1];?>"><br>
電子郵件<input name="email" type="text" value="<?php echo $row[2];?>"><br>
密碼 | <a href="http://lab.25sprout.com/nrprnd/">需要亂碼生成器嗎？</a><input name="password" type="password"
evel" type="hidden" value="<?php echo $row[4];?>"><br>
<input name="reg" value="更新" type="submit"><br>
</form>
<?php
}
else
{
?>
<font color="red">您尚未登入！</font>
<?php
}
?>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>© 2016 微，旅行</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
