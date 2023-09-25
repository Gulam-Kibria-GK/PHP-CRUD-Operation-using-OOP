<?php

$BASE_PATH = '.';

//require_once model Product.php
//require_once "./src/models/StudentInfo.php";
require_once './vendor/autoload.php';

use App\Models\StudentInfo;

// Example user data array (replace this with data fetched from your database)
$users = [
    [
        'name' => 'John Doe',
        'userid' => '123456',
        'level' => '2nd',
        'group' => 'A',
        'roll' => '1',
        'role' => 'Pass',
        'description' => 'Another sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Smith',
        'userid' => '789012',
        'level' => '3rd',
        'group' => 'B',
        'roll' => '2',
        'role' => 'Fail',
        'description' => 'A different sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Doe',
        'userid' => '123456',
        'level' => '2nd',
        'group' => 'A',
        'roll' => '1',
        'role' => 'Pass',
        'description' => 'Another sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Smith',
        'userid' => '789012',
        'level' => '3rd',
        'group' => 'B',
        'roll' => '2',
        'role' => 'Fail',
        'description' => 'A different sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Doe',
        'userid' => '123456',
        'level' => '2nd',
        'group' => 'A',
        'roll' => '1',
        'role' => 'Pass',
        'description' => 'Another sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Smith',
        'userid' => '789012',
        'level' => '3rd',
        'group' => 'B',
        'roll' => '2',
        'role' => 'Fail',
        'description' => 'A different sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Doe',
        'userid' => '123456',
        'level' => '2nd',
        'group' => 'A',
        'roll' => '1',
        'role' => 'Pass',
        'description' => 'Another sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Smith',
        'userid' => '789012',
        'level' => '3rd',
        'group' => 'B',
        'roll' => '2',
        'role' => 'Fail',
        'description' => 'A different sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Doe',
        'userid' => '123456',
        'level' => '2nd',
        'group' => 'A',
        'roll' => '1',
        'role' => 'Pass',
        'description' => 'Another sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Smith',
        'userid' => '789012',
        'level' => '3rd',
        'group' => 'B',
        'roll' => '2',
        'role' => 'Fail',
        'description' => 'A different sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Doe',
        'userid' => '123456',
        'level' => '2nd',
        'group' => 'A',
        'roll' => '1',
        'role' => 'Pass',
        'description' => 'Another sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],
    [
        'name' => 'John Smith',
        'userid' => '789012',
        'level' => '3rd',
        'group' => 'B',
        'roll' => '2',
        'role' => 'Fail',
        'description' => 'A different sample user description. Duis nec dapibus velit, ut consequat velit. Nulla ac libero vitae augue cursus dictum ac eget elit. Sed nec felis a libero fermentum venenatis. Nullam id dignissim odio. Integer nec congue orci, non fermentum augue. Donec feugiat sapien vel turpis aliquet.',
        'image' => '/assets/images/a.jpg' // Replace with the actual image path
    ],

    // Add more user data here
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <!-- include header -->
    <?php include("./layouts/header.php"); ?>

    <div class="container mx-auto mt-5 bg-gray-200 p-4 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-5">User Profiles</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php foreach ($users as $user) : ?>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="<?php echo $user['image']; ?>" alt="<?php echo $user['name']; ?>" class="w-12 h-12 rounded-full">
                        <div class="ml-2">
                            <h2 class="text-lg font-semibold text-blue-700"><?php echo $user['name']; ?></h2>
                            <p class="text-sm text-gray-600"><?php echo 'Level: ' . $user['level']; ?></p>
                            <p class="text-sm text-gray-600"><?php echo 'Group: ' . $user['group']; ?></p>
                        </div>
                        <div class="ml-2 mt-7">
                            <p class="text-sm text-gray-600"><?php echo 'Roll: ' . $user['roll']; ?></p>
                            <p class="text-sm text-gray-600"><?php echo 'Role: ' . $user['role']; ?></p>
                        </div>
                    </div>
                    <p class="text-sm description"><?php echo substr($user['description'], 0, 100); ?></p>
                    <p class="text-sm description-full hidden"><?php echo $user['description']; ?></p>
                    <a href="#" class="text-blue-600 hover:underline read-more">Read more</a>
                    <div class="mt-2 flex space-x-2">
                        <a href="#" class="text-green-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- include footer -->
    <?php include("./layouts/footer.php"); ?>

    <script>
        // JavaScript to toggle description visibility
        const readMoreLinks = document.querySelectorAll('.read-more');
        readMoreLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const description = this.parentElement.querySelector('.description');
                const descriptionFull = this.parentElement.querySelector('.description-full');
                if (description.style.display === 'none' || description.style.display === '') {
                    description.style.display = 'block';
                    descriptionFull.style.display = 'none';
                    this.textContent = 'Read more';
                } else {
                    description.style.display = 'none';
                    descriptionFull.style.display = 'block';
                    this.textContent = 'Read less';
                }
            });
        });
    </script>

</body>

</html>