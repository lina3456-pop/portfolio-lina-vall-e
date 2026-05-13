<?php
$pdo = new PDO("mysql:host=localhost;dbname=monportfolio;charset=utf8", "root", "");

$socialQuery = $pdo->query("SELECT * FROM social_media LIMIT 1");
$social = $socialQuery->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio - Accueil</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header class="navbar">
  <a href="index.html" class="logo">LINA.</a>
  <nav class="nav-links">
    <a href="index.html">Accueil</a>
    <a href="parcours.html">Parcours</a>
    <a href="apropos.html">À propos</a>
    <a href="contact.html">Contact</a>
  </nav>
  <a href="contact.html" class="btn">Discutons •</a>
</header>

<section class="hero">
  <div class="fade">
    <p class="small-title">Portfolio Étudiant</p>
    <h1>Design <br> avec <span class="italic">sens.</span></h1>
    <p>
     Je m’appelle Lina Vallée et je suis étudiante en première année de BUT Métiers du Multimédia et de l’Internet. Passionnée par le numérique et la création, j’aime imaginer et concevoir des projets mêlant design, communication et univers digital.
     À travers mes études et mes projets personnels, je développe progressivement mes compétences en création visuelle, audiovisuel et développement web. Curieuse et créative, j’aime découvrir de nouvelles idées, expérimenter et donner vie à des projets à la fois esthétiques et fonctionnels.
     Ce portfolio me permet de partager mon univers, mes réalisations ainsi que mon évolution au fil de mon parcours dans le multimédia.
    </p>
    <div class="hero-buttons">
      <a href="parcours.html" class="btn">Voir mes projets →</a>
      <a href="apropos.html" class="btn-outline">Mon univers</a>
    </div>
  </div>

  <div class="hero-image">
    <div class="hero-shape"></div>
  </div>
</section>

<section class="about-home">
  <div class="about-text">
    <p class="small-title">À propos</p>
    <h2>Je suis Lina,<br> étudiante en BUT <span class="italic">Métiers du multimédia</span> et de l'Internet.</h2>
    <p>
      Je développe progressivement mon univers créatif à travers des projets mêlant design, communication et digital.
    </p>
  </div>

  <div class="about-visual">
    <div class="stats">
      <h3>1 an</h3>
      <p>d’expérience</p>
     </div>
  </div>
</section>

<section class="section">
  <div class="section-header">
    <div>
      <p class="small-title">Projets récents</p>
      <h2>Quelques <span class="italic">réalisations.</span></h2>
    </div>
  </div>

  <div class="projects-grid">
    <a href="projet1.html" class="project-card">
      <div class="project-img"></div>
      <div class="project-content">
        <span>Codage</span>
        <h3>Planétarium intéractif →</h3>
      </div>
    </a>

    <a href="projet2.html" class="project-card">
      <div class="project-img"></div>
      <div class="project-content">
        <span>Photoshop</span>
        <h3>Vitrine Parfum →</h3>
      </div>
    </a>

    <a href="projet3.html" class="project-card">
      <div class="project-img"></div>
      <div class="project-content">
        <span>Refonte de site</span>
        <h3>KINFOLK SHOP →</h3>
      </div>
    </a>
  </div>
</section>

<footer class="footer">
  <h2>Un projet <br> en tête ?</h2>
  <br>
  <a href="contact.html" class="btn">Discutons de votre projet</a>

  <div class="footer-bottom">
    <p>© 2026 Lina. Tous droits réservés.</p>
    <p>Instagram · LinkedIn </p>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
