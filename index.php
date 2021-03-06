<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('connect.php');
$base = 'SELECT * FROM Pinball';
$query = mysqli_query($con, $base);
		
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pinball Website Template</title>
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!-- Global CSS for the page and tiles -->
		<link rel="stylesheet" href="assets/css/main.css">
		<!-- //Global CSS for the page and tiles -->
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
		<!---//End-click-drop-down-menu----->
	</head>
	<body>
		<!---start-wrap---->
		<!---start-header---->
		<div class="header">
			<div class="wrap">
				<div class="logo">
					<a href="index.php"><img src="assets/images/logo.png" title="pinbal" /></a>
				</div>
				
				<div class="box" id="box">
					
				</div>
				<div class="top-searchbar">
					<form action="admin/search.php" method="post">
						<input name="keyword" type="text" /><input type="submit" value="" />
					</form>
				</div>
				<div class="userinfo">
					<div class="user">
						<ul>
							<li><a href="admin/index.php"><img src="assets/images/user-pic.png" title="user-name" /><span>Ipsum</span></a></li>
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
				<div id="main" role="main">
					<ul id="tiles">
						<!-- These are our grid blocks -->
						<?php
							while ($row = mysqli_fetch_assoc($query)) {
								

							
						echo'  <li  class="mahmud" onclick="location.href=\'more.php?id='.$row['Id'].'\';">
								<img  src="assets/images/'.$row['sekil'].'" width="100%">
								<div class="post-info">
										<div class="post-basic-info">
												<h3><a href="">'.$row['filmin_adi'].'</a></h3>
												<span><a href="#"><label> </label>'.$row['Kateqoriya'].'</a></span>
												<p>'.$row['on_soz'].'</p>
										</div>
										<div class="post-info-rate-share">
												<div class="rateit">
														<span> </span>
												</div>
												<div class="post-share">
														<span> </span>
												</div>
												<div class="clear"> </div>
										</div>
								</div>
						</li>';
						}
						
						?>
						
						
					</ul>
				</div>
			</div>
		</div>
		<!---//End-content---->
		<!----wookmark-scripts---->
		<script src="assets/js/jquery.imagesloaded.js"></script>
		<script src="assets/js/jquery.wookmark.js"></script>
		<script type="text/javascript">
		(function ($){
		var $tiles = $('#tiles'),
		$handler = $('li', $tiles),
		$main = $('#main'),
		$window = $(window),
		$document = $(document),
		options = {
		autoResize: true, // This will auto-update the layout when the browser window is resized.
		container: $main, // Optional, used for some extra CSS styling
		offset: 20, // Optional, the distance between grid items
		itemWidth:280 // Optional, the width of a grid item
		};
		/**
		* Reinitializes the wookmark handler after all images have loaded
		*/
		function applyLayout() {
		$tiles.imagesLoaded(function() {
		// Destroy the old handler
		if ($handler.wookmarkInstance) {
		$handler.wookmarkInstance.clear();
		}
		
		// Create a new layout handler.
		$handler = $('li', $tiles);
		$handler.wookmark(options);
		});
		}
		/**
		* When scrolled all the way to the bottom, add more tiles
		*/
			// function onScroll() {
			//   // Check if we're within 100 pixels of the bottom edge of the broser window.
			//   var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
			//       closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);
			
			//   if (closeToBottom) {
			//     // Get the first then items from the grid, clone them, and add them to the bottom of the grid
			//     var $items = $('li', $tiles),
			//         $firstTen = $items.slice(0, 10);
			//     $tiles.append($firstTen.clone());
			
			//     applyLayout();
			//   }
			// };
		
		// Call the layout function for the first time
		applyLayout();
		
		// Capture scroll event.
		$window.bind('scroll.wookmark', onScroll);
		})(jQuery);
		</script>
		<!----//wookmark-scripts---->
		
		<!---//End-wrap---->
	</body>
</html>	