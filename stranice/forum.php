<?php
    include '../jsphp/Brojac.php';
    $counter = new Brojac();
    $counter->increment();
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
    <title>Auto Svet</title>
</head>
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
            <li><a href="http://localhost/css%20projekat/stranice/forum.php">Forum</a></li>
        </ul>
</div>
<div class="forum-bg">
    <div class="forum-head">
        <iframe class="iframe1" src="http://localhost/css%20projekat/jsphp/date.php"></iframe>
            <?php $counter->displayCount(); ?>

        <video autoplay muted loop>
            <source src="../slike/drift2.mp4" type="video/mp4">
            <source src="../slike/drift2.mp4" type="video/ogg">
        </video>
    </div>
    
    <div class="forum">
        <div class="left-forum">
            <h1>FAQ</h1>
                <h4>1. Da li nudite nove i polovne automobile?</h4>
                <p>Da, nudimo širok izbor novih i sertifikovanih polovnih 
                    vozila koji odgovaraju svakom budžetu i preferencijama.</p>

                <h4>2. Koje opcije finansiranja nudite?</h4>
                <p>Pružamo različite opcije finansiranja prilagođene vašim potrebama, 
                    uključujući kredite i programe zakupa. Naš tim za finansije će 
                    raditi s vama kako bi pronašli najbolje rešenje.</p>

                <h4>3. Da li prihvatate zamene?</h4>
                <p>Ne, ne prihvatamo zamene vozila.</p>

                <h4>4. Da li pružate usluge servisiranja i održavanja vozila?</h4>
                <p>Da, naš servisni centar je opremljen sertifikovanim tehničarima 
                    koji mogu obaviti sve, od redovnog održavanja do većih popravki.</p>

                <h4>5. Da li su vaša polovna vozila pregledana?</h4>
                <p>Da, sva naša polovna vozila prolaze kroz rigorozan proces pregleda 
                    kako bi se osiguralo da ispunjavaju naše visoke standarde kvaliteta i bezbednosti.</p>

                <h4>6. Kakve garancije nudite na vaša vozila?</h4>
                <p>Naša nova vozila dolaze sa garancijama proizvođača, a mnoga od naših polovnih 
                    vozila uključuju opcije produženih garancija za dodatni mir.</p>

                <h4>7. Mogu li zakazati test vožnju?</h4>
                <p>Naravno! Kontaktirajte nas kako biste zakazali test vožnju u vaše vreme. 
                    Želimo da se osećate sigurno i udobno sa svojom odlukom.</p>

                <h4>8. Da li nudite posebne promocije ili popuste?</h4>
                <p>Da, često imamo posebne promocije i popuste dostupne za određene 
                    automobile i usluge. Obavezno proverite našu veb stranicu ili nas 
                    kontaktirajte za najnovije ponude.</p>

                <h4>9. Šta trebam da ponesem sa sobom prilikom kupovine automobila?</h4>
                <p>Prilikom kupovine automobila, korisno je da ponesete važeću vozačku dozvolu, 
                    dokaz o osiguranju i sve potrebne finansijske dokumente za finansiranje ili procenu zamene.</p>

                <h4>10. Kako mogu kontaktirati vaš tim za podršku kupcima?</h4>
                <p>Možete kontaktirati naš tim za podršku kupcima putem telefona, e-pošte ili 
                    posetom našem salonu tokom radnog vremena. Tu smo da vam pomognemo 
                    sa svim pitanjima ili nedoumicama koje imate.</p>

        </div>
        <div class="right-forum">
        <a class="weatherwidget-io" href="https://forecast7.com/en/45d2719d83/novi-sad/" data-label_1="NOVI SAD" data-label_2="WEATHER" data-theme="original" >NOVI SAD WEATHER</a>
        <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){
            js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';
            fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>
        </div>
    </div>
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

</body>
</html>