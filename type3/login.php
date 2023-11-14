<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userData = file_get_contents('user_data.txt');
    $lines = explode("\n", $userData);

    foreach ($lines as $line) {
        $fields = explode("|", $line);
        if ($fields[1] === $email && $fields[2] === $password) {
            setcookie('user', $fields[0], time() + 3600, '/');
            header("Location: welcome.php");
            exit();
        }
    }

    echo 'Invalid email or password.';
}
?>
