<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'twitter');
	$zapros = mysqli_query($connect, "SELECT * FROM tweets");
	$zapros_vstavit = mysqli_query($connect, "INSERT INTO tweets (author, post, img) VALUES ('{$_GET["author"]}', '{$_GET["post"]}', '{$_GET["img"]}')");
?>
<?php
	$connect1 = mysqli_connect('127.0.0.1', 'root', '', 'twitter');
	$zapros1 = mysqli_query($connect, "SELECT * FROM channel");
	$zapros_vstavit1 = mysqli_query($connect, "INSERT INTO channel (author, channel, img) VALUES ('{$_GET["author1"]}', '{$_GET["channel"]}', '{$_GET["img1"]}')");
	header("Location: index.php");
?>