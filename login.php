<?= $BASE_PATH = '.'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!--include header   -->
    <?php include("./layouts/header.php"); ?>

    <div class=" bg-gray-200 min-h-full mx-auto w-full flex justify-center">
        <div class="bg-white shadow-md rounded-lg p-6 w-96 items-center justify-center">
            <h1 class="text-2xl font-semibold mb-4">Login</h1>
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="text" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter Email">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter Password">
                </div>
                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-gray-700 text-sm">Remember me</label>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
                    <a href="#" class="text-gray-500 hover:underline">Forgot Password?</a>
                </div>
                <div class="mt-4 text-center">
                    <a href="./signUp.php" class="text-blue-600 hover:underline">
                        Sign Up
                    </a>
                </div>
                <div class="mt-4 text-center">
                    <a href="https://accounts.google.com/o/oauth2/auth?client_id=YOUR_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI&response_type=code&scope=https://www.googleapis.com/auth/userinfo.email+https://www.googleapis.com/auth/userinfo.profile" class="text-blue-600 hover:underline">
                        Login with Google
                    </a>
                </div>
            </form>
        </div>
    </div>



    <!--include footer-->
    <?php include("./layouts/footer.php"); ?>
</body>

</html>