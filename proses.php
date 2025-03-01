
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fullname = $_POST["full_name"];
$adress = $_POST["adress"];
$email = $_POST["email"];
$phonenumber = $_POST["phone_number"];

echo "<h2>Data dari index.html:</h2>";
echo "Full Name: " . $fullname . "<br>";
echo "Adress: " . $adress . "<br>";
echo "Email: " . $email . "<br>";
echo "Phone Number: " . $phonenumber . "<br>";
}
?>