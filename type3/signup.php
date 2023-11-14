<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and sanitize input if necessary

    // Save user data to a file
    $userData = $name . '|' . $email . '|' . $password . "\n";
    file_put_contents('user_data.txt', $userData, FILE_APPEND);

    // Redirect to login page
    header("Location: login.html");
    exit();
}
?>
