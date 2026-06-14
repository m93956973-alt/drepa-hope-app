<?php include("../config/db.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>À propos - Drepa Hope</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<style>
body {
    background:#f5f7fa;
    font-family: 'Segoe UI', sans-serif;
}

/* HERO */
.hero {
    height: 65vh;
    background: linear-gradient(rgba(0,0,0,0.65), rgba(192,57,43,0.75)),
    url('https://images.unsplash.com/photo-1584515933487-779824d29309') center/cover;
    display:flex;
    align-items:center;
    color:white;
    text-align:center;
}

.hero h1 {
    font-size:65px;
    font-weight:800;
}

/* SECTION */
.section { padding:80px 0; }

/* CARD */
.card {
    border-radius:18px;
    transition:0.3s;
    border:none;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.18);
}

/* LOGO BOX */
.logo-box {
    background:white;
    border-radius:18px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,0.12);
}

/* STATS */
.stat {
    font-size:44px;
    font-weight:800;
    color:#c0392b;
}

/* TEAM */
.team-box {
    height:260px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,#f7f7f7,#ffffff);
}

.icon-lg {
    font-size:85px;
    color:#c0392b;
}

/* PARTNERS */
.partner-logo {
    height:85px;
    object-fit:contain;
    margin-bottom:10px;
    transition:0.3s;
}
.partner-logo:hover {
    transform:scale(1.05);
}

/* TITLES */
h2 {
    font-weight:800;
}
.team-box img {
    transition: 0.4s;
}
.card:hover .team-box img {
    transform: scale(1.05);
}
body {
    background:#f5f7fa;
    font-family: "Segoe UI", sans-serif;
}

/* HERO */
.hero {
    height: 70vh;
    background: linear-gradient(rgba(0,0,0,0.65), rgba(192,57,43,0.75)),
    url('../assets/images/slides/img1.jpg') center/cover;
    display:flex;
    align-items:center;
    color:white;
    text-align:center;
}

/* SECTION */
.section {
    padding: 90px 0;
}

/* CARDS */
.card {
    border-radius: 18px;
    transition: 0.3s;
    border: none;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.15);
}

/* TEAM IMAGE */
.team-box {
    height: 250px;
    overflow: hidden;
    border-radius: 18px 18px 0 0;
}

.team-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.4s;
}

.card:hover .team-box img {
    transform: scale(1.05);
}

/* PARTNER LOGO */
.partner-logo {
    height: 80px;
    object-fit: contain;
    filter: grayscale(0.2);
    transition: 0.3s;
}

.partner-logo:hover {
    transform: scale(1.1);
    filter: grayscale(0);
}

/* STATS */
.stat {
    font-size: 45px;
    font-weight: 800;
    color: #c0392b;
}

/* SECTION TITLE */
h2 {
    font-weight: 800;
    margin-bottom: 20px;
}
</style>

</head>

<body>

<?php include(__DIR__ . "/navbar.php"); ?>

<!-- HERO -->
<section class="hero">
<div class="container">
<h1 class="fw-bold">Drepa Hope</h1>
<p class="fs-5">
Organisation humanitaire engagée dans la lutte contre la drépanocytose au Mali ❤️
</p>
<p class="mt-2">
📍 Bamako | 📅 Depuis 2023 | 🤝 Association communautaire
</p>
</div>
</section>

<!-- QUI SOMMES-NOUS -->
<section class="section">
<div class="container">
<div class="row align-items-center">

<div class="col-md-6">
<p>
Drepa Hope est une organisation humanitaire basée à <b>Bamako - Mali</b>,
créée en 2023 pour lutter contre la drépanocytose à travers la sensibilisation,
le soutien aux patients et les actions communautaires.
</p>

<p>
Nous travaillons avec des hôpitaux, associations et bénévoles pour améliorer
la prise en charge des malades.
</p>

<p class="fw-bold text-danger">
“Chaque vie compte, chaque action sauve une vie.”
</p>

<p class="text-muted">
📍 Bamako | 📅 2023 | 👥 Organisation communautaire
</p>

</div>

<div class="col-md-6 text-center">
<div class="logo-box">
<img src="../assets/images/logo.jpeg" style="max-height:180px;">
</div>
</div>

</div>
</div>
</section>

<!-- VISION -->
<section class="section bg-light text-center">
<div class="container">

<h2>Notre vision</h2>

<p class="lead">
Un monde où la drépanocytose est mieux comprise, mieux prise en charge et où chaque patient
a accès à des soins adaptés sans difficulté.
</p>

<p>
Nous travaillons pour réduire les souffrances liées à cette maladie grâce à la sensibilisation,
la prévention et la solidarité.
</p>

</div>
</section>

 

<!-- POURQUOI IMPORTANT -->
<section class="section bg-light text-center">
<div class="container">

<h2>Pourquoi notre combat est important</h2>

<div class="row mt-4">

<div class="col-md-4">
<h1 class="text-danger">1 enfant sur 2</h1>
<p>souffre de complications sans suivi médical adapté</p>
</div>

<div class="col-md-4">
<h1 class="text-danger">80%</h1>
<p>des familles manquent d’informations sur la maladie</p>
</div>

<div class="col-md-4">
<h1 class="text-danger">1 don</h1>
<p>de sang peut sauver plusieurs vies</p>
</div>

