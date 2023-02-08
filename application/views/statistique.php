<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ;?>statistique.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="stat">
            <center><div class="h2"><p><h2>Nombre d'</h2></p></div></center>
            <div class="mots-container">
                <p> 
                    <div class="mots" id="saraka">Utilisateurs</div>
                    <div class="mots">Echanges</div>
                </p>
            </div>
            <hr>
            <div class="container-nbr">
                <p> 
                    <div class="chiffre" id="saraka">25</div>
                    <div class="chiffre">13</div>
                </p>
            </div>
        </div>
    </div>
</body>
</html>