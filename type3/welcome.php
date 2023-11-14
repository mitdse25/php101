<?php
if (!isset($_COOKIE['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
            <h2 class="text-2xl font-semibold mb-6">Welcome, <?php echo $_COOKIE['user']; ?>!</h2>
            <p>You are now logged in.</p>
        </div>
    </div>

</body>

</html>
