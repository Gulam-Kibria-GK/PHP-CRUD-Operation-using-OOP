<?php
require_once '../../../vendor/autoload.php';

use App\Models\StudentInfo;

$id = $_GET['id'];
// echo '<pre>';
// var_dump($id);
// die;

$obj = new StudentInfo('', '', '', ',', '', '', '');
$success = $obj->delete($id);

if ($success) {
    header("Location: ../../../index.php");
} else {
    echo "Something went wrong";
}