</div>

</div>
</section>

<!-- COMMENT NOUS AGISSONS -->
<section class="section text-center">
<div class="container">

<h2>Comment nous agissons</h2>

<div class="row mt-4 g-4">

<div class="col-md-3">
<i class="bi bi-people fs-1 text-danger"></i>
<h5>Terrain</h5>
<p>Actions dans les communautés</p>
</div>

<div class="col-md-3">
<i class="bi bi-megaphone fs-1 text-danger"></i>
<h5>Sensibilisation</h5>
<p>Campagnes éducatives</p>
</div>

<div class="col-md-3">
<i class="bi bi-droplet fs-1 text-danger"></i>
<h5>Don de sang</h5>
<p>Mobilisation des donneurs</p>
</div>

<div class="col-md-3">
<i class="bi bi-heart fs-1 text-danger"></i>
<h5>Soutien</h5>
<p>Aide aux patients</p>
</div>

</div>

</div>
</section>

<!-- STATS -->
<section class="section text-center bg-light">
<div class="container">

<h2>Notre impact</h2>

<div class="row mt-5">

<div class="col-md-3"><div class="stat">500+</div><p>Patients accompagnés</p></div>
<div class="col-md-3"><div class="stat">20+</div><p>Campagnes</p></div>
<div class="col-md-3"><div class="stat">30+</div><p>Bénévoles</p></div>
<div class="col-md-3"><div class="stat">1000+</div><p>Personnes sensibilisées</p></div>

</div>

</div>
</section>

<!-- TEMOIGNAGES -->
<section class="section text-center">
<div class="container">

<h2>Témoignages</h2>

<div class="row mt-5 g-4">

<div class="col-md-4">
<div class="card p-4">
<p>"Grâce à Drepa Hope, je me sens soutenu."</p>
<h6 class="text-danger">Patient</h6>
</div>
</div>

<div class="col-md-4">
<div class="card p-4">
<p>"Organisation sérieuse et humaine."</p>
<h6 class="text-danger">Parent</h6>
</div>
</div>

<div class="col-md-4">
<div class="card p-4">
<p>"Une vraie famille solidaire."</p>
<h6 class="text-danger">Bénévole</h6>
</div>
</div>

</div>

</div>
</section>

<!-- PARTENAIRES -->
<section class="section text-center bg-light">
<div class="container">

<h2>Nos partenaires</h2>

<div class="row mt-5 g-4 text-center">

<div class="col-md-3">
<div class="card p-3">
<img src="../assets/images/slides/crld.png" class="partner-logo">
<p class="fw-bold">Centre Drépanocytose Point G</p>
<small>Partenaire médical</small>
</div>
</div>

<div class="col-md-3">
<div class="card p-3">
<img src="../assets/images/slides/amlud.jfif" class="partner-logo">
<p class="fw-bold">AMLUD</p>
<small>Sensibilisation</small>
</div>
</div>

<div class="col-md-3">
<div class="card p-3">
<img src="../assets/images/slides/aiddrepa.jfif" class="partner-logo">
<p class="fw-bold">Aiddrepa</p>
<small>Soutien patients</small>
</div>
</div>

<div class="col-md-3">
<div class="card p-3">
<img src="../assets/images/slides/globalshapers.png" class="partner-logo">
<p class="fw-bold">Global Shapers Bamako</p>
<small>Jeunesse & impact</small>
</div>
</div>

</div>
</div>
</section>

<!-- TEAM -->
<section class="section text-center">
<div class="container">

<h2>Notre équipe</h2>

<div class="row mt-5 g-4">

<!-- PRESIDENTE -->
<div class="row mt-5 g-4">

<!-- PRESIDENTE -->
<div class="col-md-4">
<div class="card">
<div class="team-box">
<img src="../assets/images/slides/presi.jpeg">
</div>
<div class="card-body text-center">
<h5 class="fw-bold">Présidente</h5>
<p>Coordination générale et stratégie ONG</p>
</div>
</div>
</div>

<!-- MEDICAL / PROJET -->
<div class="col-md-4">
<div class="card">
<div class="team-box">
<img src="../assets/images/slides/juriste.jpeg">
</div>
<div class="card-body text-center">
<h5 class="fw-bold">Responsable Projets</h5>
<p>Suivi des programmes et partenariats</p>
</div>
</div>
</div>

<!-- BENEVOLE -->
<div class="col-md-4">
<div class="card">
<div class="team-box">
<img src="../assets/images/slides/benevole.jpeg">
</div>
<div class="card-body text-center">
<h5 class="fw-bold">Bénévoles</h5>
<p>Actions terrain et sensibilisation</p>
</div>
</div>
</div>

</div>
</div>

</div>
</section>

<!-- CTA -->
<section class="section text-center bg-danger text-white">
<div class="container">
<h2>Rejoignez notre combat</h2>
<p>Ensemble, nous pouvons sauver des vies ❤️</p>
<a href="contact.php" class="btn btn-light btn-lg">Nous contacter</a>
</div>
</section>

<!-- FOOTER -->
<footer class="text-center bg-dark text-white p-3">
© 2026 Drepa Hope | Bamako ❤️
</footer>

</body>
</html>