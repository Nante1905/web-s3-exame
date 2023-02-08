<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content">

<div class="list-objets">
		<?php for($i=0;$i<sizeof($objet);$i++) { ?>
			<div class="card-objet">
				<div class="img"><img src="<?= base_url().'assets/upload/'.$objet[$i]->url ?>.jpg" alt="Image" /></div>

				<div class="card-info">
					<div class="nom"><?= anchor('objet/detail/'.$objet[$i]->id, $objet[$i]->titre) ?></div>
					<div class="prix"><?= $objet[$i]->prix ?></div>
				</div>
			</div>
		<?php } ?><?php $this->load->view('templates/nav'); ?>