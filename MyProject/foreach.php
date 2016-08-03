<?php
/** @var TYPE_NAME $arr */
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
	$value = $value * 2;
}
// массив $arr сейчас таков: array(2, 4, 6, 8)
echo $arr; // разорвать ссылку на последний элемент