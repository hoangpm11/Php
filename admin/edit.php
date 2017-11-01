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
</head>
<body>
	<?php 
		include 'classes/xtpl/xtemplate.class.php'; // class giao diện
		include 'classes/student.class.php';		// class phương thức
		include 'modules/edit.mod.php';				// đối tượng thực	
	?>
</body>
</html>