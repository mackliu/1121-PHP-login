<header>
    <div>
        <?php
            if(isset($_SESSION['login'])){
                echo "歡迎，".$_SESSION['login'];
                echo "<a href='logout.php'> 登出</a>";
            }
        ?>
    </div>
    <div>
        <ul>
            <li><a href='login.php'>首頁</a></li>
            <li>產品</li>
            <li>關於我們</li>
        </ul>
    </div>
    <div>
        <span>選單</span>
    </div>
</header>
