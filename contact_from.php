<!-- contact_form.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Process the form (e.g., save to database, send email)
    echo "<h2>Thank you for your message, $name!</h2>";
    echo "<p>We will get back to you at $email shortly.</p>";
} else {
    echo "<p>Error: Invalid form submission.</p>";
}
?>