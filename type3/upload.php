<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Upload file logic goes here
    $email = $_COOKIE['user'];

    // Example: Move uploaded file to a folder
    $uploadDir = 'uploads/';
    $uploadedFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Upload failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
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
            <h2 class="text-2xl font-semibold mb-6">Upload File</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="file" class="block text-gray-600 text-sm font-medium mb-2">Choose File</label>
                    <input type="file" id="file" name="file" class="w-full p-2 border rounded">
                </div>
                <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Upload File</button>
            </form>
        </div>
    </div>

</body>

</html>
