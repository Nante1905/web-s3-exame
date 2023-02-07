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
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Objet-List.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Objet-Boxed.css">
</head>

<body>
    <section class="features-boxed"></section>
    <section class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Mes Articles</h2>
                <center><button class="btn-primary" type="button">AJOUTER OBJET</button></center>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description"><label for="">Prix :</label> :10 000A</p>
                    <p class="description"><label for="">Description :</label> Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <p></p>
                    <div></div>
                    <div></div><button class="btn-primary" type="button">Update</button><button class="btn-primary" type="button">Delete</button>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description"><label for="">Prix :</label>10 000A</p>
                    <p class="description"> <label for="">Description :</label> Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <p></p><button class="btn-primary" type="button">Update</button><button class="btn-primary" id="but" type="button">Delete</button>
                    <div></div>
                    <div></div>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description"><label for="">Prix :</label> 10 000A</p>
                    <p class="description"><label for="">Description :</label> Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <p></p>
                    <div></div>
                    <div></div><button class="btn-primary" type="button">Update</button><button class="btn-primary" type="button">Delete</button>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>