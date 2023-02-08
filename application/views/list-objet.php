<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content">
	<?php $this->load->view('templates/nav'); ?>
	<div class="search">
		<?= form_open('objet/result') ?>
			<input type="text" name="titre" id="search">
			<select name="idcategorie" id="">
				<?php for($i=0;$i<sizeof($categorie);$i++){	?>

					<option value="<?= $categorie[$i]->id ?>"><?= $categorie[$i]->nom ?></option>
			<?php
				} ?>
			</select>
			<input type="submit" value="Rechercher">
		<?= form_close(); ?>
	</div>
	<div class="list-objets">
		<?php foreach($objets as $objet) { ?>
			<div class="card-objet">
				<div class="img"><img src="<?= base_url().'assets/upload/'.$objet->url ?>" alt="Image" /></div>

				<div class="card-info">
					<div class="nom"><?= anchor('objet/detail/'.$objet->id, $objet->titre) ?></div>
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
