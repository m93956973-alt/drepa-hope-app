<?php include("../config/db.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Drepa Hope</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://cdn.jsdelivr.net">
<style>
body {
    font-family: "Segoe UI", sans-serif;
    background: #f5f7fa;
}

/* SLIDER */
.slider-img {
    height: 500px;
    object-fit: cover;
    filter: brightness(0.75);
}

/* HERO TEXT */
.hero-text {
    position: absolute;
    top: 35%;
    left: 8%;
    color: white;
    background: rgba(0,0,0,0.55);
    padding: 25px;
    border-radius: 12px;
    max-width: 450px;
}

/* SECTION */
.section {
    padding: 90px 0;
}

/* CARDS */
.card {
    border-radius: 18px;
    transition: 0.3s ease;
    border: none;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 18px 35px rgba(0,0,0,0.15);
}

/* EVENT BOX */
.event-box {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.1);
}

/* STATS */
.stat-number {
    font-size: 42px;
    font-weight: bold;
    color: #c0392b;
}

/* TITLES */
h2 {
    font-weight: 800;
    margin-bottom: 20px;
}

/* WHATSAPP */
.whatsapp {
    position: fixed;
    bottom: 20px;
    right: 20px;
    border-radius: 50px;
    z-index: 999;
}

/* BUTTONS */
.btn-danger {
    border-radius: 10px;
    padding: 10px 20px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
<div class="container">

    <a class="navbar-brand d-flex align-items-center">
        <img src="../assets/images/logo.jpeg" width="45" height="45" class="me-2">
        <b>Drepa Hope</b>
    </a>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">À propos</a></li>
        <li class="nav-item"><a class="nav-link" href="drepano.php">Maladie</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
    </ul>

</div>
</nav>

<!-- SLIDER -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

<div class="carousel-inner">

    <div class="carousel-item active">
        <img src="../assets/images/slides/img1.jpg" class="d-block w-100 slider-img">
    </div>

    <div class="carousel-item">
        <img src="../assets/images/slides/img2.jpg" class="d-block w-100 slider-img">
    </div>

</div>

</div>

<!-- HERO -->
<div class="hero-text">
    <h1 class="fw-bold">Drepa Hope</h1>
    <p>Organisation humanitaire engagée contre la drépanocytose ❤️</p>
    <p class="mb-0">📞 +223 72 70 02 30</p>
    <a href="contact.php" class="btn btn-danger btn-sm mt-2">Nous contacter</a>
</div>s

<!-- INTRO -->
<section class="section text-center">
<div class="container">

<h2>Bienvenue sur Drepa Hope</h2>

<p>
Nous sommes une organisation humanitaire basée à Bamako, engagée dans la lutte contre la drépanocytose.
Nous sensibilisons, accompagnons les patients et organisons des actions de terrain.
</p>

<p class="fw-bold text-danger">
Un seul objectif : sauver des vies ❤️
</p>

</div>
</section>

<!-- EVENT (MODIFIÉ UNIQUEMENT ICI) -->
<section class="section bg-light">
<div class="container">

<div class="row align-items-center event-box p-4">

<div class="col-md-6">
<img src="../assets/images/slides/img3.jpeg" class="img-fluid rounded">
</div>

<div class="col-md-6">

<span class="badge bg-danger">Nos Actions</span>

<h2>Don de sang & solidarité</h2>

<p>
Drepa Hope organise régulièrement des campagnes de don de sang
afin de soutenir les personnes atteintes de drépanocytose.
</p>

<p>
Le don de sang est un geste simple mais essentiel qui permet de sauver des vies
et d’améliorer la prise en charge des patients.
</p>

<p>
Nous mobilisons les jeunes, les bénévoles et les communautés pour renforcer la solidarité.
</p>

<ul>
<li>📍 Actions dans les hôpitaux et communautés</li>
<li>🤝 Participation des bénévoles</li>
<li>❤️ Objectif : sauver des vies</li>
</ul>

<a href="#contact" class="btn btn-danger mt-3">Participer</a>

</div>

</div>

</div>
</section>

<!-- IMAGE IMPACT -->
<section class="section">
<div class="container">

<div class="row align-items-center">

<div class="col-md-6">
<img src="../assets/images/logo.jpeg" class="img-fluid rounded shadow">
</div>

<div class="col-md-6">

<h2>Notre engagement</h2>

<p>Nous sommes présents sur le terrain pour sensibiliser et accompagner les familles touchées.</p>
<p>Chaque action a un seul objectif : sauver des vies.</p>

</div>

</div>

</div>
</section>

<!-- IMPACT -->
<section class="section text-center">
<div class="container">

<h2>Notre impact réel</h2>

<div class="row mt-5 g-4">
<div class="col-md-3">
    <div class="card p-4 shadow border-0 text-center">
        <div class="stat-number">500+</div>
        <p>Patients accompagnés depuis 2023</p>
    </div>
</div>

<div class="col-md-3">
    <div class="card p-4 shadow border-0 text-center">
        <div class="stat-number">20+</div>
        <p>Campagnes de sensibilisation</p>
    </div>
</div>

<div class="col-md-3">
    <div class="card p-4 shadow border-0 text-center">
        <div class="stat-number">100+</div>
        <p>Bénévoles actifs</p>
    </div>
</div>

<div class="col-md-3">
    <div class="card p-4 shadow border-0 text-center">
        <div class="stat-number">1000+</div>
        <p>Personnes sensibilisées</p>
    </div>
</div>
</div>

</div>
</section>

<!-- COMMENT AIDER -->
<section class="section text-center bg-light">
<div class="container">

<h2>Comment aider ?</h2>

<div class="row mt-4 g-4">

<div class="col-md-4">
<div class="card p-4 shadow">
<h5>🩸 Donner du sang</h5>
<p>Participer aux campagnes.</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-4 shadow">
<h5>📢 Sensibiliser</h5>
<p>Partager l’information.</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-4 shadow">
<h5>🤝 Rejoindre</h5>
<p>Devenir membre actif.</p>
</div>
</div>

</div>

</div>
</section>

<!-- CONTACT -->
<section id="contact" class="section text-center">
<div class="container">

<h2>Contactez-nous</h2>

<p>WhatsApp, Email, téléphone ou formulaire — nous sommes disponibles.</p>

<div class="row shadow-lg bg-white rounded overflow-hidden align-items-center">

<div class="col-md-5 bg-danger text-white p-4 text-start">

<p>📞 72 70 02 30</p>
<p>📧 contact@drepahope.org</p>
<p>💬 WhatsApp : +223 72 70 02 30 </p>

</div>
<a href="contact.php" class="btn btn-danger">
    Contact
</a>
</div>

</div>
</section>

<!-- WHATSAPP -->
<a href="https://wa.me/22372700230" class="btn btn-success whatsapp">💬 WhatsApp</a>

<!-- FOOTER -->
<footer class="text-center bg-dark text-white p-3">
© 2026 Drepa Hope ❤️
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>