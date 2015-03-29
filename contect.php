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
						<li><a href="system.php">System</a></li>
						<li><a href="member.php">Member</a></li>
						<li class="active"><a href="contect.php">Contect</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div id="content" style="padding: 2em 1em 1em 1em; text-align: center; margin: 0px auto;">
				<p style="font-size:30px;">開發者介紹</h2>
				<hr>
				<br>

				<table style="align: center; margin: 0px auto;">
					<tr>
						<td>
							<!-- <img src="images/1.jpg" width="10%" align="right"> -->
						</td>
						<td>
							<p>指導教授：李嘉紘(Jia-Hong Lee) 博士</p>
							<p>	學歷：	國立交通大學資訊科學博士<br>
							研究專長：	數位內容、多媒體系統、影像處理、<br>
							視訊處理、資訊安全、電腦繪圖<br>
							聯絡方式：	jhlee@nkfust.edu.tw</p>
						</td>
					</tr>
				</table>

				<hr width="50%">
				<br>
				<table style="align: center; margin: 0px auto;">
					<tr>
						<td>
							<!-- <img src="images/1.jpg" width="10%" align="right"> -->
						</td>
						<td>
							<p>虛擬實境系統設計師：吳啟維(Chi-wei Wu) 工程師</p>
							<p>	學歷：	國立高雄第一科技大學資訊管理學士<br>
							工作職務：	虛擬實境平台設計、3D模組導入<br>
							聯絡方式：	u0024042@nkfust.edu.tw</p>
						</td>
					</tr>
				</table>

				<hr width="50%">
				<br>
				<table style="align: center; margin: 0px auto;">
					<tr>
						<td>
							<!-- <img src="images/1.jpg" width="10%" align="right"> -->
						</td>
						<td>
							<p>網頁設計師：莊雲皓(Yun-Hao Chuang) 工程師</p>
							<p>	學歷：	國立高雄第一科技大學資訊管理學士<br>
							工作職務：	網頁平台開發、識別設計<br>
							聯絡方式：	u0024036@nkfust.edu.tw</p>
						</td>
					</tr>
				</table>

				<hr width="50%">
				<br>
				<table style="align: center; margin: 0px auto;">
					<tr>
						<td>
							<!-- <img src="images/1.jpg" width="10%" align="right"> -->
						</td>
						<td>
							<p>系統分析師：洪涵瑋(Han-wei Hong) 工程師</p>
							<p>	學歷：	國立高雄第一科技大學資訊管理學士<br>
							工作職務：	系統手冊及論文撰寫<br>
							聯絡方式：	u0024052@nkfust.edu.tw</p>
						</td>
					</tr>										
				</table>

<!-- 					<div style="text-align: left;">
						<p>指導教授：李嘉紘(Jia-Hong Lee) 博士</p>
						<p>	學歷：	國立交通大學資訊科學博士<br>
							研究專長：	數位內容、多媒體系統、影像處理、<br>
							視訊處理、資訊安全、電腦繪圖<br>
							聯絡方式：	jhlee@nkfust.edu.tw</p>
					</div> -->

			</div>
		</div>
		<!-- 嵌入網頁 -->
		<!-- <div id="iframe"> -->
			<!-- <iframe src="http://163.18.109.98/unity" Width="100%" Height="130%" frameboder=0 scrolling=no></iframe> -->
		<!-- </div> -->


		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				 <?php require_once('connect/copyright.php') ?>
			</div>
		</div>
		<a href="" id="scrollup"><img src="images/btn_top2.png" width="65px" height="55px"></a>	

	</body>
</html>