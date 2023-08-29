<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buttonClicked = $_POST["buttonClicked"];

    switch ($buttonClicked) {
        case "yourItem":
            echo "View Your Items";
            break;
        case "addNewItems":
            echo "Add New Items";
            break;
        case "transaction":
            echo "Transaction History";
            break;
        case "logout":
            echo "Logged out";
            break;
        default:
            echo "Invalid action";
    }
}
?>