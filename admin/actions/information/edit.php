<?php

require_once '../../../vendor/autoload.php';

use App\Models\StudentInfo;

//for data edit funtion call from database


// echo '<pre>';
// var_dump($_POST['submit']);
// die;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['submit'])) {
        //print_r('in the update funtion');
        $obj = new StudentInfo($_POST['name'], $_POST['userid'], $_POST['level'], $_POST['group'], $_POST['roll'], $_POST['role'], $_POST['description']);
        $success = $obj->update($_POST['submit']);
        if ($success) {
            header("Location: ../../../index.php");
        } else {
            echo "Something went wrong";
        }
    }
}
