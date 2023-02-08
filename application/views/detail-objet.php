<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <?php $this->load->view('templates/nav'); ?>
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
            <?= form_open('proposition/proposer'); ?>
                <select name="idobjetgive" id="">
                    <?php foreach($mesObjets as $mesObjet) { ?>
                        <option value="<?= $mesObjet->id ?>"><?= $mesObjet->titre ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" name="idobjetmagataka" value="<?= $idobjetmagataka; ?>">
                <input type="hidden" name=" idutilisateurangatahana" value="<?= $objetDetail->idutilisateur; ?>">
                <p><input type="submit" value="Proposer un echange"></p>
            <?= form_close(); ?>
        </div>
    </div>
</body>
</html>