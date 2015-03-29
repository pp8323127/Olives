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
			<div class="row"> 
				<?php 
					//echo $_SESSION['id'];
					if (empty($_SESSION['id'])) {
						require("member_login.php");
					} else {
						header("Location:member_upload.php");
					}
				?>
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