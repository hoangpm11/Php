<?php
include 'classes/student.class.php';

$student_obj = new Student();

// 1. XĂ¡c Ä‘á»‹nh Ä‘Æ°á»£c thĂ´ng tin nÆ¡i lÆ°u dá»¯ liá»‡u
$student_obj->connectData('root','mysql','localhost','webk16w71');

// 2. Nhá»› Ä‘Æ°á»£c thĂ´ng tin gá»­i tá»›i (tĂªn, tuá»•i vĂ  thĂ´ng tin)
$student_obj->getInputForm();

// 3. Thá»±c hiá»‡n thĂªm 2 vĂ o 1
$student_obj->saveToDB();

// 4. Ä�Ă³ng láº¡i
$student_obj->closeData();

// Quay vá»� trang index.php
header('Location: list.php');
exit;