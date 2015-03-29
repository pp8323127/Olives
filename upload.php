<?php 
	$connection = mysql_connect('localhost', 'root', 'admin');
	mysql_select_db('olives', $connection) or die('Can not connect.');
	// mysql_set_charset('utf8', $connection);
    mysql_query("SET NAMES 'utf8'");
?>

<?php
$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'uploads';   //2
 



if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
     
 	// $filename = iconv("utf-8", "big5", $_FILES['file']['name'] );
    $filename = $_FILES['file']['name'] ;
	//move_uploaded_file($tempFile, $targetFile); //6


    $filetype = $_FILES['file']['type'];
    // if ($filetype = "video/mp4") {
    //     $file_name = "test.jpg";
    //     $video_name = $filename;
    // }
    // if ($filetype = "image/jpeg") {
    //     $file_name = $filename;
    // }


    move_uploaded_file($tempFile, iconv("utf-8", "big5", $targetFile));
    //iconv( 原來的編碼 , 轉換的編碼 , 轉換的字串 ); 為了讓中文檔名也可以儲存

    //寫入資料庫
    //$num = mysql_num_rows(  mysql_query(" SELECT * FROM olives.img_info WHERE no = '1'; ")   );
    //$count = $_FILES['file']['name'];

    mysql_query(" INSERT INTO olives.img_info(no, id, title, file_name, type, video_name) 
        VALUES ('4', '0', '$filename', '$filename', '$filetype', '$filename'); ");

     
}
?>  