<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    <?php header('Content-type: text/html; charset=big5'); ?>

	<title>Document</title>
</head>
<body>
	<!-- <img src="uploads/q.jpg"> -->

<?php

//顯示圖片
$nember = "uploads/";
if ($handle = opendir('uploads/')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "name: $file ";
			echo "<img width=60 src=\" $nember/$file \">";
            echo "<br/>";
        }
    }
    closedir($handle);
}
?>  


</body>
</html>