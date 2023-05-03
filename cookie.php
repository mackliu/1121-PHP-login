<h1>cookie</h1>
<?php
date_default_timezone_set("Asia/Taipei");
//設定cookie
setcookie('name','mack',strtotime("2023-05-03 10:38:00"));

echo $_COOKIE['name'];

?>