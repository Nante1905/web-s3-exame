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
            <div class="descri">
                <h2> Toutes les descriptions</h2>
                <h3>Titre: <?= $objetDetail->titre ?></h3>
                <p><span><h3>Description:</h3></span> <?= $objetDetail->description ?></p>
                <h3>prix: <?= $objetDetail->prix ?></h3>
            </div>
            <?php foreach($photos as $photo) { ?>
                <div class="img">
                    <img src="<?= base_url() ?>assets/upload/<?= $photo->url ?>.jpg" alt="">
                </div>
            <?php } ?>
            <!-- <div class="img">
                <img src="img/interieur-voiture.jpg" alt="">
            </div> -->
        </div>
        <div class="proposition">
            <h3>Mes objets</h3>
            <?= form_open(''); ?>
                <select name="idobjetgive" id="">
                    <?php foreach($mesObjets as $mesObjet) { ?>
                        <option value="<?= $mesObjet->id ?>"><?= $mesObjet->titre ?></option>
                    <?php } ?>
                </select>
                <p><input type="submit" value="Proposer un echange"></p>
            <?= form_close(); ?>
        </div>
    </div>
</body>
</html>