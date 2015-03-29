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
					header('Content-type: text/html; charset=utf8');
				?>
<br>
				<div style="margin: 0px auto; float:right;">
					<form action="logout.php">
						<div id="form_btn">
							<p><button id="form_btn_click" type="submit">登出</button></p>
						</div>
					</form>
				</div>

<?php
	$id = $_SESSION['id'];

	$query1 = mysql_query(" SELECT * FROM member WHERE id = '$id'; ");
	$row1 = mysql_fetch_assoc($query1);
	$member_no = $row1['no'];

	$query2 = mysql_query(" SELECT * FROM member_to_no WHERE member_id = '$member_no'; ");
	$row2 = mysql_fetch_assoc($query2);
	$member_to_no_no = $row2['no'];
	$member_to_no_id = $row2['id'];

	$query3 = mysql_query(" SELECT * FROM img_info WHERE no = '$member_to_no_no' AND id = '$member_to_no_id'; ");
	$row3 = mysql_fetch_assoc($query3);
	$img_description = $row3['description'];
	$img_filename = $row3['file_name'];
	$img_title = $row3['title'];


	//$total_rows = mysql_num_rows($show_query);

	//echo $total_rows;
?>

<!-- 顯示圖片、修改資訊 -->

<br>
<div><img src="../image/2/<?php echo $img_filename ?>" style="width:400px;"></div>

<div>
	<form action="member_upload_mSave.php" method="post">
		<br>
		<p>標題：<?php echo $img_title ?> </p>

		<p>簡介：<input type="text" name="description" value="<?php echo $img_description ?>" required></p>
	
		<div id="form_btn">
			<p><button id="form_btn_click" type="submit">存檔</button></p>
		</div>
	</form>
</div>




<!-- //顯示圖片
// header('Content-type: text/html; charset=big5');
// $id = $_SESSION['id'];
// $nember = "../image/2/";
// if ($handle = opendir('../image/2/')) {
//     while (false !== ($file = readdir($handle))) {
//         if ($file != "." && $file != "..") {

//         $id = $_SESSION['id'];
// 		$show_query = mysql_query(" SELECT id FROM member WHERE id = '$id'; ");
// 		$row = mysql_fetch_assoc($show_query);
// 		//$total_rows = mysql_num_rows($show_query);
// 		//echo $total_rows;
// 		echo $row["id"];
//             //echo "name: $file ";
// 			//echo "<img width=60 src=\" $nember/$file \">";
//             //echo "<br/>";
//         }
//     }
//     closedir($handle);
// } -->
			</div>
		</div>
	</div>

</body>
</html>