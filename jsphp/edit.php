<?php
try {
    $connection = new PDO("mysql:host=localhost;dbname=auto_svet", "root", "");

} catch (PDOException $e) {
    die("Konekcija na bazu nije uspela: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auto_id = $_POST['auto_id'];
    $marka = $_POST['marka'];
    $godiste = $_POST['godiste'];
    $cena = $_POST['cena'];
    $model = $_POST['model'];
    $slike = $_POST['slike'];

    $errors = [];
    
    if (empty($godiste) || !ctype_digit($godiste) || (int)$godiste < 1900 || (int)$godiste > date("Y")) {
        $errors[] = "Godiste mora biti validan broj između 1900 i trenutne godine.";
    }
    if (empty($cena) || !filter_var($cena, FILTER_VALIDATE_FLOAT) || $cena <= 0) {
        $errors[] = "Cena mora biti validan broj veći od nule.";
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {    
    try {
        $connection->beginTransaction();

        $query = "UPDATE auto SET marka = :marka, godiste = :godiste, cena = :cena, model = :model, slike = :slike WHERE auto_id = :auto_id";
        $stmt = $connection->prepare($query);
        
        $stmt->execute([
            ':marka' => $marka,
            ':godiste' => $godiste,
            ':cena' => $cena,
            ':model' => $model,
            ':slike' => $slike,
            ':auto_id' => $auto_id
        ]);

        if ($stmt->rowCount() > 0) {
            $connection->commit();
            echo "Automobil uspešno ažuriran.";
        } else {
            $connection->rollBack();
            echo "Nema promena u podacima ili greška prilikom ažuriranja.";
        }

        } catch (PDOException $e) {
            $connection->rollBack();
            die("Greška pri ažuriranju: " . $e->getMessage());
        }
    }
}

if (isset($_GET['auto_id'])) {
    $auto_id = $_GET['auto_id'];

    try {
        $query = "SELECT * FROM auto WHERE auto_id = :auto_id";
        $stmt = $connection->prepare($query);
        $stmt->execute([':auto_id' => $auto_id]);
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            echo "<form action='edit.php' method='post'>";
            echo "<input type='hidden' name='auto_id' value='" . $row['auto_id'] . "'>";
            echo "Marka: <input type='text' name='marka' value='" . $row['marka'] . "'><br>";
            echo "Godište: <input type='text' name='godiste' value='" . $row['godiste'] . "'><br>";
            echo "Cena: <input type='text' name='cena' value='" . $row['cena'] . "'><br>";
            echo "Model: <input type='text' name='model' value='" . $row['model'] . "'><br>";
            echo "Slika: <input type='text' name='slike' value='" . $row['slike'] . "'><br>";
            echo "<input type='submit' value='Ažuriraj'>";
            echo "</form>";
        } else {
            echo "Automobil sa datim ID-jem nije pronađen.";
        }

    } catch (PDOException $e) {
        die("Greška pri preuzimanju podataka: " . $e->getMessage());
    }
}

?>