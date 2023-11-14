<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Validate and store data (you might want to use a database in a real-world scenario)
//     if (strlen($password) >= 8) {
//         $userData = "$name|$email|$password\n";
//         file_put_contents('user_data.txt', $userData, FILE_APPEND);
//         header("Location: login.html");
//     } else {
//         echo 'Password must be at least 8 characters long.';
//     }
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and store data (you might want to use a database in a real-world scenario)
    if (strlen($password) >= 8) {
        // Read existing JSON file or create an empty array
        $userData = json_decode(file_get_contents('user_data.json'), true) ?: [];

        // Add new user data to the array
        $userData[] = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ];

        // Save the updated array back to the JSON file
        file_put_contents('user_data.json', json_encode($userData, JSON_PRETTY_PRINT));

        header("Location: login.html");
    } else {
        echo 'Password must be at least 8 characters long.';
    }
}


?>
