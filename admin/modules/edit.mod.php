<?php

	// Tạo một đối tượng student_obj
	

	$student_obj = new Student();
	
	// 1. Xác định được thông tin nơi lưu dữ liệu
	$student_obj->connectData ( 'root', 'mysql', 'localhost', 'webk16w71' );
	
	$student_obj->showEdit();