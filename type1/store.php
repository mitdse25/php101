<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform validation checks here if needed

    // Store the data in a file (you might want to use a database in a real scenario)
    $data = "Email: $email, Password: $password\n";
    file_put_contents("data.txt", $data, FILE_APPEND);

    // Respond to the client (you can customize this response)
    echo "Data stored successfully!";
}
?>
