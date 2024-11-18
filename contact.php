<!-- contact.php -->
<?php include('header.php'); ?>

<main>
    <h2>Contact Us</h2>
    <form action="contact_form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br>

        <button type="submit">Submit</button>
    </form>
</main>

<?php include('footer.php'); ?>