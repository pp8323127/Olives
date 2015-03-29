<?php
	$connection = mysql_connect('163.18.75.54', 'test', 'admin');
	// or trigger_error(mysql_error(), E_USER_ERROR);
	// mysql_set_charset('utf8', $connection);
	if(!$connection){
		die('無法建立SQL連線');
	}
	
	mysql_select_db('olives', $connection) or die('Can not connect.');

	// 設定時區
	date_default_timezone_set('Asia/Taipei');
?>
