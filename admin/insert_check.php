<?php
	include('../connect.php');
	$movieName = $_POST["movieName"];
	$category = $_POST["category"];
	$topic = $_POST["topic"];
	$fullText = $_POST["fullText"];
	$picture = $_FILES["picture"];
	$picture_name = $picture["name"];
	$picture_tmp = $picture["tmp_name"];
	$picture_type = $picture["type"];
	$picture_size = $picture["size"];
	$pic = substr($picture_type, -3);
	$a = move_uploaded_file($picture_tmp, "../assets/images/".$picture_name);

	$query = "INSERT INTO `pinball` (`filmin_adi`, `Kateqoriya`, `on_soz`, `full_soz`, `sekil`) VALUES (\"$movieName\",\"$category\",\"$topic\",\"$fullText\",\"$picture_name\")";
	$q = mysqli_query($con, $query);

	if ($q) {
		header('Location:allnews.php');
	} else {
		echo 'Alinmadi';
	}
?>