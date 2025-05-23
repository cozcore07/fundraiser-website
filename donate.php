<?php include('includes/header.php'); ?>
<h2>Make a Donation</h2>
<form method="POST" action="thank_you.php">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="number" name="amount" placeholder="Donation Amount" required><br>
    <input type="submit" value="Donate">
</form>
<?php include('includes/footer.php'); ?>
