<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $category = $_POST["category"];

    // Save data to a text file (append mode)
    $data = "$name, $email, $password, $category" . PHP_EOL;
    file_put_contents("user_data.txt", $data, FILE_APPEND);

    echo "Registration successful!";
}
?>