<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["userId"];
    $password = $_POST["password"];

    // In a real application, you would perform authentication and validation here
    // For this example, let's assume a valid vendor with userID "vendor" and password "password"

    if ($userId === "vendor" && $password === "password") {
        echo "Login successful!";
    } else {
        echo "Login failed. Please check your credentials.";
    }
}
?>