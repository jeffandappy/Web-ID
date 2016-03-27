﻿<?php
mysql_pconnect(
"localhost", //MySQL資料庫主機地址
"jeffandhappy_web", //MySQL資料庫使用者名稱
"0922661612"  //MySQL資料庫使用者密碼
);
mysql_query("SET NAMES UTF-8");
mysql_select_db(
"jeffandhappy_web" //MySQL資料庫名稱
);
?>
