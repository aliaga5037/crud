<?php
include('../connect.php');
$base = 'SELECT * FROM Pinball';
$query = mysqli_query($con, $base);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lumino - Dashboard</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<!--Icons-->
		<script src="js/lumino.glyphs.js"></script>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Admin Panel</a>
					<ul class="user-menu">
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Log out
							<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="#">Profile</a></li>
								<li><a href="logout.php">Log out</a></li>
							</ul>
						</div>
					</ul>
				</div>
				
				</div><!-- /.container-fluid -->
			</nav>
			
			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<ul class="nav menu das">
					<li ><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						Users
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li ><a href="Alluser.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>All user</a></li>
							<li ><a href="adduser.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Add user</a></li>
							<li ><a href="profile.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Profile</a></li>
						</ul>
					</div>
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						News
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="allnews.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> All News</a></li>
							<li><a href="add.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Add News</a></li>
						</ul>
					</div>
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						Files
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="allfile.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> All Files</a></li>
							<li><a href="addfile.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Add Files</a></li>
						</ul>
					</div>
				</ul>
				</div><!--/.sidebar-->
				
				<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
					<div class="row">
						<ol class="breadcrumb">
							<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
							<li class="active">Dashboard</li>
						</ol>
						</div><!--/.row-->
						<div class="row">
							</div><!--/.row-->
							</div><!--/.row-->
							</div>	<!--/.main-->
							<script src="js/jquery-1.11.1.min.js"></script>
							<script src="js/bootstrap.min.js"></script>
							<script src="js/chart.min.js"></script>
							<script src="js/chart-data.js"></script>
							<script src="js/easypiechart.js"></script>
							<script src="js/easypiechart-data.js"></script>
							<script src="js/bootstrap-datepicker.js"></script>
							<script>
								$('#calendar').datepicker({
								});
								!function ($) {
								$(document).on("click","ul.nav li.parent > a > span.icon", function(){
								$(this).find('em:first').toggleClass("glyphicon-minus");
								});
								$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
								}(window.jQuery);
								$(window).on('resize', function () {
								if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
								})
								$(window).on('resize', function () {
								if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
								})
							</script>
						</body>
					</html>