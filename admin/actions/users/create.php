<?php
$BASE_PATH = "../../.."
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>OOP crud</title>
</head>

<body>

    <!-- include header -->
    <?php include("../../../layouts/header.php"); ?>

    <section class="rounded-md bg-slate-300 max-w-2xl w-full mx-auto my-10 ">
        <form action="../information/create.php" method="POST" enctype="multipart/form-data">
            <div class="px-5 grid grid-cols-2 gap-4 py-4">

                <!-- <input type="hidden" name="path" value=<?= $BASE_PATH; ?> placeholder=""> -->

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter Name">
                </div>
                <div class="mb-4">
                    <label for="userid" class="block text-gray-700 text-sm font-bold mb-2">UserID</label>
                    <input type="number" name="userid" id="userid" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="UserID">
                </div>
                <div class="mb-4">
                    <label for="level" class="block text-gray-700 text-sm font-bold mb-2">Level</label>
                    <input type="text" name="level" id="level" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Level">
                </div>
                <div class="mb-4">
                    <label for="group" class="block text-gray-700 text-sm font-bold mb-2">Group</label>
                    <input type="text" name="group" id="group" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Group">
                </div>
                <div class="mb-4">
                    <label for="roll" class="block text-gray-700 text-sm font-bold mb-2">Roll</label>
                    <input type="number" name="roll" id="roll" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Roll">
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                    <select name="role" id="role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="pass">Pass</option>
                        <option value="fail">Fail</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                    <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>

            <div class="max-w-xl mx-auto mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4 flex justify-end">
                    <a href="index.php" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Clear</a>
                </div>
                <div class="mb-4">
                    <button name="submit" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                </div>
            </div>
        </form>
    </section>


    <!-- include footer -->
    <?php include("../../../layouts/footer.php"); ?>

</body>

</html>