<?php

use App\Models\StudentInfo;

// show_all funtion data recived from database
$obj = new StudentInfo('', '', '', ',', '', '', '');
$users = $obj->show_all();


// foreach ($users as $user) {
//         echo $user['name'];
//         echo '<br>';
//         echo $user['userid'];
//         echo '<br>';
//         echo $user['level'];
//         echo '<br>';
//         echo $user['group'];
//         echo '<br>';
//         echo $user['roll'];
//         echo '<br>';
//         echo $user['role'];
//         echo '<br>';
//         echo $user['description'];
//         echo '<br>';
//         echo '<br>';
// }
// echo '<pre>';
// var_dump(count($data));
// print_r($data[0]['name']);
