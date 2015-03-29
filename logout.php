<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logout</title>
</head>
<body>
	
</body>
</html>
<?php require_once('Connect/connection.php');

	if (!empty($_SESSION["id"])) {
		$id = $_SESSION["id"];
		echo "謝謝您($id)的使用。";
		$_SESSION["id"] = "";
		
		?>
		<script language="JavaScript">
			alert("登出成功");
			location.href="index.php"
		</script>
		<?php	
	} else {
		?>
		<script language="JavaScript">
			alert("你尚未登入");
			location.href="member.php"
		</script>
		<?php	
	}
?>