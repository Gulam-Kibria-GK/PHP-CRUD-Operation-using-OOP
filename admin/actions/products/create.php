<?php

$BASE_PATH = $_POST['path'];
//print_r("test_code created");
print_r($BASE_PATH);

require_once "$BASE_PATH/src/models/Product.php";
//dd($_POST);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        $description = $_POST["description"];

        //dd($name);
        $product = new Product($name, $email, $password, $role, $description);
        // dd($product);
        $success = $product->store();

        if ($success) {
            header("Location: $BASE_PATH/index.php");
        } else {
            echo "Something went wrong";
        }
    }
}



// go to the index page when submit button is clicked
// header("Location: $BASE_PATH/index.php");
