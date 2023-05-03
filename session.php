<h1>session</h1>

<?php
session_start();


$_SESSION['name']='mack';


echo $_SESSION['name'];

?>

<a href='logout.php'>登出</a>


