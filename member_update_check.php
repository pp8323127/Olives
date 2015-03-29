<?php require("connect/connection.php"); ?>
<?php
	if(isset($_SESSION['id'])) {	//判斷是否有輸入ID值了，否則回到”加入會員“的畫面
		$id = $_SESSION['id'];
		$passwd = md5($_POST["passwd"]);
		$name = $_POST["name"];
		$sex = $_POST["sex"];
		$birth = $_POST["birth"];
		$tel = $_POST["tel"];
//UPDATE `olives`.`member` SET `name`='A' WHERE `id`='u0024036@nkfust.edu.tw';

		mysql_query(" UPDATE member SET `passwd`='$passwd', `name`='$name', `sex`='$sex', `birth`='$birth', `tel`='$tel' WHERE `id`='$id'; ");

			?>
			<script type="text/javascript">
				alert("更新成功！");
				window.location.href="member.php";
			</script>
			<?php

		//$addtime = date("Y-m-d H:i:s");
		// echo "$id $passwd $name $sex $birth $tel $addtime";	//輸出測試

		// 檢查是否有相同的帳號
		//$find_sameID = mysql_query(" SELECT id FROM member WHERE id = '$id'; ");
		//$num_rows = mysql_num_rows($find_sameID);

		//echo "$find_sameID";
	} else {
		header("Location:member.php");
	}
?>