<?php
/**
 * SCRUM-37: PHP Backend Logic for Contact Form
 * Handles validation and redirection.
 */

// 1. Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Collect and sanitize input data
    // trim() removes whitespace from beginning and end
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // 3. Validation Logic (Empty Fields)
    if (empty($name) || empty($email) || empty($message)) {
        // If invalid, redirect back to home with an error flag
        header("Location: index.php?error=empty_fields#contact");
        exit();
    }

    // 4. Validate Email Format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalid_email#contact");
        exit();
    }

    // 5. Simulate Success (In a real app, you would send an email here)
    // For this project, we just redirect to the Thank You page.
    header("Location: thank-you.html");
    exit();

} else {
    // If someone tries to access this file directly, kick them back to home
    header("Location: index.php");
    exit();
}
?>