<meta charset="utf-8">
<form action="index.php" method="GET">
	<input type="" name="id">
	<button>Удалить</button>
</form>
<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', '22urok');
    $zapros = mysqli_query($connect, "SELECT * FROM contacts");
	$zapros_delete = mysqli_query($connect, "DELETE FROM contacts WHERE id =". $_GET['id']);
	for ($i=0; $i < 9; $i++) { 
		$stroka = $zapros->fetch_assoc();
		echo "<h1>" . $stroka['name'] . "</h1>";
		echo "<p>" . $stroka['number'] . "</p>";
	}
	echo $_GET['id'];
?>