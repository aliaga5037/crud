<?php
	include("../connect.php");
	$id = $_GET['id'];
	$mysqlquery =  "SELECT * FROM pinball WHERE id=$id";
		$q = mysqli_query($con,$mysqlquery);
		$result = mysqli_fetch_assoc($q);
		$filminadi = $result['filmin_adi'];
		$kateqoriya = $result['Kateqoriya'];
		$on_soz = $result['on_soz'];
		$full_soz = $result['full_soz'];
		$sekil = $result['sekil'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="edit_check.php?id=<?php  echo $id;?>" method="post" enctype="multipart/form-data">
			
			<input name="filminAdi" type="text" value='<?php echo $filminadi; ?>' >
			<input name="cat" type="text" value='<?php echo $kateqoriya; ?>'>
			<textarea name="onsoz"><?php echo $on_soz; ?></textarea>
			<textarea name="fullsoz"><?php echo $full_soz; ?></textarea>
		  	<input type="image" name="bir"  src="images/<?php  echo $sekil ; ?>">
			<input name="picture" type="file">
			
			<input type="submit">
		</form>
	</body>
</html>