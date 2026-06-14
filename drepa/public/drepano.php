<?php include("../config/db.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Drépanocytose - Drepa Hope</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f7fa;
    font-family: "Segoe UI", sans-serif;
}

/* HERO */
.hero {
    background: linear-gradient(rgba(0,0,0,0.65), rgba(192,57,43,0.75)),
    url('../assets/images/slides/img3.jpeg') center/cover;
    height: 50vh;
    display:flex;
    align-items:center;
    color:white;
    text-align:center;
}

/* SECTION */
.section{
    padding:80px 0;
}

/* CARD */
.card-box{
    border-radius:18px;
    border:none;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    transition:0.3s;
}

.card-box:hover{
    transform:translateY(-8px);
}

/* ICON */
.icon{
    font-size:45px;
    color:#c0392b;
}

/* INFO BOX */
.info-box{
    background:white;
    padding:22px;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    transition:0.3s;
    height:100%;
}

.info-box:hover{
    transform: translateY(-5px);
}

/* IMAGE */
.img-round{
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

/* TITLE */
h2{
    font-weight:800;
}
</style>
</head>

<body>

<?php include("navbar.php"); ?>

<!-- HERO -->
<div class="hero">
    <div class="container">
        <h1 class="fw-bold">La drépanocytose</h1>
        <p class="fs-5">
            Comprendre la maladie pour mieux sauver des vies ❤️
        </p>
        <p>
            Sensibilisation • Prévention • Accompagnement
        </p>
    </div>
</div>

<!-- INTRO -->
<section class="section text-center">
<div class="container">

<h2>Qu’est-ce que la drépanocytose ?</h2>

<p class="mt-3">
La drépanocytose est une maladie génétique du sang qui modifie la forme des globules rouges.
Elle empêche une bonne circulation de l’oxygène dans le corps et provoque des douleurs.
</p>

<div class="row mt-5 g-4">

<div class="col-md-4">
<div class="info-box">
<h5>🧬 Origine</h5>
<p>Maladie génétique transmise par les parents.</p>
</div>
</div>

<div class="col-md-4">
<div class="info-box">
<h5>🩸 Effet</h5>
<p>Les globules rouges deviennent rigides et bloquent la circulation.</p>
</div>
</div>

<div class="col-md-4">
<div class="info-box">
<h5>⚠️ Conséquence</h5>
<p>Crises douloureuses, fatigue et complications graves.</p>
</div>
</div>

</div>

</div>
</section>

<!-- IMAGE + EXPLICATION -->
<section class="section bg-light">
<div class="container">

<div class="row align-items-center">

<div class="col-md-6">
<img src="../assets/images/slides/img3.jpeg" class="img-fluid img-round">
</div>

<div class="col-md-6">

<h2>Comment la maladie agit dans le corps ?</h2>

<p>
Chez une personne atteinte, les globules rouges prennent une forme de faucille,
ce qui bloque la circulation normale du sang.
</p>

<p>
Cela entraîne des crises douloureuses et une fatigue chronique.
</p>

<p class="fw-bold text-danger">
Une bonne information permet de sauver des vies.
</p>

</div>

</div>

</div>
</section>

<!-- SYMPTÔMES -->
<section class="section text-center">
<div class="container">

<h2>⚠️ Symptômes principaux</h2>

<div class="row mt-5 g-4">

<div class="col-md-4">
<div class="card card-box p-4">
<div class="icon">💥</div>
<h5>Crises de douleur</h5>
<p>Douleurs fortes dans les os et articulations.</p>
</div>
</div>

<div class="col-md-4">
<div class="card card-box p-4">
<div class="icon">😴</div>
<h5>Fatigue chronique</h5>
<p>Manque d’énergie permanent.</p>
</div>
</div>

<div class="col-md-4">
<div class="card card-box p-4">
<div class="icon">🩸</div>
<h5>Anémie</h5>
<p>Diminution des globules rouges sains.</p>
</div>
</div>

</div>

</div>
</section>

<!-- PRÉVENTION -->
<section class="section bg-light text-center">
<div class="container">

<h2>💊 Prévention et conseils</h2>

<div class="row mt-4 g-4">

<div class="col-md-3">
<div class="info-box">✔ Dépistage avant mariage</div>
</div>

<div class="col-md-3">
<div class="info-box">✔ Suivi médical régulier</div>
</div>

<div class="col-md-3">
<div class="info-box">✔ Hydratation et repos</div>
</div>

<div class="col-md-3">
<div class="info-box">✔ Sensibilisation familiale</div>
</div>

</div>

</div>
</section>

<!-- MESSAGE FINAL -->
<section class="section text-center">
<div class="container">

<h2>Agissons ensemble ❤️</h2>

<p>
La drépanocytose n’est pas une fatalité si elle est bien prise en charge.
L’information et la prévention sauvent des vies.
</p>

<a href="contact.php" class="btn btn-danger mt-3">Nous contacter</a>

</div>
</section>

</body>
</html>