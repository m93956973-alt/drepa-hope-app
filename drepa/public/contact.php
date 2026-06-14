<?php include("../config/db.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Contact - Drepa Hope</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<style>
body{
    background:#f5f7fa;
}

.hero{
    background: linear-gradient(rgba(0,0,0,0.6), rgba(192,57,43,0.7)),
    url('../assets/images/slides/img1.jpg');
    background-size:cover;
    color:white;
    padding:80px 0;
    text-align:center;
}

.contact-card{
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.social-box i{
    font-size:30px;
}

.social-link{
    text-decoration:none;
    color:black;
    transition:0.3s;
}

.social-link:hover{
    color:#c0392b;
    transform:scale(1.05);
}
</style>

</head>

<body>

<?php include("navbar.php"); ?>

<!-- HERO -->
<div class="hero">
    <h1>Contactez Drepa Hope</h1>
    <p>Nous sommes là pour vous écouter et vous aider ❤️</p>
</div>

<div class="container mt-5">

<div class="row g-4">

<!-- FORMULAIRE -->
<div class="col-md-7">
<div class="card contact-card p-4">

<h4>Envoyez-nous un message</h4>

<form method="POST" action="../save_message.php">

<input type="text" name="nom" class="form-control mb-3" placeholder="Votre nom" required>

<input type="email" name="email" class="form-control mb-3" placeholder="Votre email" required>

<textarea name="message" class="form-control mb-3" rows="5" placeholder="Votre message..." required></textarea>

<button class="btn btn-danger w-100">
<i class="bi bi-send"></i> Envoyer
</button>

</form>

</div>
</div>

<!-- INFOS CONTACT -->
<div class="col-md-5">

<div class="card contact-card p-4">

<h4>Nos contacts</h4>

<p><i class="bi bi-telephone text-danger"></i> +223 72 70 02 30</p>

<p><i class="bi bi-envelope text-danger"></i> drepahope@gmail.com</p>

<p><i class="bi bi-geo-alt text-danger"></i> Bamako, Mali</p>

<hr>

<h5>Suivez-nous</h5>

<div class="d-flex flex-column gap-3 social-box">

<!-- WhatsApp -->
<a class="social-link" href="https://wa.me/22372700230" target="_blank">
<i class="bi bi-whatsapp text-success"></i> WhatsApp
</a>

<!-- Facebook / LinkedIn -->
<a class="social-link" href="https://www.linkedin.com/company/dr%C3%A9pa-hope/" target="_blank">
<i class="bi bi-linkedin text-primary"></i> LinkedIn / Facebook
</a>

<!-- Email -->
<a class="social-link" href="mailto:drepahope@gmail.com">
<i class="bi bi-envelope-fill text-danger"></i> Email direct
</a>

</div>

</div>

</div>

</div>

</div>


<!-- FOOTER -->
<footer class="text-center mt-5 p-3 bg-dark text-white">
© 2026 Drepa Hope ❤️ | Bamako - Mali
</footer>

</body>
</html>