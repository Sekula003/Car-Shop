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
    <title>Naruci</title>
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

<form class="form" id="contact-form" action="../jsphp/forma.php" enctype="multipart/form-data" method="POST">
    <h1>Narucite vas auto</h1>

    <div class="form-input">
        <div class="input-field">
            <p>Ime i prezime:</p>
            <input type="text" id="form-name" name="form-name">
            <p id="errorName" style="color: red;"></p>
        </div>

        <div class="input-field">
            <p>Telefon:</p>
            <input type="text" id="form-number" name="form-number">
            <p id="errorNumber" style="color: red;"></p>
        </div>

        <div class="input-field">
            <p>Email:</p>
            <input type="email" id="form-email" name="form-email">
            <p id="errorEmail" style="color: red;"></p>
        </div>
        <div class="input-field">
            <p>Izaberite auto:</p>
            <select id="car" name="car">
                <option value="izabri">Lista auta:</option>
                <option value="Nissan GTR">Nissan GTR</option>
                <option value="Toyota Supra">Toyota Supra</option>
                <option value="Lamborghini Huracan">Lamborghini Huracan</option>
                <option value="Chevrolet Camaro">Chevrolet Camaro</option>
                <option value="Ford Mustang">Ford Mustang</option>
                <option value="Chevrolet Corvette">Chevrolet Corvette</option>
                <option value="Bugatti Chiron">Bugatti Chiron</option>
                <option value="Porsche 911">Porsche 911</option>
                <option value="Ferrari 488GTB">Ferrari 488GTB</option>
                <option value="Audi RS7">Audi RS7</option>
                <option value="BMW M4">BMW M4</option>
                <option value="Mercedes Benz">Mercedes Benz</option>
            </select>
        </div>

        <button class="form-submit">Submit</button>
    </div>
</form>


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
<script src="../jsphp/script.js"></script>
</body>