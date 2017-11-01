<?php
include 'classes/student.class.php';

$student_obj = new Student();

// 1. Xác định được thông tin nơi lưu dữ liệu
$student_obj->connectData('root','mysql','localhost','webk16w71');

// 2. Nhớ được thông tin gửi tới (tên, tuổi và thông tin)
$student_obj->getEditForm();

// 3. Thực hiện thêm 2 vào 1
$student_obj->updateToDB();

// 4. �?óng lại
$student_obj->closeData();

// Quay v�? trang index.php
header('Location: list.php');
exit;