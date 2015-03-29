<!-- 引用connect/connection.php -->
<?php require('connect/connection.php'); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<!-- 引用自connection.php -->
	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<?php require('connect/logo.php'); ?>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="#">System</a></li>
						<li><a href="member.php">Member</a></li>
						<li><a href="contect.php">Contect</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<!-- 嵌入網頁 -->
		<div id="iframe">
			<iframe src="http://163.18.109.98/unity" Width="100%" Height="130%" frameboder=0 scrolling=no></iframe>
  			
	 	</div>



		<div id="copyright">
			<div class="container">
				<?php require_once('connect/copyright.php') ?>
			</div>
		</div>
	</body>
</html>