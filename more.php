<?php
include('connect.php');
$id = $_GET['id'];
$bas = "SELECT * FROM pinball WHERE id=$id";
$qosulmaq = mysqli_query($con,$bas);
$dd = mysqli_fetch_assoc($qosulmaq);
echo $dd['filmin_adi'];

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pinball Website Template</title>
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!---start-click-drop-down-menu----->
		<script src="assets/js/jquery.min.js"></script>
        <!----start-dropdown--->
         <script type="text/javascript">
			var $ = jQuery.noConflict();
				$(function() {
					$('#activator').click(function(){
						$('#box').animate({'top':'0px'},500);
					});
					$('#boxclose').click(function(){
					$('#box').animate({'top':'-700px'},500);
					});
				});
				$(document).ready(function(){
				//Hide (Collapse) the toggle containers on load
				$(".toggle_container").hide(); 
				//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
				$(".trigger").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
						return false; //Prevent the browser jump to the link anchor
				});
									
			});
		</script>
        <!----//End-dropdown--->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<div class="logo">
					<a href="index.php"><img src="assets/images/logo.png" title="pinball"/></a>
				</div>
				     	  
				<div class="top-searchbar">
					<form>
						<input type="text" /><input type="submit" value="" />
					</form>
				</div>
				<div class="userinfo">
					<div class="user">
						<ul>
							<li><a href="#"><img src="assets/images/user-pic.png" title="user-name" /><span>Ipsum</span></a></li>
						</ul>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---//End-header---->
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			<div class="single-page">
							<div class="single-page-artical">
								<div class="artical-content">
									<?php echo '<img src="assets/images/'.$dd['sekil'].'" class="aa">' ?>

									<h3><?php echo "<a href=''>".$dd['filmin_adi']."</a>" ?></h3>
									<p class="para1"><?php echo $dd['on_soz'] ?></p> 
									<p class="para2"><?php echo $dd['full_soz'] ?></p> 
								    </div>
								
		  						 <div class="share-artical">
		  						 	<ul>
		  						 		<li><a href="#"><img src="assets/images/facebooks.png" title="facebook">Facebook</a></li>
		  						 		<li><a href="#"><img src="assets/images/twiter.png" title="Twitter">Twiiter</a></li>
		  						 		<li><a href="#"><img src="assets/images/google+.png" title="google+">Google+</a></li>
		  						 		<li><a href="#"><img src="assets/images/rss.png" title="rss">Rss</a></li>
		  						 	</ul>
		  						 </div>
		  						 <div class="clear"> </div>
							</div>
				
						</div>
						 </div>
		</div>
		<!---//End-wrap---->
	</body>
</html>

