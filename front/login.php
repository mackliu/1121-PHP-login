<?php

if(isset($_SESSION['login'])){
    echo "歡迎，";
    echo $_SESSION['login'];
    echo "<a href='./common/logout.php'>登出</a>";

}else{
?>
    <form action="./api/check.php" method="post">
        <div>
            <div style='color:red'>
            <?php
            if(isset($_SESSION['error'])){
                echo "帳號或密碼錯誤!";
            }
            ?>
            </div>
            <div class='input'>
                <label for="">帳號:</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class='input'>
                <label for="">密碼:</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div>
                <input type="submit" value="登入">
            </div>
        </div>
    </form>
<?php
}

?>
