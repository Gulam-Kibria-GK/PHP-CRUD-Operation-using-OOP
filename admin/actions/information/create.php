<?php

$BASE_PATH = $_POST['path'];
//print_r("test_code created");
require_once "$BASE_PATH/src/models/StudentInfo.php";
//dd($_POST);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $userid = $_POST["userid"];
        $level = $_POST["level"];
        $group = $_POST["group"];
        $roll = $_POST["roll"];
        $role = $_POST["role"];
        $description = $_POST["description"];
        //dd($_POST);
        $Student = new StudentInfo($name, $userid, $level, $group, $roll, $role, $description);
        $success = $Student->store();

        if ($success) {
            header("Location: $BASE_PATH/index.php");
        } else {
            echo "Something went wrong";
        }
    }
}



// go to the index page when submit button is clicked
// header("Location: $BASE_PATH/index.php");
