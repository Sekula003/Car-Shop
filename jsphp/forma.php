
<?php

$formName = $_POST['form-name'];
$formNumber = $_POST['form-number'];
$formEmail = $_POST['form-email'];
$formCar = $_POST['car'];

$connection = new mysqli("localhost", "root", "", "auto_svet");
if($connection->connect_errno) {
    echo "Greska u konekciji!";
    exit();
}
$upit = "INSERT INTO kupac(ime_prezime, telefon, email, auto) VALUES(?, ?, ?, ?);";
$stmt = $connection->prepare($upit);
$stmt->bind_param("ssss", $name, $number, $email, $car);
$name = $formName;
$number = $formNumber;
$email = $formEmail;
$car = $formCar;
$stmt->execute();

if($stmt->affected_rows > 0) {
    echo "Uspesno naruceno!";
    }
    else {
    echo "Greska pri unosu!";
    }

mysqli_close($connection);

?>