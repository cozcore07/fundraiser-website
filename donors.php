<?php include('includes/header.php'); ?>
<h2>Our Donors</h2>
<ul>
<?php
$donors = json_decode(file_get_contents("data/donations.json"), true);
foreach ($donors as $donor) {
    echo "<li>{$donor['name']} - \${$donor['amount']} on {$donor['date']}</li>";
}
?>
</ul>
<?php include('includes/footer.php'); ?>
