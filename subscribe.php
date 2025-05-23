<?php include('includes/header.php'); ?>
<h2>Join Our Mailing List</h2>
<form method="post">
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="submit" value="Subscribe">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Thanks for subscribing!</p>";
}
?>
<?php include('includes/footer.php'); ?>
