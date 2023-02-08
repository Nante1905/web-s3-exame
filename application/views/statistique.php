<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1 style="text-align:center;">Statistiques Admin</h1>
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
                    <div class="chiffre" id="saraka"><?= $usr ?></div>
                    <div class="chiffre"><?= $echange ?></div>
                </p>
            </div>
        </div>
    </div>