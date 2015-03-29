<?php require("connect/connection.php"); ?>
<?php
	if(isset($_POST["id"])) {	//判斷是否有輸入ID值了，否則回到”加入會員“的畫面
		$_SESSION['id'] = $_POST["id"];
		//echo $_SESSION['id'];
		
		$id = $_POST["id"];
		$passwd = md5($_POST["passwd"]);

		$time = date("Y-m-d H:i:s");
		// echo "$id $passwd $time";	//輸出測試

		// 檢查帳號密碼是否正確（利用網頁登入的話
		$login_query = mysql_query(" SELECT id, passwd FROM member WHERE id = '$id' AND passwd = '$passwd'; ");
		$num_rows = mysql_num_rows($login_query);

		if($num_rows == '1') { 
			mysql_query(" INSERT INTO olives.history_login(id, time) VALUES ('$id', '$time'); ");
			//$name = mysql_query(" SELECT name FROM olives.member WHERE id = '$id'; ")
			?>
			<script type="text/javascript">
				//var name = <? echo $name ?>
				alert("登入成功！");
				window.location.href="member_upload.php";	// PHP寫法：header("Location:index.php");
			</script> <?php
		} else {
			$_SESSION['id']="";
			?>
			<script type="text/javascript">
				alert("登入失敗！");
				window.history.back();
			</script> <?php
		}
	} else header("Location:member.php");
?>