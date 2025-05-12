<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auto_id = $_POST['auto_id'];
    try {
        $connection = new PDO("mysql:host=localhost;dbname=auto_svet", "root", "");


        $connection->beginTransaction();

        $query = $connection->prepare("DELETE FROM auto WHERE auto_id = :auto_id");
        $query->execute([':auto_id' => $auto_id]);

        if ($query->rowCount() > 0) {

            $connection->commit();
            echo "Automobil uspešno obrisan.";
        } else {
            $connection->rollBack();
            echo "Greška: Nije pronađen automobil sa datim ID-jem.";
        }
    } catch (PDOException $e) {
        $connection->rollBack();
        die("Greška pri brisanju: " . $e->getMessage());
    }
}
?>