<head>
	<?php
		$link = new mysqli('localhost','root','','cazastore') or die('thất bại');
		mysqli_query($link, 'SET NAMES UTF8');
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
		if($_isIndex==true){
			echo "<title>Tổng hợp</title>";
		}
		if($_isLogin==true){
			echo "<title>Đăng nhập</title>";
		}
		if($_isAdd==true){
			echo "<title>Thêm sản phẩm mới</title>";
		}
		if($_isWid==true){
			echo "<title>Widgets</title>";
		}
		if($_isList==true){
			echo "<title>Danh sách sản phẩm</title>";
		}
	?>
	<link href="<?php echo $level.CSS?>bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $level.CSS?>font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $level.CSS?>datepicker3.css" rel="stylesheet">
	<link href="<?php echo $level.CSS?>styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>