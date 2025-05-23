<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $data = json_decode(file_get_contents("data/donations.json"), true);
    $data[] = ["name" => $name, "amount" => $amount, "date" => date("Y-m-d")];
    file_put_contents("data/donations.json", json_encode($data, JSON_PRETTY_PRINT));
}
?>
<?php include('includes/header.php'); ?>
<h2>Thank You!</h2>
<p>Your donation has been received.</p>
<a href="donors.php">See Other Donors</a>
<?php include('includes/footer.php'); ?>
