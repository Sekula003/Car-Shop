<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="icon" href="slike/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Auto Svet</title>
</head>
<body>
    <div class="navbar">
        <div class="nav-logo">
            <img src="slike/logo.png">
        </div>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

    <dotlottie-player src="https://lottie.host/ee40d79a-fd65-4ea5-a982-b85983c8dd64/f7VS231piC.json" background="transparent" speed="0.5" style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>
            <ul class="nav-list">
            <li><a href="http://localhost/css%20projekat/index.php">O nama</a></li>
            <li><a href="http://localhost/css%20projekat/stranice/pretraga.php">Pretraga</a></li>
            <li><a href="http://localhost/css%20projekat/stranice/naruci.php">Naruci</a></li>
            </ul>
    </div>
    <div class="hero">
        <h1>Auto Svet</h1>
        <!-- <p>Najbolji sajt za kupovinu automobila</p> -->
        <marquee behavior="scroll" direction="left" loop="2352353"><p>auto svet najbolji sajt za 
            kupovinu automobila, brzo i lako narcuite vas auto iz snova, na stranici pretraga mozete pogledati sve modele.</p></marquee>
    </div>
    <div class="highlights">
        <a href="#">
            <div class="card fade-in-content fade-from-right">
                <img src="slike/GTR.png">
                <h1>Najbolje ocenjen</h1>
                <h2>Nissan GTR</h2>
                <p>Cena:</p>
                <p>200.000$</p>
                <p>2015. god.</p>
            </div>
        </a>
        <a href="#">
        <div class="card fade-in-content fade-from-right">
            <img src="slike/supra.png">
            <h1>Najprodavaniji</h1>
            <h2>Toyota Supra</h2>
            <p>Cena:</p>
            <p>40.000$</p>
            <p>2001. god.</p>
        </div>
        </a>
        <a href="#">
        <div class="card fade-in-content fade-from-left">
            <img src="slike/lambo.png">
            <h1>Najtrazeniji</h1>
            <h2>Lamborghini <br> Huracan</h2>
            <p>Cena:</p>
            <p>250.000$</p>
            <p>2014. god.</p>
        </div>
       </a>
    </div>
    <div class="map-h">
        <h1>NADJITE NAS NA OVIM LOKACIJAMA:</h1>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7945.136590737839!2d19.83417630649979!3d45.24718651493684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d45.249803654797326!2d19.835981877495648!5e0!3m2!1ssr!2srs!4v1702563087923!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <img src="slike/logo.png">
        </div>
        <div class="footer-nav">
            <ul class="footer-list">
                <li><a href="index.html">O nama</a></li>
                <li><a href="stranice/pretraga.html">Pretraga</a></li>
                <li><a href="stranice/naruci.html">Naruci</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>copyright 2023 auto svet | dizajn: luka sekulic</p>
    </div>


    <script>const sectionsFromLeft = document.querySelectorAll('.fade-in-content.fade-from-left');
    const sectionsFromRight = document.querySelectorAll('.fade-in-content.fade-from-right');
    
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 1,
    };
    
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateX(0)';
                observer.unobserve(entry.target);
            }
        });
    }, options);
    
    sectionsFromLeft.forEach(section => {
        observer.observe(section);
    });
    
    sectionsFromRight.forEach(section => {
        observer.observe(section);
    });
    </script>
</body>
</html>