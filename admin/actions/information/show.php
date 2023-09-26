<?php

use App\Models\StudentInfo;

// show_all funtion data recived from database
$obj = new StudentInfo('', '', '', ',', '', '', '');
$users = $obj->show_all();

// echo '<pre>';
// var_dump(count($data));
// print_r($data[0]['name']);
