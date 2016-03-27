<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<meta content="text/html; charset=UTF8" http-equiv="content-type">
<title>刪除會員</title>
</head>

<body>
<h1 style="text-align: center;">刪除會員</h1>
<div style="text-align: center;">
<?php 
session_start();
if($_SESSION['level']=="admin")
{
?>
<form method="post" action="deletec.php" name="delete">
<table style="text-align: center; width: 100px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>

<td style="vertical-align: top;">
使用者:<input name="username" type="text"><br>
<input name="delete" value="刪除" type="submit"><br>
</td>
</tr>
</tbody>
</table>
</form>
<?php 
}
elseif($_SESSION['level']=="user")
{
echo"<font color='red'>帳號權限不足！</font>";
echo"<font color='red'>目前您的帳號權限為一般會員</font>";
}
else
{
echo"<font color='red'>您尚未登入！</font>";
}
?>
</div>
</body>

</html>