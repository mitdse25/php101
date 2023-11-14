<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Delete user account logic goes here
    $email = $_COOKIE['user'];

    $userData = file_get_contents('user_data.txt');
    $lines = explode("\n", $userData);

    foreach ($lines as $key => $line) {
        $fields = explode("|", $line);
        if ($fields[1] === $email) {
            unset($lines[$key]);
            break;
        }
    }

    // Save updated user data
    file_put_contents('user_data.txt', implode("\n", $lines));

    // Redirect to the login page
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">

    <nav class="bg-white p-4">
        <div class="container mx-auto">
            <ul class="flex">
                <li class="mr-6"><a href="welcome.php">Home</a></li>
                <li class="mr-6"><a href="update.php">Update Profile</a></li>
                <li class="mr-6"><a href="delete.php">Delete Account</a></li>
                <li><a href="upload.php">Upload File</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        <div class="bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl font-semibold mb-6">Delete Account</h2>
            <p>Are you sure you want to delete your account?</p>
            <form action="delete.php" method="post">
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete Account</button>
            </form>
        </div>
    </div>

</body>

</html>
