<?php

session_start();
/* echo "己登出使用者".$_SESSION['name'];

unset($_SESSION['name']); */

unset($_SESSION['error']);
unset($_SESSION['login']);

header("location:login.php");