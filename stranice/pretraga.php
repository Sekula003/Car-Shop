<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "auto_svet") or die(mysql_error());

if ($conn->connect_error) {
    die("Neuspela konekcija na bazu: " . $conn->connect_error);
}

$sql = mysqli_query($conn, "SELECT marka, godiste, cena, model, slike FROM auto");


if ($sql->num_rows > 0) {
    $cars = array();

    while($row = $sql->fetch_assoc()) {
        $cars[] = $row;
    }
} 
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="icon" href="slike/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Pretraga</title>
</head>
<body>
    <div class="navbar">
        <div class="nav-logo">
            <img src="../slike/logo.png">
            </div>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
        <dotlottie-player src="https://lottie.host/ee40d79a-fd65-4ea5-a982-b85983c8dd64/f7VS231piC.json" background="transparent" speed="0.5" style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>
            <ul class="nav-list">
            <li><a href="http://localhost/css%20projekat/index.php">O nama</a></li>
            <li><a href="http://localhost/css%20projekat/stranice/pretraga.php">Pretraga</a></li>
            <li><a href="http://localhost/css%20projekat/stranice/naruci.php">Naruci</a></li>
            </ul>
    </div>

    <form action="../jsphp/search.php" method="GET">
    <input class="sbar" name="search" type="text" placeholder="Pretrazi aute...">
    <input class="ssubmit" id="submit" type="submit" value="Pretrazi">
    </form>

    <div class="pretraga-hero">
        <img src="../slike/border.png">
        <img src="../slike/logo.png">
    </div>
    <h1 class="hero-title">Izaberite vas auto</h1>
    
<div class="card-holder">
    <?php
            function generateCarHTML($car) {
                return '
                    <a href="#">
                        <div class="cards">
                            <img src="' . $car['slike'] . '">
                            <h2>' . $car['marka'] . '</h2>
                            <p class="year">' . $car['godiste'] . '. god.</p><br>
                            <p class="price">Cena:</p>
                            <p class="pricetag">' . $car['cena'] . '$</p><br>
                            <p class="model">Model:</p>
                            <p class="modeltag">' . $car['model'] . '</p>
                        </div>
                    </a>
                ';
            }

            function generateCars($cars) {
                $html = '';
                foreach($cars as $car) {
                    $html .= generateCarHTML($car);
                }
                return $html;
            }

            echo generateCars($cars);
        ?>
</div>

    <div class="footer">
        <div class="footer-icon">
            <h2>Zapratite nas na:</h2>
            <a target="_blank" href="https://www.facebook.com"><i id="first-icon" class="fa-brands fa-facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com"><i id="second-icon" class="fa-brands fa-instagram"></i></a>
            <a target="_blank" href="https://twitter.com"><i id="third-icon" class="fa-brands fa-x-twitter"></i></a>
            <a target="_blank" href="https://www.youtube.com"><i id="forth-icon" class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footer-logo">
            <img src="../slike/logo.png">
        </div>
        <div class="footer-nav">
            <ul class="footer-list">
                <li><a href="../index.html">O nama</a></li>
                <li><a href="pretraga.html">Pretraga</a></li>
                <li><a href="naruci.html">Naruci</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>copyright 2023 auto svet | dizajn: luka sekulic</p>
    </div>
    <script type="text/javascript" src="../jsphp/script.js"></script>
</body>
</html>