<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>Dynamic</h1>
<div class="formulaire">
    <?= form_open('test/form'); ?>
    <p><input type="text" name="nameCateg" id="nameCateg" value="<?= set_value('nameCateg'); ?>"></p>
    <input type="submit" value="Valider">
    <?= form_close(); ?>
</div>
<div class="error" style="color: red;"><?= validation_errors(); ?></div>