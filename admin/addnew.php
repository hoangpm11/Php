<?php
// Ứng dụng quản lý sinh viên
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Document Student Managament</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />	
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<?php 
		include 'classes/xtpl/xtemplate.class.php';
		include 'classes/student.class.php';
		include 'modules/add.mod.php';		
	?>
</body>
</html>