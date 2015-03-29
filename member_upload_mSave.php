<?php require("connect/connection.php"); ?>
<?php
	if(isset($_SESSION['id'])) {	//判斷是否有輸入ID值了，否則回到”加入會員“的畫面
		
		$id = $_SESSION['id'];
		// $title = $_POST["title"];
		$description = $_POST["description"];


	$query1 = mysql_query(" SELECT * FROM member WHERE id = '$id'; ");
	$row1 = mysql_fetch_assoc($query1);
	$member_no = $row1['no'];

	$query2 = mysql_query(" SELECT * FROM member_to_no WHERE member_id = '$member_no'; ");
	$row2 = mysql_fetch_assoc($query2);
	$member_to_no_no = $row2['no'];
	$member_to_no_id = $row2['id'];

	//$query3 = mysql_query(" SELECT * FROM img_info WHERE no = '$member_to_no_no' AND id = '$member_to_no_id'; ");
	//$row3 = mysql_fetch_assoc($query3);
	//$img_description = $row3['description'];

	mysql_query(" UPDATE img_info SET `description`='$description' WHERE `no`='$member_to_no_no' AND `id`='$member_to_no_id'; ");
?>
			<script type="text/javascript">
				alert("存檔成功！");
				window.location.href="member_upload.php";	// PHP寫法：header("Location:index.php");
			</script> 
<?php

	} else header("Location:member.php");
?>