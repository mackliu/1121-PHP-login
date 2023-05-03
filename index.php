<?php include_once "./common/comm.php";

$here=$_GET['here']??'front';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div>
        <?php
            if(isset($_SESSION['login'])){
                echo "歡迎，".$_SESSION['login'];
                echo "<a href='./common/logout.php'> 登出</a>";
            }
        ?>
    </div>
    <div>
        <ul>
            <li><a href='index.php'>首頁</a></li>
            <li>產品</li>
            <li>關於我們</li>
            <li>
                <?php
                switch($here){
                    case "front":
                        include "./front/guest.php";
                    break;
                    case "member":
                        include "./front/vip.php";
                    break;
                }
                ?>
            </li>
            <?php
            if(isset($_SESSION['login'])){
                echo "<li>";
                echo "<a href='?here=member'>會員中心</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
    <div>
        <span>選單</span>
    </div>
</header>
<?php

switch($here){
    case 'front':
        include "./front/login.php";
    break;
    case 'member':        
        include "./front/member_center.php";
    break;
}

?>

</body>
</html>