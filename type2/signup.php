<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and store data (you might want to use a database in a real-world scenario)
    if (strlen($password) >= 8) {
        $userData = "$name|$email|$password\n";
        file_put_contents('user_data.txt', $userData, FILE_APPEND);
        header("Location: login.html");
    } else {
        echo 'Password must be at least 8 characters long.';
    }
}
?>
