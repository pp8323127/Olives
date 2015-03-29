<div class="form_member_login">
	<form method="post" action="member_login_check.php">
		<p><label>電子郵件</label></p>
		<p><input type="email" name="id" width="100%"></p>

		<p><label>密碼</label></p>
		<p><input type="password" name="passwd" width="100%"></p>

		<div id="form_btn">
			<p><button id="form_btn_click" type="submit">登入</button></p>
		</div>
	</form>

	<!-- <form method="post" value="1"> -->
		<div id="form_btn">
			<button id="form_btn_click2"  onclick="self.location.href='membernew.php'">加入會員</button>
		</div>
	<!-- </form> -->
</div>