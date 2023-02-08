<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?= anchor('login/disconnect','Se deconnecter') ?>
<h1>Catégories</h1>
<div class="add"><?= anchor('admin/form?action=add','<button>Ajouter</button>') ?></div>
<div class="add"><?= anchor('admin/stat','<button>Statistiques</button>') ?></div>
<div class="categ">
    <?php foreach($categories as $categorie) { ?>
        <div class="sous-categ">
            <div class="nameCateg"><?= $categorie->nom ?></div>
            <div class="update"><?= anchor('admin/form?action=update&id='.$categorie->id.'&name='.$categorie->nom,'<button>Update</button>') ?></div>
            <div class="delete"><?= anchor('admin/delete?id='.$categorie->id,'<button>Delete</button>') ?></div>
        </div>
    <?php } ?>
</div>
