<?php 

$search = $_GET['search'];

$connection = new mysqli("localhost", "root", "", "auto_svet");
if($connection->connect_errno) {
    echo "Greska u konekciji!";
    exit();
}
$marka = '%' . $search . '%';
$result = "SELECT auto_id, marka, godiste, cena, model, slike FROM auto WHERE marka LIKE ?";
$stmt = $connection->prepare($result);
$stmt->bind_param("s", $markas);
$markas = $marka;
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "<table border='1'> <tr>";
        echo "<td>Marka: " . $row['marka'] . "</td>";
        echo "<td>Godište: " . $row['godiste'] . "</td>";
        echo "<td>Cena: $" . $row['cena'] . "</td>";
        echo "<td>Model: " . $row['model'] . "</td></tr></table>";
        echo "<br><img src='" . $row['slike'] . "' alt='Slika' width='200px' height='150px'>";

        echo "<form action='delete.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='auto_id' value='" . $row['auto_id'] . "'>";
        echo "<input type='submit' value='Obriši'>";
        echo "</form>";

        echo "<form action='edit.php' method='get' style='display:inline;'>";
        echo "<input type='hidden' name='auto_id' value='" . $row['auto_id'] . "'>";
        echo "<input type='submit' value='Izmeni'>";
        echo "</form>";

        echo "<hr>";
    }
} else {
    echo "Nema rezultata za unetu pretragu.";
}

?>