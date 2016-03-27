<?php
/**
 *changken會員系統專用函數庫
 *簡介:為促進程式開發人員方便開發，changken特別製作專用函數庫。
 *作者:changken 
 *使用方式:請將函數直接複製即可。注意！一定要引入此函數庫，不然不能使用！
 *函數:reg()、login()、update()、delete()、logout()
 */
//註冊函數
function reg($username,$email,$password,$password2,$password_md5,$level)
{
if($username==null)
{
echo"<font color='red'>錯誤！使用者名稱不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
elseif($password==null)
{
echo"<font color='red'>錯誤！密碼不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
elseif($password2==null)
{
echo"<font color='red'>錯誤！密碼(再輸入一次)不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
elseif($password!=$password2)
{
echo"<font color='red'>錯誤！密碼輸入不一致！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
else
{
$sql="INSERT INTO user (username, email, password, level) VALUES ('$username', '$email', '$password_md5', '$level');";
if(mysql_query($sql))
{
echo"<font color='green'>註冊成功！正在重新導向...</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
else
{
echo"<font color='red'>註冊失敗！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
}
}
//登入函數
function login($username,$password,$password_md5)
{
$sql="SELECT * FROM user WHERE username='$username';";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
if($username==null)
{
echo"<font color='red'>你忘了輸入ID喔！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
elseif($password==null)
{
echo"<font color='red'>錯誤！密碼不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
elseif($username!=$row[1])
{
echo"<font color='red'>錯誤！查無使用者！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
elseif($password_md5!=$row[3])
{
echo"<font color='red'>錯誤！密碼錯誤！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
else
{
if($row[4]=="user")
{
echo"<font color='green'>正在獲取授權...</font>";
echo"感謝您使用微，ID";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
$_SESSION['username']=$username;
$_SESSION['level']="user";
}
elseif($row[4]=="admin")
{
echo"<font color='green'>登入成功！</font>";
echo"您的會員權限為:管理員";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
$_SESSION['username']=$username;
$_SESSION['level']="admin";
}
else
{
echo"<font color='red'>登入失敗！如果你發現這是個錯誤，請回報管理員</font>";
echo'<meta http-equiv="refresh" content="5; url=login.php">';
}
}
}
//更新帳號資訊函數
function update($username,$email,$password_md5,$level)
{
$sql = "UPDATE user SET email = '$email', password = '$password_md5', level = '$level' WHERE username='$username';";
if(mysql_query($sql))
{
echo"<font color='green'>更新成功！</font>";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
}
else
{
echo"<font color='red'>更新失敗！</font>";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
}
}
//刪除會員函數(限管理員可使用)
function delete($username)
{
if($_SESSION['level']=="admin")
{
$sql = "DELETE FROM user WHERE username = '$username';";
if(mysql_query($sql))
{
echo"<font color='green'>刪除成功！</font>";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
}
else
{
echo"<font color='red'>刪除的錯誤</font>";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
}
}
elseif($_SESSION['level']=="user")
{
echo"<font color='red'>帳號權限不足！</font>";
echo"<font color='red'>目前您的帳號權限為一般會員</font>";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
}
elseif($_SESSION['level']==null)
{
echo"<font color='red'>你沒有登入！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
}
//登出函數
function logout()
{
unset($_SESSION['username']);
unset($_SESSION['level']);
echo "感謝您的使用！";
echo'<meta http-equiv="refresh" content="5; url=login.php">';
}
?>