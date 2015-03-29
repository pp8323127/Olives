<?php require("connect/connection.php") ?>

<!DOCTYPE HTML>
<div class="form_member_new">
  <form method="post" action="member_new_check.php">
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
	  <option value="男"><label>男</label></option>
	  <option value="女"><label>女</label></option></select></p>
	
	<p><label>生日</label></p>
	<p><input type="date" name="birth" required></p>

	<p><label>電話</label></p>
	<p><input type="tel" name="tel" placeholder="09xxxxxxxx" pattern="[09]{2}[0-9]{8}" required></p>

	<div id="form_btn">
	  <button id="form_btn_click" type="reset">重填</button>
	  <button id="form_btn_click" type="submit">送出</button>
	</div>

  </form>
</div>