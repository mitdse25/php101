<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update user profile logic goes here
    // You can retrieve user data from the database or file, update the necessary fields, and save it back
    // Example: Update the user's name
    $newName = $_POST['newName'];
    $email = $_COOKIE['user'];

    $userData = file_get_contents('user_data.txt');
    $lines = explode("\n", $userData);

    foreach ($lines as &$line) {
        $fields = explode("|", $line);
        if ($fields[1] === $email) {
            $fields[0] = $newName;
            $line = implode('|', $fields);
            break;
        }
    }

    // Save updated user data
    file_put_contents('user_data.txt', implode("\n", $lines));

    // Redirect back to the welcome page
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
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
            <h2 class="text-2xl font-semibold mb-6">Update Profile</h2>
            <form action="update.php" method="post">
                <div class="mb-4">
                    <label for="newName" class="block text-gray-600 text-sm font-medium mb-2">New Name</label>
                    <input type="text" id="newName" name="newName" class="w-full p-2 border rounded">
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Update Profile</button>
            </form>
        </div>
    </div>

</body>

</html>
