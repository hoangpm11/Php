<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
</head>
<body>
<?php
	include 'classes/student.class.php';
	
	$student_obj = new Student ();
	
	// 1. Xác định được thông tin nơi lưu dữ liệu
	$student_obj->connectData ( 'root', 'mysql', 'localhost', 'webk16w71' );
	
	// 2. Nhớ được thông tin gửi tới (ID cần xóa)
	$student_obj->getDeleteID ();
	
	// 3. Thực hiện thêm 2 vào 1
	$student_obj->delFromDB ();
	
	// 4. Đóng lại
	$student_obj->closeData();
	
	// Quay về trang index.php
	header ( 'Location: list.php' );
	exit ();

?>

</body>
</html>
