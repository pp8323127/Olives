<?php
	$connection = mysql_connect('localhost', 'olives', '12345678');
	mysql_query("SET NAMES 'utf8'");
	// or trigger_error(mysql_error(), E_USER_ERROR);
	// mysql_set_charset('utf8', $connection);
	if(!$connection){
		die('無法建立SQL連線');
	}
	
	// 設定編碼 utf-8
	// mysql_set_charset('utf8', $connection);
	// mysql_set_charset("utf8");
	mysql_select_db('olives', $connection) or die('Can not connect.');


	// 設定時區
	date_default_timezone_set('Asia/Taipei');

	// 啟用SESSION變數
	if (!isset($_SESSION)) 
	{
	  session_start();
	}
?>


<head>
	<!-- 網站icon -->
	<link rel="shortcut icon" href="images/logo1-2.ico">

	<!-- head內容 -->
	<title>Olives</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- import jQuery UI -->
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

	<script src="js/skel.min.js"></script>
	<script src="js/skel-panels.min.js"></script>
	<script src="js/init.js"></script>
	<script src="js/script.js"></script>
	<script src="js/md5.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		<link rel="stylesheet" href="css/style-mobile.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->



	<!-- Dropzone.js -->
	<script src="js/dropzone.js"></script>
	<link rel="stylesheet" type="text/css" href="css/dropzone.css" />



</head>