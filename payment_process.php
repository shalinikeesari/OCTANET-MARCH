<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $quantity = $_POST["quantity"];

    // Validate form data (not shown in this example)

    // Process the payment (not shown in this example)

    // Display a confirmation message
    echo "<p>Thank you, $name, for your purchase!</p>";
    echo "<p>You have purchased $quantity ticket(s). An email confirmation has been sent to $email.</p>";
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: index.html");
    exit;
}
?>