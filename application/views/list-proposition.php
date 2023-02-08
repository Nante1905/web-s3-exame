<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('templates/nav'); ?>
<div class="container">
    <div class="list-proposition">
        <?php for($i=0; $i<count($propositions); $i++) { ?>
            <div class="prop-container">
                <div class="prop-item">
                    <div class="asker-nom"><?= $userMangataka[$i]->nom ?> vous propose d'echanger&nbsp;</div>
                    <div class="proposed-objet"><?= $objetAngatahana[$i]->titre ?> contre&nbsp;</div>
                    <div class="asked-objet-nom"><?= $objetMangataka[$i]->titre ?>.</div>
                </div>
                <div class="action">
                    <div class="accept"><?= anchor('proposition/accepter?id='.$propositions[$i]->id,'<button class="accept-btn">Accepter</button>'); ?></div>
                    <div class="refuse"><?= anchor('proposition/refuser?id='.$propositions[$i]->id,'<button class="refuse-btn">Refuser</button>'); ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>