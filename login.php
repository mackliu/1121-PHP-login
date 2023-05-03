<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
form > div {
    border: 1px solid lightgreen;
    box-shadow: 0 0 10px lightgreen;
    width: 400px;
    margin: 150px auto;
    padding: 20px;
    border-radius: 10px;
}

.input {
    margin: 10px;
}

.input input {
    border: 0;
    border-bottom: 1px solid gray;
}

input[type='submit'] {
    border: 0;
    background: lightskyblue;
    padding: 5px 15px;
    border-radius: 5px;
    /* display: inline-block; */
    /* margin: auto; */
}

input[type='submit']:hover {
    cursor: pointer;
    background-color: deepskyblue;
    color: yellow;
}
    </style>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['login'])){
    echo "歡迎，";
    echo $_SESSION['login'];
    echo "<a href='logout.php'>登出</a>";

}else{
?>
    <form action="check.php" method="post">
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
</body>

</html>