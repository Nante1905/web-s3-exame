<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>List_objet</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() . '/assets/css/nav.css' ?>">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/mes-objets.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Boxed-Object.css">
</head>

<body>
<?php $this->load->view('templates/nav'); ?>
    
    <section class="features-boxed"></section>
    <section class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Mes Articles</h2>
                <center><?= anchor('mesobjets/addForm', '<button class="btn-primary" type="button">AJOUTER OBJET</button>') ?></center>
            </div>
            <div class="row articles">
                <?php foreach($objets as $objet) { ?>
                    <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="<?= base_url() ?>assets/upload/<?= $objet->url ?>"></a>
                        <h3 class="name"><?= $objet->titre ?></h3>
                        <p class="description"><label for="">Prix :</label><?= $objet->prix ?></p>
                        <p class="description"><label for="">Description :</label> <?= $objet->description ?></p>
                        <p></p>
                        <!-- TODO -->
                        <div></div><span><?= anchor('mesobjets/updateForm?id='.$objet->id, '<button class="btn-primary" type="button">Update</button>') ?></span><span><?= anchor('mesobjets/delete?id='.$objet->id, '<button class="btn-primary" type="button">Delete</button>') ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>