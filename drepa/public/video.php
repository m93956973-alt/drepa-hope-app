<?php include("../config/db.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Vidéos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php include("navbar.php"); ?>

<div class="container mt-5 text-center">
    <h1>Vidéos de sensibilisation</h1>

    <div class="row mt-4">

        <div class="col-md-4">
            <iframe width="100%" height="200"
            src="https://www.youtube.com/embed/5WSGqg8Xg9s"></iframe>
        </div>

        <div class="col-md-4">
            <iframe width="100%" height="200"
            src="https://www.youtube.com/embed/1t9J0v6g2Zk"></iframe>
        </div>

        <div class="col-md-4">
            <iframe width="100%" height="200"
            src="https://www.youtube.com/embed/2G8v8mJ9v3Q"></iframe>
        </div>

    </div>
</div>

</body>
</html>