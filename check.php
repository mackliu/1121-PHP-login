<?php
session_start();

$acc='admin';
$pw='1234';

if($_POST['acc']==$acc && $_POST['pw']==$pw){
    //echo "登入成功";
    $_SESSION['login']=$acc;

    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }

    header("location:member_center.php");
    
}else{
    //echo "帳號或密碼錯誤";
    $_SESSION['error']="帳號或密碼錯誤";
    if(isset($_SESSION['login'])){
        unset($_SESSION['login']);
    }

    header("location:login.php");
    
}

?>