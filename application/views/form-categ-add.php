<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1><?= $titre ?></h1>
<div class="formulaire">
    <?= form_open('admin/add'); ?>
    <?php $name = set_value('nameCateg') == '' ? set_value('nameCateg') : $values[0]; ?>
    <p><input type="text" name="nameCateg" id="nameCateg" value="<?= $name ?>" placeholder="Nom"></p>
    <input type="submit" value="Valider">
    <?= form_close(); ?>
</div>
<div class="error" style="color: red; text-align:center;"><?= validation_errors(); ?></div>