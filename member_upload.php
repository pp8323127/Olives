<!-- 引用connect/connection.php -->
<?php require('connect/connection.php'); ?>

<!DOCTYPE HTML>
<html>
<body>
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
					<li class="active"><a href="member.php">Member</a></li>
					<li><a href="contect.php">Contect</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- main -->
	<div id="main_member">
		<div class="container">
			<div class="row" style="padding-left: 2em;"> 
				<?php 
					echo "ID: ";
					echo $_SESSION['id'];
					if (empty($_SESSION['id'])) {
						header("Location:member.php");
					} 
				?>
<br>
				<div style="margin: 0px auto; float:right;">
					<form action="logout.php">
						<div id="form_btn">
							<p><button id="form_btn_click" type="submit">登出</button></p>
						</div>
					</form>
				</div>

				<!-- 檔案管理 -->
				<div style="margin: 0px auto; float:right;">
					<form action="member_upload_m.php">
						<div id="form_btn">
							<p><button id="form_btn_click2" type="submit">檔案管理</button></p>
						</div>
					</form>
				</div>

				<div style="margin: 0px auto; float:right;">
					<form action="member_update.php">
						<div id="form_btn">
							<p><button id="form_btn_click2" type="submit">修改資料</button></p>
						</div>
					</form>
				</div>


	
					
					<div class="iframe_slide" style="margin: 0px auto; width: 100%; padding:0em 0em 0em 1em;">
						<iframe src="http://163.18.109.98/test/5" Width="100%" Height="70%" frameboder=0 scrolling=no></iframe>
					</div>


				<!-- <button type="sumit">加入會員</button> -->
<!--  -->
<!-- <div class="form">
	<form method="post">
		<p><label>電子郵件(帳號)</label></p>
		<p><input type="email" name="id" width="100%" placeholder="olives@gmail.com" required></p>

		<p><label>密碼(4-20位)</label></p>
		<p><input type="password" name="passwd" maxlength="20" required></p>

		<p><label>確認密碼</label></p>
		<p><input type="password" name="chkpasswd" required></p>

		<p><label>暱稱</label></p>
		<p><input type="text" name="name" required></p>

		<p><label>性別</label></p>
		<p><select name="sex">
			<option value="1"><label>男</label></option>
			<option value="0"><label>女</label></select></p>
		
		<p><label>生日</label></p>
		<p><input type="date" name="birth" required></p>

		<p><label>電話</label></p>
		<p><input type="tel" name="tel" placeholder="09xxxxxxxx" pattern="[09]{2}[0-9]{8}" required></p>

		<div id="form_btn">
			<button id="form_btn2" type="reset">reset</button>
			<button id="form_btn2" type="submit">submit</button>
		</div>

	</form>
</div> -->

				<!-- 輸入登入資料 -->
				<!-- 浮動式窗Dialog -->
<!-- 				<div id="dialog" title="會員登入">
					<p></p>
					<form method="post" action="member_login_check.php">
						<p><label>電子郵件</label></p>
						<p><input id="dialog_inputID" type="email" name="id" width="100%"></p>

						<p><label>密碼</label></p>
						<p><input id="dialog_inputPAS" type="password" name="passwd" width="100%"></p>
						<p style="padding: 1px"><hr></p>
						<div id="form_btn">
							<p><button id="form_btn_click" type="submit">登入</button></p>
						</div>
					</form>
				</div> -->

			</div>
		</div>
	</div>

</body>
</html>