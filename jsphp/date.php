<?php
class DateTimeHelper {
    private $trenutniDatumVreme;

    public function __construct() {
        $this->trenutniDatumVreme = new DateTime();
    }

    public function trenutniDatum() {
        return $this->trenutniDatumVreme->format('Y-m-d');
    }

    public function trenutnoVreme() {
        return $this->trenutniDatumVreme->format('H:i:s');
    }
}
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datum i Vreme</title>
</head>
<body>
<?php

$dateHelper = new DateTimeHelper();

echo "<p>Trenutni datum: " . $dateHelper->trenutniDatum() . "</p>";
echo "<p>Trenutno vreme: " . $dateHelper->trenutnoVreme() . "</p>";

?>

</body>
</html>