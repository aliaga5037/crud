<?php 
	include("../connect.php");
	$id = $_GET['id'];
	$filminAdi = $_POST['filminAdi'];
	$cat = $_POST['cat'];
	$onsoz = $_POST['onsoz'];
	$fullsoz = $_POST['fullsoz'];
	$bir = $_FILES['bir'];
	$picture = $_FILES["picture"];
	$picture_name = $picture["name"];
	$picture_tmp = $picture["tmp_name"];
	$picture_type = $picture["type"];
	$picture_size = $picture["size"];

	$pic = substr($picture_type, -4);
	$a = move_uploaded_file($picture_tmp, "images/".$picture_name);


	if($picture_name != ""){

			$query = "UPDATE `pinball` SET filmin_adi='$filminAdi',Kateqoriya='$cat',on_soz='$onsoz',full_soz='$fullsoz',sekil='$picture_name' WHERE id=$id";

	}else{

		$query = "UPDATE `pinball` SET filmin_adi='$filminAdi',Kateqoriya='$cat',on_soz='$onsoz',full_soz='$fullsoz' WHERE id=$id";

	}
	
$q = mysqli_query($con,$query);
 	

	
	if ($q) {
		header('Location:allnews.php');
	} else {
		echo 'yene nese var mans';
	}
?>