<?php

require_once '../utils.php';
require_once('../src/models/Product.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        $description = $_POST["description"];

        // dd($name);
        $product = new Product($name, $email, $password, $role, $description);
        $product->store();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>created data</title>
</head>

<body>

    <?php require_once('../layouts/header.php'); ?>

    <section class="rounded-md bg-slate-300 max-w-6xl w-full mx-auto my-10 ">

        <div>

        </div>

    </section>



</body>

</html>