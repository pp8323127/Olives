<?php require("connect/connection.php"); 

if(isset($_SESSION['id'])) {	//判斷是否有輸入ID值了，否則回到”加入會員“的畫面
		
	$id = $_SESSION['id'];

	$query = mysql_query(" SELECT * FROM member WHERE id = '$id'; ");
	$row = mysql_fetch_assoc($query);
	//echo $row['id'];
} else header("Location:member.php");

?>


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
				
				<div class="form_member_new">
  <form method="post" action="member_update_check.php">
	<p><label>密碼(4-20位)</label></p>
	<p><input type="password" name="passwd" maxlength="20" required></p>

	<p><label>確認密碼</label></p>
	<p><input type="password" name="chkpasswd" required></p>

	<p><label>姓名</label></p>
	<p><input type="text" name="name" value="<?php echo $row['name'] ?>" required></p>

	<p><label>性別</label></p>
	<p><select name="sex" value="<?php echo $row['sex'] ?>">
	  <option value="男"><label>男</label></option>
	  <option value="女"><label>女</label></option></select></p>
	
	<p><label>生日</label></p>
	<p><input type="date" name="birth" value="<?php echo $row['birth'] ?>" required></p>

	<p><label>電話</label></p>
	<p><input type="tel" name="tel" value="<?php echo $row['tel'] ?>" pattern="[09]{2}[0-9]{8}" required></p>

	<div id="form_btn">
	  <button id="form_btn_click" type="reset">重填</button>
	  <button id="form_btn_click" type="submit">送出</button>
	</div>

  </form>
</div>

			</div>
		</div>
	</div>

</body>
</html>













<!DOCTYPE HTML>
