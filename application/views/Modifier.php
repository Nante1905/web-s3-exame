<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" style="color: var(--bs-red);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Modification_objet</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Ajout.css">
</head>

<body>
    <section class="contact-clean">
        <form method="post">
            <h2 class="text-center">Modifier l'objet</h2>
            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Nom"></div><input class="form-control" type="number" name="prix" placeholder="Prix de l'objet">
            <div></div>
            <div></div>
            <div class="mb-3"></div><input class="form-control" type="file" name="photo">
            <div class="mb-3"></div><textarea class="form-control" name="description" placeholder="Description"></textarea>
            <div></div>
            <div class="mb-3"><button class="btn btn-primary" type="submit">MODIFIER</button></div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>