<?php
// Your PHP code goes here, if any

// This includes your HTML form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Us</h2>

<form action="https://formspree.io/f/mdoqzeqd" method="POST">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Your Email" required><br>
    <input type="text" name="subject" placeholder="Subject" required><br>
    <textarea name="message" placeholder="Message" required></textarea><br>
    <button type="submit">Send Message</button>
</form>

<!-- Your PHP code continues here, if needed -->

</body>
</html>
