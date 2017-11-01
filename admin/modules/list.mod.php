<?php

	// Tạo một đối tượng student_obj
	

	$student_obj = new Student();
	
	// Kiểm tra xem có thông tin thêm mới gửi tới không?
	// Nếu có thì mới thực hiện các tác vụ
	
	// 1. Xác định được thông tin nơi lưu dữ liệu
	$student_obj->connectData('root','mysql','localhost','webk16w71');
	
	// 4. Viết thông báo
	
	$student_obj->showList();