<?php require("connect/connection.php"); ?>
<?php
	if(isset($_POST["id"])) {	//判斷是否有輸入ID值了，否則回到”加入會員“的畫面
		$id = $_POST["id"];
		$passwd = md5($_POST["passwd"]);
		$name = $_POST["name"];
		$sex = $_POST["sex"];
		$birth = $_POST["birth"];
		$tel = $_POST["tel"];

		$addtime = date("Y-m-d H:i:s");
		// echo "$id $passwd $name $sex $birth $tel $addtime";	//輸出測試

		// 檢查是否有相同的帳號
		$find_sameID = mysql_query(" SELECT id FROM member WHERE id = '$id'; ");
		$num_rows = mysql_num_rows($find_sameID);

		echo "$find_sameID";
		echo "$num_rows";

		if($num_rows == '1') { ?>
			<script type="text/javascript">
				alert("失敗，已有重複的帳號。請重新輸入");
				history.back();	//回上一頁
			</script> <?php
		} else {
			// 若無相同資料，則寫入資料庫
			// $query = "INSERT INTO member(id, passwd, name, sex, birth, tel, addtime) VALUES ('$id', '$passwd', '$name', '$sex', '$birth', '$tel', '$addtime' );";
			mysql_query(" INSERT INTO member(id, passwd, name, sex, birth, tel, addtime) VALUES ('$id', '$passwd', '$name', '$sex', '$birth', '$tel', '$addtime'); ");
			header("Location:index.php");
		}
	} else {
		header("Location:member.php");
	}
?>