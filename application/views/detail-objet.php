<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="nav">
		<div class="nav-item">Home</div>
		<div class="nav-item">Mes Objets</div>
		<div class="nav-item">Deconnexion</div>
	</div>
    <div class="all-img">
        <div class="descri-img">
            <div class="img">
                <img src="img/greencar.jpg" alt="">
            </div>
            <div class="img">
                <img src="img/interieur-voiture.jpg" alt="">
            </div>
            <div class="descri"><h2> Toutes les descriptions</h2></div>
        </div>
        <div class="proposition">
            <h3>Mes objets</h3>
            <?= form_open(''); ?>
                <select name="" id="">
                    <option value="">Robe</option>
                    <option value="">Imprimante</option>
                    <option value="">Voiture</option>
                </select>
                <p><input type="submit" value="Proposer un echange"></p>
            <?= form_close(); ?>
        </div>
    </div>
</body>
</html>