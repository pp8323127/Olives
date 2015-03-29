<!-- 引用connect/connection.php -->
<?php require('connect/connection.php'); ?>

<!DOCTYPE HTML>
<html>

	<head>
		<!-- 引用自connection.php -->
		
	</head>
	<body class="homepage">
	<!-- <a href="" id="scrollup"><img src="images/btn_top2.png" width="65px" height="55px"></a> -->
		
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
						<li class="active"><a href="#">Home</a></li>
						<li><a href="system.php">System</a></li>
						<li><a href="member.php">Member</a></li>
						<li><a href="contect.php">Contect</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 
					<!-- Content -->
<!-- 					<div id="content" class="8u skel-cell-important" >
 -->						<section>
							<header >
								<!-- <h2>Slide Show</h2> -->
								<br>
									<!-- 嵌入網頁 -->
									<div class="iframe_slide" style="text-align: center;  margin: 0px auto;">
										<iframe src="http://163.18.22.21/test/slideshow/index.html" Width="70%" Height="100%" frameboder=0 scrolling=no></iframe>
									</div>

								
							</header>
							<br>
							<!-- <span class="byline" style="margin: 0px auto;">Online interactive virtual exhibition system.</span> -->
							<a class="image full"><img src="images/web/1.png" style="width:70%; margin: 0px auto;" alt="" /></a>
							<p>本計畫系統架構圖如圖所示，利用PHP技術建立一個網路平台，而所有策展人可以藉由該平台上傳自己的作品，並將作品的相關資料(標題、內容、語音資料等等)傳送到MySQL進行儲存，再利用Unity讀取MySQL中的數據，接著載入FTP中的作品檔案並在虛擬展覽中呈現，即可建立出專屬個人的展覽。</p>


						</section>
						<!-- </div> -->
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div id="featured">
			<div class="container">
				<div class="row" style="padding-top: 5em;">

					<!-- <h2>簡介 PartII</h2> -->
					<h2>Online interactive virtual exhibition system.</h2><br><br><br><br>
					<p>(一)	虛擬空間的建置</p>
					<P>以往的虛擬展覽一進入畫面後就位於展覽中，活動範圍限制在展覽區內。而在Unity強大引擎下，我們採取大視界的設計，展覽可以設置在海邊、山上或是一座島。除了展覽區外使用者有更大範圍的活動區域，觀賞周遭的風景。本計畫將虛擬空間的建置規劃成4個步驟</P>
					<p><img src="images/web/2.png" width="50%"><br><br></p>
					<br><br><br><br><br><br>
					<p>(二)	互動功能設計</p>
					<p>在Unity的虛擬環境下，顛覆傳統展覽較乏味的觀賞方式，本計畫將提供與使用者多元互動的功能，例如：使用者可以與虛擬展覽物件互動，或經由系統提供的小遊戲更加了解展覽等。本計畫除了提供一個網路平台上傳作品外，將多元互動功能初步區分為:</p>
					<p>1. 展場導覽互動性</p>
					<p>導覽系統大多為第一人稱視角，畫面僅呈現攝影機畫面。而本計畫添加第三人稱視角切換如圖8，讓使用者能看展覽外，也能看見操作者與物件的互動，如基本的跑跳以及作品互動時的手部動作。另外為了避免使用者不知從何開始瀏覽，將加入自動導覽系統，使用者不用自行操作鍵盤就能夠身歷其境的瀏覽展覽。</p>
					<p><img src="images/web/3.png" width="100%"><br><br></p>
					<p></p>
					<p>2. 靜態影像作品互動性<br>當策展人在建立展場的過程中，每位策展人都擁有自己的雲端相簿來存放自己的展覽作品，在展覽廳裡面可以自由的規劃展覽場地、作品擺放、相框樣式。除此之外，為了方便使用者觀賞平面作品，當滑鼠移動到作品時能即時顯示該作品的名稱如圖9。另外當使用者想細部觀賞時只需在作品前點選圖片即可細部觀看或查看該作品的簡介如圖10，也能作放大與縮小的功能。</p>
					<p><img src="images/web/4.png" width="50%"><br><br></p>
					<p>3. 3D 物體的互動展示</p>
					<p>本計畫與以往展覽不同的特色之一是包含3D作品的展示。將作品掃描完成後，讀入系統中，即可呈現在虛擬展場內如圖11所示，使用者可以藉由滑鼠移動能從多個角度觀賞該作品。另外為了能夠細部和流暢的觀賞，也加入如2D的細部觀賞功能</p>
					<p><img src="images/web/5.png" width="50%"></p>
					<br><br><br><br><br><br><br><br><br><br>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">

				</div>
			</div>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<?php require_once('connect/copyright.php') ?>
			</div>
		</div>
<!-- <section> -->
	<a href="" id="scrollup"><img src="images/btn_top2.png" width="65px" height="55px"></a>	
<!-- </section> -->
<!-- <div id="skel-panels-defaultWrapper" style="height: 20%;"></div> -->
	</body>
</html>