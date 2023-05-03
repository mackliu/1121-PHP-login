<?php 
include_once('comm.php');

/* echo "己登出使用者".$_SESSION['name'];

unset($_SESSION['name']); */

unset($_SESSION['error']);
unset($_SESSION['login']);

header("location:../index.php");