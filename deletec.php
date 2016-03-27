<?php 
session_start();
include("config.php"); 
include("function.php");//引入函數庫
$username = $_POST['username'];
delete($username);//使用刪除函數
?>