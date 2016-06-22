<?php
	include("../connect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input {
			display: block;
			padding: 15px 10px;
			margin-top: 3px;
		}
	</style>

	
		
</head>
<body>
	<form action="insert_check.php" method="post" enctype="multipart/form-data">
		<input name="movieName" type="text" placeholder="Filmin adi">
		<input name="category" type="text" placeholder="Kateqoriya">
		<textarea name="topic" id=""  placeholder="Onsoz" cols="30" rows="10"></textarea>
		<textarea name="fullText" id=""  placeholder="Full Text" cols="30" rows="10"></textarea>
		<input name="picture" type="file" placeholder="Sekil">
		<input type="submit" value="SEND">
	</form>

</body>
</html>