<?php

require_once "../../src/models/Product.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        $description = $_POST["description"];

        dd($name);
        $product = new Product($name, $email, $password, $role, $description);
        $product->store();
    }
}
?>

<a href="../../index.php">
</a>