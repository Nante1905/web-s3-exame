<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content">
	<div class="nav">
		<div class="nav-item"><?= anchor('objet/index','Home') ?></div>
		<div class="nav-item"><?= anchor('mesobjets/index','Mes Objets') ?></div>
		<div class="nav-item"><?= anchor('login/disconnect','Deconnexion') ?></div>
	</div>
	<div class="list-objets">
		<?php foreach($objets as $objet) { ?>
			<div class="card-objet">
				<div class="img"><img src="" alt="Image" /></div>

				<div class="card-info">
					<div class="nom"><?= $objet->titre ?></div>
					<div class="prix"><?= $objet->prix ?></div>
				</div>
			</div>
		<?php } ?>
		<!-- <div class="card-objet">
			<div class="img"><img src="" alt="Image" /></div>
			<div class="card-info">
				<div class="nom">Zavatra</div>
				<div class="prix">1234</div>
			</div>
		</div>
		<div class="card-objet">
			<div class="img"><img src="" alt="Image" /></div>
			<div class="card-info">
				<div class="nom">Zavatra</div>
				<div class="prix">1234</div>
			</div>
		</div>
		<div class="card-objet">
			<div class="img"><img src="" alt="Image" /></div>
			<div class="card-info">
				<div class="nom">Zavatra</div>
				<div class="prix">1234</div>
			</div>
		</div>
		<div class="card-objet">
			<div class="img"><img src="" alt="Image" /></div>
			<div class="card-info">
				<div class="nom">Zavatra</div>
				<div class="prix">1234</div>
			</div>
		</div>
		<div class="card-objet">
			<div class="img"><img src="" alt="Image" /></div>
			<div class="card-info">
				<div class="nom">Zavatra</div>
				<div class="prix">1234</div>
			</div>
		</div>
		<div class="card-objet">
			<div class="img"><img src="" alt="Image" /></div>
			<div class="card-info">
				<div class="nom">Zavatra</div>
				<div class="prix">1234</div>
			</div>
		</div> -->
	</div>
</div>
