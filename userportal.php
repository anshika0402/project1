<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buttonClicked = $_POST["buttonClicked"];

    switch ($buttonClicked) {
        case "vendor":
            echo "You clicked the VENDOR button";
            break;
        case "cart":
            echo "You clicked the Cart button";
            break;
        case "guestLists":
            echo "You clicked the Guest Lists button";
            break;
        case "orderStatus":
            echo "You clicked the Order Status button";
            break;
        case "logout":
            echo "Logged out";
            break;
        default:
            echo "Invalid action";
    }
}
?>